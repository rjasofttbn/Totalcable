<?php

/**
 * 
 */
class UsersController extends AppController {

    var $layout = 'admin';
    // public $components = array('Auth');
    public $components = array(
        'Session',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array(
                        'username' => 'email', //Default is 'username' in the userModel
                        'password' => 'password'  //Default is 'password' in the userModel
                    ),
                    'userModel' => 'User',
                )
            ),
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'loginRedirect' => array('controller' => 'users', 'action' => 'dashboard'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authError' => "You can't acces that page",
            'authorize' => 'Controller'
        )
    );

    public function isAuthorized($user = null) {
        $sidebar = $user['Role']['name'];
        $this->set(compact('sidebar'));
        return true;
    }

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('registration');
        $admin_logout = true;
       
        $admin_title = "Super Admin";
        $this->set(compact('admin_title','admin_logout'));
    }

    function registration() {
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

    function login() {
        $this->loadModel('User');
        $this->layout = "admin-login";
        // if already logged in check this step
        if ($this->Auth->loggedIn()) {
            return $this->redirect($this->Auth->redirectUrl()); //(array('action' => 'deshboard'));
        }
        // after submit login form check this step
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                if ($this->Auth->user('status') == 'active') {
                    // user is activated
                    return $this->redirect($this->Auth->redirectUrl());
                } else {
                    // user is not activated
                    // log the user out
                    $msg = '<div class="alert alert-error">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <strong>You are blocked, Contact with Adminstrator</strong>
                        </div>';
                    $this->Session->setFlash($msg);
                    return $this->redirect($this->Auth->logout());
                }
            } else {
                $msg = '<div class="alert alert-error">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <strong>Incorrect email/password combination. Try Again</strong>
                        </div>';
                $this->Session->setFlash($msg);
            }
        }
    }

    public function logout() {
        $msg = ' <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>You have successfully logged out</strong> 
                            </div>';
        $this->Session->setFlash($msg);
        return $this->redirect($this->Auth->logout());
    }

    function dashboard() {
        
    }

    function role() {
        $this->loadModel('Role');
        if ($this->request->is('post')) {
            $this->Role->set($this->request->data);
            if ($this->Role->validates()) {
                $this->Role->save($this->request->data['Role']);
                $msg = '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong> Role added succeesfull </strong>
            </div>';
                $this->Session->setFlash($msg);
                return $this->redirect('role');
            } else {
                $msg = $this->generateError($this->Role->validationErrors);
                $this->Session->setFlash($msg);
            }
        }
    }

    public function editrole() {
        $this->loadModel('Role');

        if ($this->request->is('post')) {
            $this->Role->set($this->request->data);
            $this->Role->id = $this->request->data['Role'];
            if ($this->Role->validates()) {
                $this->Role->save($this->request->data['Role']);
                $msg = '<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong> User update succeesfully </strong>
            </div>';
                $this->Session->setFlash($msg);
                return $this->redirect('editrole');
            } else {
                $msg = $this->generateError($this->Role->validationErrors);
                $this->Session->setFlash($msg);
            }
        }
        $this->set('roles', $this->Role->find("list"));
    }

    function manage_user() {
        $this->loadModel('User');
        $users = $this->User->find('all');
        $this->set(compact('users'));
//        pr($users);
//        exit;
    }

    public function edituser($id = NULL) {
        $this->loadModel('User');
        $this->loadModel('Role');

        $user = $this->User->findById($id);

        if ($this->request->is('put')) {
//             pr($this->request->data);
//             exit();

            $this->User->save($this->request->data['User']);
            $msg = '<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong> User update succeesfully </strong>
            </div>';
            $this->Session->setFlash($msg);
            return $this->redirect('manage_user');
        } else {
            $this->request->data = $user;
        }
        $this->set('roles', $this->Role->find("list"));
    }

    function blockuser($id = null) {
        $this->loadModel('User');
        $this->User->id = $id;
        $this->User->saveField("status", "blocked");
        $msg = '<div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
 <strong> User block succeesfully </strong>
</div>';
        $this->Session->setFlash($msg);
        return $this->redirect('manage_user');
    }

    function activeuser($id = null) {
        $this->loadModel('User');
        $this->User->id = $id;
        $this->User->saveField("status", "active");
        $msg = '<div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
 <strong> User active succeesfully </strong>
</div>';
        $this->Session->setFlash($msg);
        return $this->redirect('manage_user');
    }

    function deleteuser($id = null) {
        $this->loadModel('User');
        $this->User->id = $id;
        $this->User->delete($this->request->data('User.id'));
        $msg = '<div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
 <strong> User deleted succeesfully </strong>
</div>';
        $this->Session->setFlash($msg);
        return $this->redirect('manage_user');
    }

    function emailsetting() {
        $this->loadModel('Setting');

        if ($this->request->is('post')) {
            $this->Setting->set($this->request->data);
            if ($this->Setting->validates()) {
                //$this->request->data['User']['password'] = md5($this->request->data['User']['password']);
                $this->request->data['Setting']['field'] = 'email';

                $this->Setting->save($this->request->data['Setting']);
                $msg = '<div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <strong> Email Insert succeesfully </strong>
   </div>';
            } else {
                $msg = $this->generateError($this->Setting->validationErrors);
            }
            $this->Session->setFlash($msg);
        }
        
    }

    function orderconfirmed() {
        $this->loadModel('Reseller');
//          $ordercancelles = $this->Reseller->find('all', array('conditions' => array('status' => 'canceled')));
        $order = $this->Reseller->find('all', array('conditions' => array('status' => 'active')));
//        $order = $this->Reseller->find('all');
        $this->set(compact('order'));
    }

    function ordernotchecked() {
        $this->loadModel('Reseller');
        $ordernotchecks = $this->Reseller->find('all', array(
            'conditions' => array('status' => 'not checked')
        ));
        $this->set(compact('ordernotchecks'));
    }

    function ordercancelled() {
        $this->loadModel('Reseller');
        $ordercancelles = $this->Reseller->find('all', array('conditions' => array('status' => 'canceled')));
        $this->set(compact('ordercancelles'));
    }

    function complained() {
        $this->loadModel('Contactus');
        $complains = $this->Contactus->find('all');
        $this->set(compact('complains'));
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

    function cancelorder($id = null) {
        $this->loadModel('Reseller');
        $this->Reseller->id = $id;
        $this->Reseller->saveField("status", "canceled");
        $msg = '<div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
 <strong> Order canceled succeesfully </strong>
</div>';
        $this->Session->setFlash($msg);
        return $this->redirect($this->request->referer());
    }

    function activeorder($id = null) {
        $this->loadModel('Reseller');
        $this->Reseller->id = $id;
        $this->Reseller->saveField("status", "active");
        $msg = '<div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
 <strong> Order active succeesfully </strong>
</div>';
        $this->Session->setFlash($msg);
        return $this->redirect($this->request->referer());
    }

    function complain_notchecked() {
        $this->loadModel('Contactus');
        $complain_notchecks = $this->Contactus->find('all', array('conditions' => array('status' => 'not checked')));
//        $complain_notchecks = $this->Contactus->find('all');
        $this->set(compact('complain_notchecks'));
    }

    function checked($id = null) {
        $this->loadModel('Contactus');
        $this->Contactus->id = $id;
        $this->Contactus->saveField("status", "checked");
        $msg = '<div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
 <strong> Information checked succeesfully </strong>
</div>';
        $this->Session->setFlash($msg);
        return $this->redirect('complain_notchecked');
    }

    function complain_checked() {
        $this->loadModel('Contactus');
        $complain_checks = $this->Contactus->find('all', array('conditions' => array('status' => 'checked')));
//        $complain_notchecks = $this->Contactus->find('all');
        $this->set(compact('complain_checks'));
    }

    function addstate() {
        $this->loadModel('TariffCountry');
        if ($this->request->is('post')) {
            $this->TariffCountry->set($this->request->data);
            if ($this->TariffCountry->validates()) {
                $this->TariffCountry->save($this->request->data['TariffCountry']);
                $msg = '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong> Package added succeesfull </strong>
            </div>';
                $this->Session->setFlash($msg);
                return $this->redirect('addcountry');
            } else {
                $msg = $this->generateError($this->TariffCountry->validationErrors);
                $this->Session->setFlash($msg);
            }
        }
    }

    function editstate() {
        $this->loadModel('TariffCountry');
        if ($this->request->is('post')) {

            $this->TariffCountry->id = $this->request->data['TariffCountry']['id'];
            $this->TariffCountry->save($this->request->data['TariffCountry']);
            $msg = '<div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong> Package updated succeesfully </strong>
    </div>';
            $this->Session->setFlash($msg);
            return $this->redirect('editcountry');
        }
        $this->set('TariffCountries', $this->TariffCountry->find("list"));
    }
    function package() {
        $this->loadModel('Package');
        if ($this->request->is('post')) {
            $this->Package->set($this->request->data);
            if ($this->Package->validates()) {
                $this->Package->save($this->request->data['Package']);
                $msg = '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong> Package added succeesfull </strong>
            </div>';
                $this->Session->setFlash($msg);
                return $this->redirect('package');
            } else {
                $msg = $this->generateError($this->Package->validationErrors);
                $this->Session->setFlash($msg);
            }
        }
    }
    function editpackage() {
        $this->loadModel('Package');

        if ($this->request->is('post')) {
            pr($this->request->data);
            $this->Package->id = $this->request->data['Package']['id'];
            $this->Package->save($this->request->data['Package']);
            $msg = '<div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong> Package updated succeesfully </strong>
    </div>';
            $this->Session->setFlash($msg);
            return $this->redirect('editpackage');
        }

        $this->set('packages', $this->Package->find("list"));
    }

    function psetting() {
        $this->layout = "news";
        $this->loadModel('Package');

        $this->set('packages', $this->Package->find("list"));
        $this->loadModel('Psetting');

        if ($this->request->is('post')) {


            $this->Psetting->save($this->request->data['Psetting']);
            $msg = '<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong> Psetting insert succeesfully </strong>
            </div>';
            $this->Session->setFlash($msg);
            return $this->redirect('psetting');
        }
    }

    function insertcountry() {
        $this->loadModel('Country');
        if ($this->request->is('post')) {
            $this->Country->set($this->request->data);
            if ($this->Country->validates()) {
               
                $this->Country->save($this->request->data['Country']);
                $msg = '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong> Country added succeesfull </strong>
            </div>';
                $this->Session->setFlash($msg);
                return $this->redirect('insertcountry');
            } else {
                $msg = $this->generateError($this->Country->validationErrors);
                $this->Session->setFlash($msg);
            }
        }
    }
    
    
    function editcountry() {
        $this->loadModel('Country');
        if ($this->request->is('post')) {

            $this->Country->id = $this->request->data['Country']['id'];
            $this->Country->save($this->request->data['Country']);
            $msg = '<div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong> Country updated succeesfully </strong>
    </div>';
            $this->Session->setFlash($msg);
            return $this->redirect('editcountry');
        }
        $this->set('Country', $this->Country->find("list"));
    }
    
        function addSeat() {
        $this->loadModel('Seat');

        $seats = $this->Seat->find('count');
        if ($this->request->is('post')) {
            $data['name'] = 'silver';
            $data['status'] = 'available';
            $msg = '';
            //pr($this->request->data); exit;
            $n = $this->request->data['Seat']['quantity'];
            for ($s = 1; $s <= $n; $s++) {
                $seatNo = $seats + $s;
                $this->Seat->create();
                $this->Seat->save($data);
                $msg .= '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>' . $seatNo . ' No seat added succeesfull </strong>
            </div>';
            }
            $this->Session->setFlash($msg);
            return $this->redirect($this->referer());
        }


        $this->set(compact('seats'));
    }
 
     function seat_booking() {
        $this->layout = 'public-without-slider';
        $this->loadModel('Seat');
        $this->loadModel('Customer');
        if ($this->request->is('post')) {
            $n = '##' . $this->request->data['Seat']['selected'];

            $n = str_replace('##,', '', $n);

            $seats = explode(',', $n);
        
            $booked_seats = '';
            foreach ($seats as $id) {
                $idseat = explode('>', $id);
                $this->Seat->id = $idseat[0];
                $this->Seat->saveField("status", "available");
                $this->Seat->saveField("real", $idseat[1]);
                $booked_seats.=$idseat[1] . ',';
           
            }            
            $msg = '<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>You made ' . count($seats) . ' Seats available Successfully</strong>
            </div>';
            $this->Session->setFlash($msg);
        }


        $status = $this->Seat->find('list', array('fields' => array('id', 'status')));
        $this->set(compact('status'));
//       pr($status); exit;
        $seats = range(1, 24);
        $seats20 = range(1, 20);
        $seats118 = range(101, 118);
        $seats15 = range(7, 12);
        $seats9 = range(1, 6);
        $seats16 = range(1, 16);
        $seats101 = range(101, 116);

        $even = array_filter($seats, function($v) {
            return $v % 2 == 0;
        });
        $even15 = array_filter($seats15, function($v) {
            return $v % 2 == 0;
        });
        $even9 = array_filter($seats9, function($v) {
            return $v % 2 == 0;
        });

        $odd = array_filter($seats, function($v) {
            return $v % 2 == 1;
        });
        $odd15 = array_filter($seats15, function($v) {
            return $v % 2 == 1;
        });
        $even16 = array_filter($seats16, function($v) {
            return $v % 2 == 0;
        });

        $odd16 = array_filter($seats16, function($v) {
            return $v % 2 == 1;
        });
        $odd9 = array_filter($seats9, function($v) {
            return $v % 2 == 1;
        });
        $even20 = array_filter($seats20, function($v) {
            return $v % 2 == 0;
        });

        $odd20 = array_filter($seats20, function($v) {
            return $v % 2 == 1;
        });

        $this->set(compact('seats16', 'even15', 'even20', 'odd20', 'seats118', 'even9', 'odd9', 'odd15', 'even16', 'odd16', 'seats', 'even', 'odd', 'seats101'));
    }


     public function new_booking() {
        $this->loadModel('Seat');
        $this->loadModel('Customer');
         $options['conditions'] = array(
                            'Seat.status' => 'ordered'
                            
                        );
        $options['joins'] = array(
            
            array('table' => 'customers',
                'alias' => 'customers',
                'type' => 'LEFT',
                'conditions' => array(
                    'customers.id = Seat.customer_id',
                   // 'Package.id' = 5

                )
              )
        );
        $options['fields'] = array('customers.*', 'Seat.*');
        $seats = $this->Seat->find('all', $options);
        
        $this->set(compact('seats'));

    }

     function confirm_booking($id = null) {
        $this->loadModel('Seat');
        $this->Seat->id = $id;
        $this->Seat->saveField("status", "booked");
        $msg = '<div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
 <strong> This seat booked by admin succeesfully </strong>
</div>';
        $this->Session->setFlash($msg);
        return $this->redirect($this->referer());
    }

         function cancel_booking($id = null) {
        $this->loadModel('Seat');
        $this->Seat->id = $id;
        $this->Seat->saveField("status", "available");
        $msg = '<div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
 <strong> This booking is canceled by admin succeesfully </strong>
</div>';
        $this->Session->setFlash($msg);
        return $this->redirect($this->referer());
    }


}

?>