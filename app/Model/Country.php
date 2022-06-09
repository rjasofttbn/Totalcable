

<?php

/**
 * 
 */
class Country extends AppModel {

    var $name = "country";
    public $validate = array(
        'name' => array(
            'rule' => 'isUnique',
            'required' => true,
            'message' => 'This country already exist'
        )
    );

}

?>