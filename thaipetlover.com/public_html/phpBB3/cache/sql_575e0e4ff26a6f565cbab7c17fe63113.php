<?php

/* SELECT forum_name FROM phpbb_forums WHERE forum_id = 10 */

$expired = (time() > 1271865193) ? true : false;
if ($expired) { return; }

$this->sql_rowset[$query_id] = array (
  0 => 
  array (
    'forum_name' => 'ซื้อขายกระต่าย',
  ),
);
?>