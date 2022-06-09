
<?php
/**
* 
*/
class Agent extends AppModel
{
	var $name = "agent";

	public $validate = array(
        'email' => array(
                'rule' => 'isUnique',
                'required' => true,
                'message' => 'Email already exist'
            
        ),
        'password' => array(
            'rule' => array('minLength', '6'),
            'message' => 'password must be minimum 6 characters long'
        )
    );
	
}

?>