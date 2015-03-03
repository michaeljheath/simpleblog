<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:18:19
         compiled from "C:\dev\sifo\instances\common\templates\debug\analyzer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2900554e8778b905bb4-12856025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4d8a95a37c347380ca15f62170692a11b0975c5' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\debug\\analyzer.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2900554e8778b905bb4-12856025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'debug_data' => 0,
    'child_debug_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e8778facce9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e8778facce9')) {function content_54e8778facce9($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_custom_tpl')) include 'C:\dev\sifo/instances/common/templates/_smarty/plugins\modifier.custom_tpl.php';
?><!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Sifo debug analyzer</title>
	<meta name="description" content="Sifo debug analyzer">
	<meta name="author" content="Sifo">

	
		<style type="text/css">
			/* @group DEBUG reset */
			#debug {
				text-align:left;
				border-top:1px solid #ccc;
				padding:18px;
				font-size:12px;
				line-height:18px;
				font-size:12px;
				font-family:Arial, sans-serif;
				background:#fff;
				color:#333;
			}

			#debug a {
				color:#2E79D0;
			}

			#debug h1, #debug h2, #debug h3, #debug h4  {
				font-family:Arial, sans-serif;
				color:#444;
				display: block;
				position:relative;
				top:auto;
			}

			#debug h1 a, #debug h2 a, #debug h3 a, #debug h4 a {
				color:#fff;
				text-decoration: none;
			}

			#debug h1 a { color:#333; }

			#debug h1 a:after, #debug h2 a:after, #debug h3 a:after, #debug h4 a:after {
				content:" »";
			}

			#debug h1 {
				font-size: 30px;
				line-height: 36px;
				margin-top: 18px;
			}

			#debug h2 {
				font-size: 24px;
				line-height: 36px;
				margin-top: 18px;
			}

			#debug h3 {
				font-size: 18px;
				line-height: 18px;
				margin-bottom: 18px;
				background:#555;
				color:#fff;
				padding:9px;
				margin:0;
				border-bottom:1px solid #333;
			}

			#debug h4 {
				background-color:#A69600;
				font-size:15px;
				padding:10px;
				border-bottom:1px solid #333;
			}

			#debug li {
				margin-left:18px;
				list-style-type:disc;
			}
			/* @endgroup DEBUG reset */

			#debug div.debug_contents {
				background:#efefef;
				padding:9px;
				display:none;
				overflow: auto;
			}

			#debug div.visible {
				display:block;
			}

			#debug div.debug_contents table {
				margin:9px 0;
			}

			#debug div.debug_contents table th, #debug div.debug_contents table td {
				border:1px solid #ccc;
				padding:3px;
				font-family:monospace;
			}

			#debug div.debug_contents table th {
				font-weight:bold;
				background:#ddd;
				cursor:default;
			}

			#debug .queries small {
				font-size:12px;
				font-weight: normal;
			}

			#debug .query_read {
				background-color: green;
			}

			#debug .query_write {
				background-color: darkblue;
			}

			#debug .query_error {
				background-color: red;
			}

			#debug .query_duplicated {
				background-color: orange;
			}

			#debug .query_slow small, #debug .query_very_slow small,
			#debug .slow {
				background:#eadaaf;
				color:red;
				padding:3px;
				font-weight: bold;
			}

			#debug .query_slow small:after {
				content:" --> Alert: Slow Query";
			}

			#debug .query_very_slow small:after {
				content:" --> Alert: VERY Slow Query";
			}

			#debug .query_very_slow small {
				background:red;
				color:#fff;
			}

			#debug .array strong {
				color: blue;
			}

			#debug .benchmark_contents { float: left; width: 70% }
			#debug .benchmarks_legend { float:right; width:29% }

			.debug_hidden {
			  display: none;
			  visibility: hidden;
			}
		</style>
	
</head>

<body>
	<h1>
		<a id="unpin_execution" title="Unpin this execution debug" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_actions'];?>
?action=pin&execution_key=<?php echo $_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key'];?>
&is_pinned=0"<?php if (!$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['is_pinned']){?> class="debug_hidden"<?php }?> data-counterpart="pin_execution">★</a>
		<a id="pin_execution" title="Pin this execution debug" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_actions'];?>
?action=pin&execution_key=<?php echo $_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key'];?>
&is_pinned=1"<?php if ($_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['is_pinned']){?> class="debug_hidden"<?php }?> data-counterpart="unpin_execution">☆</a>
		Debug for execution key: <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_analyzer'];?>
?execution_key=<?php echo $_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key'];?>
" title="permalink"><?php echo $_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key'];?>
</a>
	</h1>

	<h2><?php if (!$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['is_json']){?>Non <?php }?>JSON response served at <?php echo $_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['date_time'];?>
</h2>
	<h3>URL: <a href="<?php echo $_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['url'];?>
" title="URL executed"><?php echo $_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['url'];?>
</a></h3>
	<h4><?php if ($_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['parent_execution_key']){?>Parent execution: <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_analyzer'];?>
?execution_key=<?php echo $_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['parent_execution_key'];?>
" title="Parent execution Debug Analyzer"><?php echo $_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['parent_execution_key'];?>
</a>.<?php }else{ ?>No parent execution.<?php }?></h4>

	<?php if (isset($_smarty_tpl->tpl_vars['debug_data']->value['children_executions'])){?>
		<h4><?php echo count($_smarty_tpl->tpl_vars['debug_data']->value['children_executions']);?>
 children executions:</h4>

		<ul>
			<?php  $_smarty_tpl->tpl_vars['child_debug_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child_debug_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug_data']->value['children_executions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child_debug_data']->iteration=0;
 $_smarty_tpl->tpl_vars['child_debug_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child_debug_data']->key => $_smarty_tpl->tpl_vars['child_debug_data']->value){
$_smarty_tpl->tpl_vars['child_debug_data']->_loop = true;
 $_smarty_tpl->tpl_vars['child_debug_data']->iteration++;
 $_smarty_tpl->tpl_vars['child_debug_data']->index++;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['child_debug_data']->iteration;?>
.- <a title="Link to the debug of the child execution number <?php echo $_smarty_tpl->tpl_vars['child_debug_data']->iteration;?>
" href="#ajax_debug_<?php echo $_smarty_tpl->tpl_vars['child_debug_data']->index;?>
"><?php echo $_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key'];?>
</a> - <small><a href="<?php echo $_smarty_tpl->tpl_vars['child_debug_data']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['child_debug_data']->value['url'];?>
</a></small></li>
			<?php } ?>
		</ul>
	<?php }?>

	<div id="debug">
		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/mini_debug.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key'],'children_executions'=>(($tmp = @$_smarty_tpl->tpl_vars['debug_data']->value['children_executions'])===null||$tmp==='' ? null : $tmp)), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/traces.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/log_messages.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/headers.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/smarty_errors.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/basic_debug.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/sphinxql.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/search.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/database.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/redis.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/post.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/session.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/cookies.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['debug_data']->value['parent_execution']['execution_key']), 0);?>


		<?php if (isset($_smarty_tpl->tpl_vars['debug_data']->value['children_executions'])){?>
			<div id="ajax_debug">
				<?php  $_smarty_tpl->tpl_vars['child_debug_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child_debug_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug_data']->value['children_executions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child_debug_data']->iteration=0;
 $_smarty_tpl->tpl_vars['child_debug_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child_debug_data']->key => $_smarty_tpl->tpl_vars['child_debug_data']->value){
$_smarty_tpl->tpl_vars['child_debug_data']->_loop = true;
 $_smarty_tpl->tpl_vars['child_debug_data']->iteration++;
 $_smarty_tpl->tpl_vars['child_debug_data']->index++;
?>
					<h1 class="ajax_title">
						<a class="debug_toggle_view" rel="ajax_debug_<?php echo $_smarty_tpl->tpl_vars['child_debug_data']->index;?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['child_debug_data']->iteration;?>
.- AJAX call: <?php echo $_smarty_tpl->tpl_vars['child_debug_data']->value['url'];?>
</a>
					</h1>

					<div id="ajax_debug_<?php echo $_smarty_tpl->tpl_vars['child_debug_data']->index;?>
" <?php if ($_smarty_tpl->tpl_vars['child_debug_data']->index%2==0){?>style="background-color: rgba(209, 209, 209, 0.84);"<?php }?>>
						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/traces.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/log_messages.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/headers.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/smarty_errors.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/basic_debug.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/sphinxql.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/search.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/database.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/redis.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/post.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/session.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

						<?php echo $_smarty_tpl->getSubTemplate (smarty_modifier_custom_tpl("debug/analyzer_modules/cookies.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('debug'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content'],'execution_key'=>$_smarty_tpl->tpl_vars['child_debug_data']->value['execution_key']), 0);?>

					</div>
				<?php } ?>
			</div>
		<?php }?>
	</div>
</body>
</html><?php }} ?>