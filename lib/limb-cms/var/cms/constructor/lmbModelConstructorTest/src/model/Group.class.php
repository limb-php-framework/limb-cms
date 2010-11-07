<?php

class Group extends lmbActiveRecord
{
  protected $_db_table_name = 'group';

  protected $_default_sort_params = array('id'=>'asc');


  protected function _defineRelations()
  {
    $this->_has_many_to_many = array (
  'users' => 
  array (
    'field' => 'group_id',
    'foreign_field' => 'user_id',
    'table' => 'user2group',
    'class' => 'User',
  ),
);
  }

}