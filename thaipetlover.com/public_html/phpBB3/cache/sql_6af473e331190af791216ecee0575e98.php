<?php

/* SELECT s.style_id, t.template_storedb, t.template_path, t.template_id, t.bbcode_bitfield, t.template_inherits_id, t.template_inherit_path, c.theme_path, c.theme_name, c.theme_storedb, c.theme_id, i.imageset_path, i.imageset_id, i.imageset_name FROM phpbb_styles s, phpbb_styles_template t, phpbb_styles_theme c, phpbb_styles_imageset i WHERE s.style_id = 1 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id */

$expired = (time() > 1271870783) ? true : false;
if ($expired) { return; }

$this->sql_rowset[$query_id] = array (
  0 => 
  array (
    'style_id' => '1',
    'template_storedb' => '0',
    'template_path' => 'prosilver',
    'template_id' => '1',
    'bbcode_bitfield' => 'lNg=',
    'template_inherits_id' => '0',
    'template_inherit_path' => '',
    'theme_path' => 'prosilver',
    'theme_name' => 'prosilver',
    'theme_storedb' => '1',
    'theme_id' => '1',
    'imageset_path' => 'prosilver',
    'imageset_id' => '1',
    'imageset_name' => 'prosilver',
  ),
);
?>