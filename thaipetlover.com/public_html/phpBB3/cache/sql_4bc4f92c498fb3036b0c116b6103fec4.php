<?php

/* SELECT COUNT(DISTINCT s.session_ip) as num_guests FROM phpbb_sessions s WHERE s.session_user_id = 1 AND s.session_time >= 1271858640 AND s.session_forum_id = 10 */

$expired = (time() > 1271859007) ? true : false;
if ($expired) { return; }

$this->sql_rowset[$query_id] = array (
  0 => 
  array (
    'num_guests' => '6',
  ),
);
?>