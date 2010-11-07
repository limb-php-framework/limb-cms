<?php

class User extends lmbActiveRecord
{
  protected $_db_table_name = 'user';

  protected $_default_sort_params = array('id'=>'asc');


  protected function _defineRelations()
  {
    $this->_has_many_to_many = array (
  'groups' => 
  array (
    'field' => 'user_id',
    'foreign_field' => 'group_id',
    'table' => 'user2group',
    'class' => 'Group',
  ),
);
  }

}