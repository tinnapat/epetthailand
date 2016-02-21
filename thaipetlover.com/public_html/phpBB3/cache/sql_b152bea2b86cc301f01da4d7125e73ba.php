<?php

/* SELECT forum_id, forum_name, parent_id, forum_type, left_id, right_id FROM phpbb_forums ORDER BY left_id ASC */

$expired = (time() > 1271868185) ? true : false;
if ($expired) { return; }

$this->sql_rowset[$query_id] = array (
  0 => 
  array (
    'forum_id' => '5',
    'forum_name' => 'ThaiPetLover',
    'parent_id' => '0',
    'forum_type' => '0',
    'left_id' => '1',
    'right_id' => '8',
  ),
  1 => 
  array (
    'forum_id' => '7',
    'forum_name' => 'ประกาศ',
    'parent_id' => '5',
    'forum_type' => '1',
    'left_id' => '2',
    'right_id' => '3',
  ),
  2 => 
  array (
    'forum_id' => '18',
    'forum_name' => 'วิธีการใช้งานเว็บบอร์ด',
    'parent_id' => '5',
    'forum_type' => '1',
    'left_id' => '4',
    'right_id' => '5',
  ),
  3 => 
  array (
    'forum_id' => '6',
    'forum_name' => 'แนะนำติชม และแจ้งปัญหาการใช้งานเว็บบอร์ด',
    'parent_id' => '5',
    'forum_type' => '1',
    'left_id' => '6',
    'right_id' => '7',
  ),
  4 => 
  array (
    'forum_id' => '1',
    'forum_name' => 'Hamster',
    'parent_id' => '0',
    'forum_type' => '0',
    'left_id' => '9',
    'right_id' => '16',
  ),
  5 => 
  array (
    'forum_id' => '3',
    'forum_name' => 'แฮมสเตอร์เว็บบอร์ด',
    'parent_id' => '1',
    'forum_type' => '1',
    'left_id' => '10',
    'right_id' => '11',
  ),
  6 => 
  array (
    'forum_id' => '2',
    'forum_name' => 'ซื้อขายแฮมสเตอร์',
    'parent_id' => '1',
    'forum_type' => '1',
    'left_id' => '12',
    'right_id' => '13',
  ),
  7 => 
  array (
    'forum_id' => '4',
    'forum_name' => 'บอร์ดแฮมช่วยแฮม',
    'parent_id' => '1',
    'forum_type' => '1',
    'left_id' => '14',
    'right_id' => '15',
  ),
  8 => 
  array (
    'forum_id' => '8',
    'forum_name' => 'Rabbit',
    'parent_id' => '0',
    'forum_type' => '0',
    'left_id' => '17',
    'right_id' => '22',
  ),
  9 => 
  array (
    'forum_id' => '9',
    'forum_name' => 'เว็บบอร์ดกระต่าย',
    'parent_id' => '8',
    'forum_type' => '1',
    'left_id' => '18',
    'right_id' => '19',
  ),
  10 => 
  array (
    'forum_id' => '10',
    'forum_name' => 'ซื้อขายกระต่าย',
    'parent_id' => '8',
    'forum_type' => '1',
    'left_id' => '20',
    'right_id' => '21',
  ),
  11 => 
  array (
    'forum_id' => '11',
    'forum_name' => 'Cavy',
    'parent_id' => '0',
    'forum_type' => '0',
    'left_id' => '23',
    'right_id' => '28',
  ),
  12 => 
  array (
    'forum_id' => '12',
    'forum_name' => 'เควี่เว็บบอร์ด',
    'parent_id' => '11',
    'forum_type' => '1',
    'left_id' => '24',
    'right_id' => '25',
  ),
  13 => 
  array (
    'forum_id' => '13',
    'forum_name' => 'เว็บบอร์ดซื้อขายแกสบี้',
    'parent_id' => '11',
    'forum_type' => '1',
    'left_id' => '26',
    'right_id' => '27',
  ),
  14 => 
  array (
    'forum_id' => '14',
    'forum_name' => 'General',
    'parent_id' => '0',
    'forum_type' => '0',
    'left_id' => '29',
    'right_id' => '34',
  ),
  15 => 
  array (
    'forum_id' => '15',
    'forum_name' => 'กระดานสนทนา',
    'parent_id' => '14',
    'forum_type' => '1',
    'left_id' => '30',
    'right_id' => '31',
  ),
  16 => 
  array (
    'forum_id' => '16',
    'forum_name' => 'Watchdog',
    'parent_id' => '14',
    'forum_type' => '1',
    'left_id' => '32',
    'right_id' => '33',
  ),
);
?>