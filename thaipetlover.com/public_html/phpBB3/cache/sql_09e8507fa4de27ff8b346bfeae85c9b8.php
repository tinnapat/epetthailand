<?php

/* SELECT smiley_id FROM phpbb_smilies WHERE display_on_posting = 0 LIMIT 1 */

$expired = (time() > 1271870224) ? true : false;
if ($expired) { return; }

$this->sql_rowset[$query_id] = array (
);
?>