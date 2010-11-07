<?php

class Person extends lmbActiveRecord
{
  protected $_db_table_name = 'person';

  protected $_default_sort_params = array('id'=>'asc');


  protected function _defineRelations()
  {
    $this->_has_one = array (
  'social_security' => 
  array (
    'field' => 'social_security_id',
    'class' => 'SocialSecurity',
    'cascade_delete' => false,
    'can_be_null' => true,
  ),
);
  }

}