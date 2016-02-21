<?php

/* SELECT group_message_limit FROM phpbb_groups WHERE group_id = 2 */

$expired = (time() > 1271871691) ? true : false;
if ($expired) { return; }

$this->sql_rowset[$query_id] = array (
  0 => 
  array (
    'group_message_limit' => '0',
  ),
);
?>