<?php

/**
 * 
 */
class AdminsController extends AppController {

    var $layout = 'admin';
    public $components = array('Auth');
public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow('add', 'logout','login');
}

 public function login() {
            $this->loadModel('User');
            $this->layout = "admin-login";

            // if already logged in check this step
            if ($this->Session->check('Auth.User')) {
                return $this->redirect(
                    array('controller' => 'admins', 'action' => 'deshboard'));
            }
            // after submit login form check this step
            if ($this->request->is('post')) {

                $password = md5($this->request->data['User']['password']);
                // this code for login
                $users = $this->User->find('first', array(
                    'conditions' => array('username' => $this->request->data['User']['username'],'password'=>$password)
                    ));

                if (count($users)>0) { // this code for login
                    //return $this->redirect($this->Auth->redirectUrl());
                    $this->Auth->login($this->request->data['User']);
                    return $this->redirect('/admins/deshboard');
                    // Prior to 2.3 use
                    // `return $this->redirect($this->Auth->redirect());`
                } else {

                    $this->Session->setFlash('Invalid username or password, try again');
                    return $this->redirect(array('controller' => 'admins', 'action' => 'login'));
                }
            }
        }

  
        public function logout() {
            // $user = $this->Auth->user();
            // $this->Session->destroy();

            $this->Session->setFlash('you have successfully logged out');
            $this->Auth->logout();
            return $this->redirect(array('controller' => 'admins', 'action' => 'login'));
        }

    function deshboard() {
        
    }

    function create() {
        $this->loadModel('User');
        $this->loadModel('Role');
        if ($this->request->is('post')) {
            $this->User->set($this->request->data);
            if ($this->User->validates()) {
                //$this->request->data['User']['password'] = md5($this->request->data['User']['password']);
                $this->User->save($this->data);
                $msg = '<div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <strong> User Created succeesfully </strong>
   </div>';
            } else {
                $msg = $this->generateError($this->User->validationErrors);
            }
            $this->Session->setFlash($msg);
           // return $this->redirect('create');
        }
        $this->set('roles', $this->Role->find("list"));
    }



    function edit($id = null) {
        $this->loadModel('User');
        $this->loadModel('Role');
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->User->id = $this->request->data['User']['id'];
            $this->User->save($this->request->data['User']);
            $msg = '<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong> Agent updated succeesfully </strong>
	</div>';
            $this->Session->setFlash($msg);
            $this->set('roles', $this->Role->find("list"));
        }
        if (!$this->request->data) {
            $data = $this->User->findById($id);
            $this->request->data = $data;
            $this->set('roles', $this->Role->find("list"));
        }
    }

 


    function active($id) {
        $this->loadModel('User');
        $this->User->id = $id;
        $this->User->saveField("status", "active");
        $msg = '<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong> User activated succeesfully </strong>
			</div>';
        $this->Session->setFlash($msg);
        return $this->redirect('manage');
    }


}

?>