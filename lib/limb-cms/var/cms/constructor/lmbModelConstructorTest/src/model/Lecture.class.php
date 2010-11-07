<?php

class Lecture extends lmbActiveRecord
{
  protected $_db_table_name = 'lecture';

  protected $_default_sort_params = array('id'=>'asc');


  protected function _defineRelations()
  {
    $this->_many_belongs_to = array (
  'course' => 
  array (
    'field' => 'course_id',
    'class' => 'Course',
    'can_be_null' => true,
  ),
);
  }

}