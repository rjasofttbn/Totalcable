<?php

/**
 * 
 */
App::uses('CakeEmail', 'Network/Email');
App::uses('HttpSocket', 'Network/Http');

App::uses('AppController', 'Controller');
require_once(APP . 'Vendor' . DS . 'class.upload.php');

class FrontendsController extends AppController {

    var $layout = 'public-without-slider';
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
                'controller' => '/',
                'action' => 'login'
            ),
            'loginRedirect' => array('controller' => '/', 'action' => 'profile'),
            'logoutRedirect' => array('controller' => '/', 'action' => 'index'),
            'authError' => "You can't acces that page",
            'authorize' => 'Controller'
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        //  $this->Auth->allow('*');
        $this->Auth->allow(array('index', 'shipping_and_returns', 'troubleshoot', 'tariffplan', 'whytotalcable', 'contactus', 'newses', 'reseller', 'shipping', 'package', 'terms_and_conditions', 'refer', 'channels', 'registration','musical_night','seat_booking'));

        // database name must be thum_img,small_img
        $this->img_config = array(
            'ch_signature' => array(
                'image_ratio_crop' => true,
                'image_resize' => true,
                'image_x' => 421,
                'image_y' => 295
            ),
            'c_signature' => array(
                'image_ratio_crop' => true,
                'image_resize' => true,
                'image_x' => 421,
                'image_y' => 295
            ),
            'parent_dir' => 'card_holder_signature',
            'target_path' => array(
                'ch_signature' => WWW_ROOT . 'card_holder_signature' . DS,
                'c_signature' => WWW_ROOT . 'customer_signature' . DS
            )
        );
          if ($this->Auth->loggedIn()) {
            $isloggedin = true;
        }
        else {
            $isloggedin = false;

        }
        $admin_logout = false;
        $admin_title = "My Profile";
        $this->set(compact('isloggedin','admin_title','admin_logout'));


        // create the folder if it does not exist
        if (!is_dir($this->img_config['parent_dir'])) {
            mkdir($this->img_config['parent_dir']);
        }
        foreach ($this->img_config['target_path'] as $img_dir) {
            if (!is_dir($img_dir)) {
                mkdir($img_dir);
            }
        }
        
    }

    public function isAuthorized($user = null) {
        $isloggedin = true;
        $this->set(compact('isloggedin'));
        return true;
    }

    function index() {
        $this->layout = 'public-with-slider';
    }

    function troubleshoot() {
        
    }

    function musical_night() {
        
    }

 function seat_booking() {
        $this->loadModel('Seat');
        $this->loadModel('Customer');
        if ($this->request->is('post')) {
            $customer = $this->Customer->save($this->request->data['Seat']);
            // pr($this->request->data['Seat']['name']); exit;

            $cid = $customer['Customer']['id'];
            $n = '##' . $this->request->data['Seat']['selected'];
            $n = str_replace('##,', '', $n);
            $seats = explode(',', $n);
            $booked_seats = '';
            foreach ($seats as $id) {
                $idseat = explode('>', $id);
                $this->Seat->id = $idseat[0];
                $this->Seat->saveField("status", "booked");
                $this->Seat->saveField("real", $idseat[1]);
                $booked_seats.=$idseat[1] . ',';
                $this->Seat->saveField("customer_id", $cid);
            }
            $booked_seats = $booked_seats . '##';
            $booked_seats = str_replace(',##', '', $booked_seats);
            $from = $this->request->data['Seat']['email'];
            $subject = "Seat booking";
            $cus_name = $this->request->data['Seat']['name'];
            $phone_num = $this->request->data['Seat']['phone'];
            $cus_address = $this->request->data['Seat']['address'];
            $email_custom = "totalcableusa musical night";
            $currenttime = date("Ymd h:i:sa");

            $confirmation = $currenttime . $booked_seats;

            $to = array('info@totalcableusa.com', 'lemonpspu09@gmail.com', 'sattar.kuet@gmail.com','mamun.totaltvs@gmail.com','suman.totaltvs@gmail.com','rehab.totaltvs@gmail.com');


            $description = "seat description";
            $mail_content = __('Name:', 'beopen') . $cus_name . PHP_EOL .
                    __('Email:', 'beopen') . $email_custom . PHP_EOL .
                    __('Phone Number:', 'beopen') . $phone_num . PHP_EOL .
                    __('Confirmation Code:', 'beopen') . $confirmation . PHP_EOL;
            //sendEmail($from,$name,$to,$subject,$body)
            sendEmail($from, $cus_name, $to, $subject, $mail_content);

            $msg = '<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>You bocked ' . count($seats) . ' Seats succeesfully </strong>
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
    function tariffplan() {
        $this->layout = 'public-package';
        if ($this->request->is('post')) {
            
//            http://production.shippingapis.com/ShippingAPI.dll?API= CityStateLookup&XML=<CityStateLookupRequest USERID="138TOTAL1122"><ZipCode ID="0">
//<Zip5>90210</Zip5>
//</ZipCode></CityStateLookupRequest>
            //90210

            $params = '<CityStateLookupRequest USERID="138TOTAL1122"><ZipCode ID="0"><Zip5>' . $this->request->data['Usps']['zipcode'] . '</Zip5></ZipCode></CityStateLookupRequest>';
            $HttpSocket = new HttpSocket();
            $results = $HttpSocket->post('http://production.shippingapis.com/ShippingAPI.dll', array('API' => 'CityStateLookup',
                'XML' => $params
                    )
            );
            $xml = new SimpleXMLElement($results);
            $state = (string) $xml->ZipCode->State;
            $this->loadModel('TariffCountry');
            $this->loadModel('Package');
            $this->loadModel('Psetting');
            $countries = $this->TariffCountry->find('list');
            if (in_array($state, $countries)) {
                $sql = "SELECT psettings.*  FROM packages
                LEFT JOIN psettings ON packages.id=psettings.package_id               
                 WHERE packages.name = 'Full package'
                ";
                $packageName = 'Full package';
                $packages = $this->Package->query($sql);
                // $packages = $this->Package->find('all');
            } else {
                $sql = "SELECT psettings.*,packages.name  FROM packages
                LEFT JOIN psettings ON packages.id=psettings.package_id               
                 WHERE packages.name = 'NABC special package'
                ";
                $packages = $this->Package->query($sql);
                $packageName = 'NABC special package';
            }
            $this->set(compact('packages', 'packageName'));
        }
    }

    function whytotalcable() {
        
    }

function view_package() {
        $this->layout = 'admin';

        $this->loadModel('User');   
     
        //$sql = "SELECT u.id, u.psetting_id, CONCAT( first_name,  ' ', middle_name,  ' ', last_name ) AS name FROM users u INNER JOIN psettings ps ON ps.id = u.psetting_id WHERE u.id = $id";
        //$profile = $this->Psetting->query($sql);
        
        $profile = $this->User->find('all');
        $this->set(compact('profile'));
	
    }


    
   

    function contactus() {
        $this->loadModel('Contactus');
        $this->loadModel('Setting');
        $emails = $this->Setting->find('first', array(
            'conditions' => array('field' => 'email')
        ));
        // $this->layout = "news";
        if ($this->request->is('post')) {
            // send mail :
            $from = $this->request->data['Contactus']['email'];
            $subject = "Complain";
            $cus_name = $this->request->data['Contactus']['name'];
            $email_custom = $this->request->data['Contactus']['email'];
            $to = array($emails['Setting']['value']);
            $phone_num = $this->request->data['Contactus']['phone_number'];
            $description = $this->request->data['Contactus']['message'];
            $mail_content = __('Name:', 'beopen') . $cus_name . PHP_EOL .
                    __('Email:', 'beopen') . $email_custom . PHP_EOL .
                    __('Phone Number:', 'beopen') . $phone_num . PHP_EOL .
                    __('Message:', 'beopen') . $description . PHP_EOL;
            //sendEmail($from,$name,$to,$subject,$body)
            sendEmail($from, $cus_name, $to, $subject, $mail_content);
            // End send mail
            $this->Contactus->save($this->request->data['Contactus']);
            $msg = '<div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <strong>Succeesfully send your message</strong>
   </div>';
            $this->Session->setFlash($msg);
            return $this->redirect('contactus');
        }
    }

    function newses() {
        
    }

    function reseller() {
        $this->loadModel('Reseller');
        $this->loadModel('Setting');
        $emails = $this->Setting->find('first', array(
            'conditions' => array('field' => 'email')
        ));
        if ($this->request->is('post')) {
            $from = $this->request->data['Reseller']['email'];
            $subject = "Reseller order";
            $cus_name = $this->request->data['Reseller']['name'];
            $email_custom = $this->request->data['Reseller']['email'];
            $to = array($emails['Setting']['value']);
            $phone_num = $this->request->data['Reseller']['phone_no'];
            $description = $this->request->data['Reseller']['message'];
            $mail_content = __('Name:', 'beopen') . $cus_name . PHP_EOL .
                    __('Email:', 'beopen') . $email_custom . PHP_EOL .
                    __('Phone Number:', 'beopen') . $phone_num . PHP_EOL .
                    __('Message:', 'beopen') . $description . PHP_EOL;
            //sendEmail($from,$name,$to,$subject,$body)
            sendEmail($from, $cus_name, $to, $subject, $mail_content);
            // End send mail
            $this->Reseller->save($this->request->data['Reseller']);
            $msg = '<div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <strong>Message Succeesfully send</strong>
   </div>';
            $this->Session->setFlash($msg);
            return $this->redirect('reseller');
        }
    }

    function shipping() {
        
    }

    function package() {
        $this->layout = 'public-package';
    }

    function terms_and_conditions() {
        
    }

    function channels() {
        
    }

    function shipping_and_returns() {
        $this->layout = 'public-package';
    }

    function refer() {
        
    }

    
    
    function processImg($img,$type) {
//         pr($img); 
//         echo $type;
//         exit;
        $upload = new Upload($img[$type]);
        $upload->file_new_name_body = time();
        foreach ($this->img_config[$type] as $key => $value) {
            $upload->$key = $value;
        }
        $upload->process($this->img_config['target_path'][$type]);
        if (!$upload->processed) {
            $msg = $this->generateError($upload->error);
            $this->Session->setFlash($msg);
            return $this->redirect($this->referer());
        }
        $return['file_dst_name'] = $upload->file_dst_name;
        return $return;
    }

    function registration() {
        $this->loadModel('User');
        $this->loadModel('Country');
        $this->loadModel('Role');
        $role = $this->Role->findByName('customer');
        $this->layout = 'public-without-slider';
        if ($this->request->is('post')) {

   
   
            $this->User->set($this->request->data);
            $msg = '';
//pr($this->request->data); exit;
            if ($this->User->validates()) {
                //echo 'here'; exit;
                //pr($this->request->data); exit;
                 // pr($this->request->data); exit;
                $result = array();
                $this->request->data['User']['role_id'] = $role['Role']['id'];
                if(!empty($this->request->data['User']['ch_signature']['name'])){
                   $result = $this->processImg($this->request->data['User'],'ch_signature'); 
                   $this->request->data['User']['ch_signature'] = (string)$result['file_dst_name']; 
                
                }
                 if(!empty($this->request->data['User']['c_signature']['name'])){
                   $result = $this->processImg($this->request->data['User'],'c_signature'); 
                   $this->request->data['User']['c_signature'] = (string)$result['file_dst_name']; 
                   
                }
                $this->User->save($this->request->data['User']);

                $msg = '<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong> Your sign up process completed succeesfully </strong>
            </div>';
            } else {
                $msg = $this->generateError($this->User->validationErrors);
            }
            $this->Session->setFlash($msg);
            return $this->redirect('tariffplan');
        }
    }

    function login() {
  
        $this->loadModel('User');
        $this->layout = 'public-without-slider';
        // if already logged in check this step
        if ($this->Auth->loggedIn()) {
            return $this->redirect($this->referer()); //(array('action' => 'deshboard'));
        }

        // after submit login form check this step
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                if ($this->Auth->user('status') == 'active') {
                    // user is activated
                    return $this->redirect('/profile');
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

       function profile() {
        $this->layout = 'admin';
        
    }

    function welcome() {
        $this->layout = 'public-without-slider';
    }

    public function logout() {
       // $this->Session->setFlash('you have successfully logged out');
        $this->Auth->logout();
        return $this->redirect(array('controller' => '/', 'action' => 'index'));
    }

}

?>