<?php

class Document extends lmbActiveRecord
{
  protected $_db_table_name = 'document';

  protected $_default_sort_params = array('id'=>'asc');

  protected $_lazy_attributes = array('description', 'content');

}