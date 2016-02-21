<?php

/* SELECT ban_ip, ban_userid, ban_email, ban_exclude, ban_give_reason, ban_end FROM phpbb_banlist WHERE (ban_ip = '' OR ban_exclude = 1) AND (ban_userid = 0 OR ban_exclude = 1) */

$expired = (time() > 1271863554) ? true : false;
if ($expired) { return; }

$this->sql_rowset[$query_id] = array (
  0 => 
  array (
    'ban_ip' => '',
    'ban_userid' => '0',
    'ban_email' => 'touuuio@gmail.com',
    'ban_exclude' => '0',
    'ban_give_reason' => 'Spam',
    'ban_end' => '0',
  ),
  1 => 
  array (
    'ban_ip' => '',
    'ban_userid' => '0',
    'ban_email' => 'yotieeb@gmail.com',
    'ban_exclude' => '0',
    'ban_give_reason' => '',
    'ban_end' => '0',
  ),
  2 => 
  array (
    'ban_ip' => '',
    'ban_userid' => '0',
    'ban_email' => 'duorilee@gmail.com',
    'ban_exclude' => '0',
    'ban_give_reason' => '',
    'ban_end' => '0',
  ),
  3 => 
  array (
    'ban_ip' => '',
    'ban_userid' => '0',
    'ban_email' => 'yougssio39@gmail.com',
    'ban_exclude' => '0',
    'ban_give_reason' => '',
    'ban_end' => '0',
  ),
);
?>