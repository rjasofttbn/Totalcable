<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('CakeEmail', 'Network/Email');
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array(
        'Session',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array(
                        'username' => 'email', //Default is 'username' in the userModel
                        'password' => 'password'  //Default is 'password' in the userModel
                    ),
                   
                    'passwordHasher' => array(
                        'className' => 'Simple',
                        'hashType' => 'sha256'
                    )
                )
            ),
        )
    );


 public function beforeFilter() {
        $admin = $this->Auth->user();
       
        $admin_sidebar = $admin['Role']['name'];
        $this->set(compact('admin_sidebar'));
    }

    function pr($input = null) {
        echo '<pre>';
        print_r($input);
        echo '</pre>';
    }

    function generateError($input = null) {
        $output = '<ul>';
        foreach ($input as $single) {
            foreach ($single as $value) {
                $output.='<li>' . $value . '</li>';
            }
        }
        $output.='</ul>';
        $output = '<div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			' . $output . '<strong> Change these things and try again. </strong> </div>';
        return $output;
    }

    function sendEmail($from, $name, $to, $subject, $body) {
        $Email = new CakeEmail();
        $Email->config('custom')
                ->from(array($from => $name))
                ->to($to)
                ->subject($subject);
        $cus_name = "lemon";
        $email_custom = "dasdas";
        $product_name = "asd";
        $description = "dasdasd";
        $comment = "asdsad";

        $mail_content = __('Name:', $name) . PHP_EOL . $name . PHP_EOL . PHP_EOL .
                __('Email:', $from) . PHP_EOL . $name . $body;

        if ($Email->send($mail_content)) {
            $this->Session->setFlash('Simple email sent');
        } else {
            $this->Session->setFlash('Simple email not sent');
        }
    }

}
