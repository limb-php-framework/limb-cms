<?php

class SocialSecurity extends lmbActiveRecord
{
  protected $_db_table_name = 'social_security';

  protected $_default_sort_params = array('id'=>'asc');


  protected function _defineRelations()
  {
    $this->_belongs_to = array (
  'person' => 
  array (
    'field' => 'social_security_id',
    'class' => 'Person',
  ),
);
  }

}