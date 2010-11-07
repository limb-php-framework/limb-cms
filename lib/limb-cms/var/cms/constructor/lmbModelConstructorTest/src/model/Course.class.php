<?php

class Course extends lmbActiveRecord
{
  protected $_db_table_name = 'course';

  protected $_default_sort_params = array('id'=>'asc');


  protected function _defineRelations()
  {
    $this->_has_many = array (
  'lectures' => 
  array (
    'field' => 'course_id',
    'class' => 'Lecture',
    'nullify' => true,
  ),
);
  }

}