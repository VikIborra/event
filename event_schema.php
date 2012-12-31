<?php

$schema['event'] = array(
  'id' => array('type' => 'int(11)', 'Null'=>'NO', 'Key'=>'PRI', 'Extra'=>'auto_increment'),
  'userid' => array('type' => 'int(11)'),
  'eventfeed' => array('type' => 'int(11)'),
  'eventtype' => array('type' => 'int(11)'),
  'eventvalue' => array('type' => 'float'),
  'action' => array('type' => 'int(11)'),
  'setfeed' => array('type' => 'int(11)'),
  'setvalue' => array('type' => 'float'),
  'callcurl' => array('type' => 'text'),
  'lasttime' => array('type' => 'int(11)'),
  'mutetime' => array('type' => 'int(11)'),
  'message' => array('type' => 'text')
);

