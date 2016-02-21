<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>" lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>" xml:lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo (isset($this->_rootref['S_CONTENT_ENCODING'])) ? $this->_rootref['S_CONTENT_ENCODING'] : ''; ?>" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Language" content="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>" />
<meta http-equiv="imagetoolbar" content="no" />
<?php if ($this->_rootref['META']) {  echo (isset($this->_rootref['META'])) ? $this->_rootref['META'] : ''; } ?>
<title><?php echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></title>

<link href="../adm/style/admin.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript">
// <![CDATA[
function resize_panel()
{
	var block = document.getElementById('codepanel');	
	var height;
	
	if (window.innerHeight)
	{
		height = window.innerHeight - 150;
		block.style.height = height + 'px';
	}
	else
	{
		//whatever IE needs to do this
	}	
}
// ]]>
</script>

<style type="text/css">
/* <![CDATA[ */

#main {
	font-size: 1em;
	line-height: 0.7em;
	margin: 0;
	padding: 0;
	width: 99%;
}

#diff_content {
	padding: 30px 10px 10px;
}

<?php if ($this->_rootref['DIFF_MODE'] != 'side_by_side' && $this->_rootref['DIFF_MODE'] != 'raw') {  ?>
div#codepanel {
	overflow: auto;
	width: 100%;
	height: 350px;
	display: inline-block;
}
<?php } else { ?>
div#codepanel {	
	background-color: #eee;
}
<?php } if (! $this->_rootref['S_DIFF_NEW_FILE']) {  ?>
/**
* Unified Diff
*/
.file {
	line-height: .7em;
}

.diff {
	margin: 0;
}

.added {
	background-color: #dfd;
}

.removed {
	background-color: #fdd;
}

.info {
	color: #888;
}

.context {
	background-color: #eee;
}

/**
* Inline Diff
*/
.ins {
	background-color: #dfd;
	text-decoration: underline;
}

.del {
	background-color: #fdd;
	text-decoration: line-through;
}

/**
* Column Diff
*/
table.hrdiff {
	margin: 0 0 8px 5px;
	width: 100%;
	overflow: hidden;
	border-bottom: 1px solid #999;
	table-layout: fixed;
}

table.hrdiff th {
	text-align: left;
	width: 50%;
	color: #333;
	font-family: Verdana,Helvetica,sans-serif;
	font-size: 11px;
	border-bottom: 1px solid #999;
	background: transparent;
}

table.hrdiff thead th {
	font-weight: bold;
	font-size: 110%;
	padding: 2px;
}

table.hrdiff tr:first-child th {
	border-top: none;
}

table.hrdiff tbody th {
	padding: 2em 1px 1px 1px;
	font-size: 80%;
	border-top: 1px solid #999;
}

table.hrdiff tbody td.old {
	border-left: 1px solid #999;
	border-right: 1px solid #999;	
}
table.hrdiff tbody td.new {
	border-right: 1px solid #999;	
}

table.hrdiff td pre {
	overflow: auto;
	display: block;
	width: 100%;
	overflow: auto;
	display: block;
}

table.hrdiff .unmodified {
	background: #fff;
}

table.hrdiff .added {
	background: #9f9;
}

table.hrdiff .added_empty {
	background: #cfc;
}

table.hrdiff .modified {
	background: #fd9;
}

table.hrdiff .removed {
	background: #f99;
}

table.hrdiff .removed_empty {
	background: #fcc;
}

table.hrdiff caption {
	caption-side: top;
	text-align: left;
	margin: 0 0 8px 5px;
	font-size: 90%;
	font-weight: bold;
	padding: 5px;
}

table.hrdiff caption span {
	height: 10px;
	width: 10px;
	line-height: 10px;
	letter-spacing: 10px;
	border: 1px solid #000;
	margin-left: 0.5em;
	vertical-align: baseline;
}

<?php } ?>

/* ]]> */
</style>

</head>


<?php if ($this->_rootref['DIFF_MODE'] != 'side_by_side' && $this->_rootref['DIFF_MODE'] != 'raw') {  ?>
<body onresize="resize_panel();" onload="resize_panel();">
<?php } else { ?>
<body>
<?php } ?>

<div id="wrap">
	<div id="page-header">
<?php if ($this->_rootref['S_DIFF_NEW_FILE']) {  ?>

		<h1><?php echo ((isset($this->_rootref['L_VIEWING_FILE_CONTENTS'])) ? $this->_rootref['L_VIEWING_FILE_CONTENTS'] : ((isset($user->lang['VIEWING_FILE_CONTENTS'])) ? $user->lang['VIEWING_FILE_CONTENTS'] : '{ VIEWING_FILE_CONTENTS }')); ?></h1>
<?php } else { ?>
		<h1><?php echo ((isset($this->_rootref['L_VIEWING_FILE_DIFF'])) ? $this->_rootref['L_VIEWING_FILE_DIFF'] : ((isset($user->lang['VIEWING_FILE_DIFF'])) ? $user->lang['VIEWING_FILE_DIFF'] : '{ VIEWING_FILE_DIFF }')); ?></h1>
<?php } if (! $this->_rootref['S_DIFF_NEW_FILE']) {  ?>
		<p id="skip"><a href="#acp"><?php echo ((isset($this->_rootref['L_SKIP'])) ? $this->_rootref['L_SKIP'] : ((isset($user->lang['SKIP'])) ? $user->lang['SKIP'] : '{ SKIP }')); ?></a></p>
		<form method="post">
		<fieldset class="quick">
			<label for="diff_mode"><?php echo ((isset($this->_rootref['L_SELECT_DIFF_MODE'])) ? $this->_rootref['L_SELECT_DIFF_MODE'] : ((isset($user->lang['SELECT_DIFF_MODE'])) ? $user->lang['SELECT_DIFF_MODE'] : '{ SELECT_DIFF_MODE }')); ?>:</label>
			<select name="diff_mode" id="diff_mode"><?php echo (isset($this->_rootref['S_DIFF_MODE_OPTIONS'])) ? $this->_rootref['S_DIFF_MODE_OPTIONS'] : ''; ?></select>

			<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_CHANGE'])) ? $this->_rootref['L_CHANGE'] : ((isset($user->lang['CHANGE'])) ? $user->lang['CHANGE'] : '{ CHANGE }')); ?>" />
		</fieldset>
		</form>
<?php } ?>
	</div>
	
	<div id="page-body">
		<div id="acp">
		<div class="panel" id="codepanel">
			<span class="corners-top"><span></span></span>
				<div id="diff_content">
					<div id="main">

<?php if ($this->_rootref['S_DIFF_CONFLICT_FILE']) {  ?>
		<div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>;"><strong><?php echo ((isset($this->_rootref['L_NUM_CONFLICTS'])) ? $this->_rootref['L_NUM_CONFLICTS'] : ((isset($user->lang['NUM_CONFLICTS'])) ? $user->lang['NUM_CONFLICTS'] : '{ NUM_CONFLICTS }')); ?>: <?php echo (isset($this->_rootref['NUM_CONFLICTS'])) ? $this->_rootref['NUM_CONFLICTS'] : ''; ?></strong></div>
<?php } ?>
						<?php echo (isset($this->_rootref['DIFF_CONTENT'])) ? $this->_rootref['DIFF_CONTENT'] : ''; ?>
					</div>
				</div>
			<span class="corners-bottom"><span></span></span>
		</div>
		</div>
	</div>
	

<?php $this->_tpl_include('simple_footer.html'); ?>