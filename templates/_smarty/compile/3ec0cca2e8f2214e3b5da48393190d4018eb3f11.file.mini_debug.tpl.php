<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 00:35:39
         compiled from "C:\dev\sifo\instances\common\templates\debug\mini_debug.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3146354e7c4cb552644-22265852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ec0cca2e8f2214e3b5da48393190d4018eb3f11' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\debug\\mini_debug.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3146354e7c4cb552644-22265852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_timers' => 0,
    'execution_key' => 0,
    'url' => 0,
    'debug' => 0,
    'children_executions' => 0,
    'ajax_calls_total_time' => 0,
    'child_debug_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e7c4cf0caba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e7c4cf0caba')) {function content_54e7c4cf0caba($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\block.t.php';
if (!is_callable('smarty_modifier_time_format')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\modifier.time_format.php';
if (!is_callable('smarty_function_math')) include 'C:\dev\sifo\libs\Smarty-3.1.4\plugins\function.math.php';
?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_timers']->value)===null||$tmp==='' ? true : $tmp)){?>
	
		<style type="text/css">
			pre.debug, .xdebug-error, .xe-notice{ z-index: 10000; font-family: 'courier new' monospaced; border: 1px solid #CCC; padding: 9px; background: #EFEFEF; position: relative; margin: 1px;}

			/* @group TIMER */
			#debug_timers {
				font-size:12px;
				line-height:18px;
				font-family:Arial, sans-serif;
				color:#333;
				position:fixed;
				top:0;
				right:0;
				background:#fff;
				border:1px solid #ccc;
				border-width:1px 1px 0;
				width:150px;
				cursor:move;
				z-index:10000;
			}
			#debug_timers dl {
				padding:0;
				margin:0;
			}
			#debug_timers dt, #debug_timers dd {
				margin:0;
				padding:2px;
				position:relative;
				border-bottom:1px solid #ccc;
				text-align:center;
			}
			#debug_timers dt {
				font-weight:bold;
				background:#efefef;
				text-align:left;
			}
			#debug_timers dt small,#debug_timers dd small  {
				font-weight:normal;
				font-size:10px
			}
			#debug_timers a.slide {
				position:absolute;
				right:3px;
				top:3px;
				width:17px;
				height:17px;
				text-align:center;
				text-decoration:none;
				background:#ccc;
			}
			#debug_timers dd span {
				display:block;
				float:right;
				margin-top:-10px;
				background:#ccc;
				margin:-2px;
				padding:2px;
				font-size:10px;
			}

			#debug_timers a {
				color: #2E79D0;
			}

			#debug_timers .rebuild_all_active {
				font-weight:bold;
				color:#FF0000;
			}

			#debug_timers .actions_options li{
				text-align: left;
				list-style-type: none;
				margin-left: 20px;
			}

			#debug_timers .query_read {
				background-color: green;
			}

			#debug_timers .query_write {
				background-color: darkblue;
			}

			#debug_timers .query_error {
				background-color: red;
			}

			#debug_timers .query_duplicated {
				background-color: orange;
			}
			/* @endgroup TIMER */
		</style>
	

	<div id="debug_timers" data-sifo-parent-debug-execution-key="<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" data-sifo-debug-actions-url="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_actions'];?>
" data-sifo-debug-analyzer-url="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_analyzer'];?>
">
		<dl>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total time<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<a class="slide" href="#">&uarr;</a></dt>
			<dd><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['total']);?>
</dd>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['scripts']){?>
				<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Scripts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
				<dd><span><?php if (isset($_smarty_tpl->tpl_vars['debug']->value['times']['total'])&&$_smarty_tpl->tpl_vars['debug']->value['times']['total']>0){?><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['scripts'],'format'=>"%.0f"),$_smarty_tpl);?>
%<?php }?></span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['scripts']);?>
</dd>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['db_connections']){?>
				<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
DB connects<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_connections'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_connections']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 connects<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_connections']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)</small></dt>
				<dd><span><?php if (isset($_smarty_tpl->tpl_vars['debug']->value['times']['total'])&&$_smarty_tpl->tpl_vars['debug']->value['times']['total']>0){?><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['db_connections'],'format'=>"%.0f"),$_smarty_tpl);?>
%<?php }?></span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['db_connections']);?>
</dd>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['db_queries']){?>
				<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
DB queries<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_analyzer'];?>
?execution_key=<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
#db_queries" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_queries'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_queries']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 sql<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_queries']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>)</small></dt>
				<dd><span><?php if (isset($_smarty_tpl->tpl_vars['debug']->value['times']['total'])&&$_smarty_tpl->tpl_vars['debug']->value['times']['total']>0){?><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['db_queries'],'format'=>"%.0f"),$_smarty_tpl);?>
%<?php }?></span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['db_queries']);?>
</dd>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['queries_errors']){?>
				<dt class="no-hide query_error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
DB errors<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
				<dd class="no-hide query_error"><strong><?php echo count($_smarty_tpl->tpl_vars['debug']->value['queries_errors']);?>
</strong></dd>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['queries_duplicated']){?>
				<dt class="query_duplicated"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Duplicated Queries<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
				<dd class="query_duplicated"><strong><?php echo count($_smarty_tpl->tpl_vars['debug']->value['queries_duplicated']);?>
</strong></dd>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['smarty_errors']){?>
				<dt class="no-hide query_duplicated"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Smarty errors<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
				<dd class="no-hide query_duplicated"><strong><?php echo count($_smarty_tpl->tpl_vars['debug']->value['smarty_errors']);?>
</strong></dd>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['search']){?>
				<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_analyzer'];?>
?execution_key=<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
#search_queries" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['search'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['search']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['search']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>)</small></dt>
				<dd><span><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['search'],'format'=>"%.0f"),$_smarty_tpl);?>
%</span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['search']);?>
</dd>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['sphinxql']){?>
				<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SphinxQL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_analyzer'];?>
?execution_key=<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
#sphinxql_queries" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['sphinxql'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['sphinxql']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['sphinxql']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>)</small></dt>
				<dd><span><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['sphinxql'],'format'=>"%.0f"),$_smarty_tpl);?>
%</span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['sphinxql']);?>
</dd>
			<?php }?>
			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['debug']->value['sphinxql_errors'])===null||$tmp==='' ? false : $tmp)){?>
				<dt class="no-hide query_error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SphinxQL errors<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
				<dd class="no-hide query_error"><strong><?php echo count($_smarty_tpl->tpl_vars['debug']->value['sphinxql_errors']);?>
</strong></dd>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['cache']){?>
				<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cache<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_analyzer'];?>
?execution_key=<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
#controllers" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['cache'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['cache']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 blocks<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['cache']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>)</small></dt>
				<dd><span><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['cache'],'format'=>"%.0f"),$_smarty_tpl);?>
%</span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['cache']);?>
</dd>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['external']){?>
				<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
External requests<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_analyzer'];?>
?execution_key=<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
#external" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['external'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['external']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 calls<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['external']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>)</small></dt>
				<dd><span><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['external'],'format'=>"%.0f"),$_smarty_tpl);?>
%</span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['external']);?>
</dd>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['memory_usage']!='0 bytes'){?>
				<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Used memory<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
				<dd><?php echo $_smarty_tpl->tpl_vars['debug']->value['memory_usage'];?>
</dd>
			<?php }?>

			<dt class="ajax_calls"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
AJAX<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_analyzer'];?>
?execution_key=<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
#ajax_debug_0" target="_blank"><span class="num_calls"><?php if (isset($_smarty_tpl->tpl_vars['children_executions']->value)){?><?php echo count($_smarty_tpl->tpl_vars['children_executions']->value);?>
<?php }else{ ?>0<?php }?></span> calls</a>)</small></dt>
			<dd class="ajax_calls">
				<?php $_smarty_tpl->tpl_vars['ajax_calls_total_time'] = new Smarty_variable(0, null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['children_executions']->value)){?>
					<?php  $_smarty_tpl->tpl_vars['child_debug_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child_debug_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['children_executions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child_debug_data']->key => $_smarty_tpl->tpl_vars['child_debug_data']->value){
$_smarty_tpl->tpl_vars['child_debug_data']->_loop = true;
?>
						<?php $_smarty_tpl->tpl_vars['ajax_calls_total_time'] = new Smarty_variable($_smarty_tpl->tpl_vars['ajax_calls_total_time']->value+$_smarty_tpl->tpl_vars['child_debug_data']->value['debug_content']['times']['total'], null, 0);?>
					<?php } ?>
				<?php }?>
				<?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['ajax_calls_total_time']->value);?>

			</dd>

			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Automatic rebuild<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
			<?php if ($_smarty_tpl->tpl_vars['debug']->value['rebuild_all']){?>
				<dd>
					<input type="checkbox" name="rebuild_all" id="rebuild_all_active" checked onclick="window.location='?rebuild_nothing=1'">
					<label for="rebuild_all_active" class="rebuild_all_active">Active</label>
				</dd>
			<?php }else{ ?>
				<dd>
					<input type="checkbox" name="rebuild_all" id="rebuild_all_inactive" onclick="window.location='?rebuild_all=1'">
					<label for="rebuild_all_inactive">Inactive</label>
				</dd>
			<?php }?>

			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ACTIONS<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
			<dd>
				<ol class="actions_options">
					<li>
						<a href="?kill_session=1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kill session<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					</li>
					<li>
						<a href="?rebuild=1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rebuild<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					</li>
					<li>
						<a href="?rebuild=1&clean_compile=1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Clean compile<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					</li>
				</ol>
			</dd>

			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Debug<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
			<dd class="no-hide">
				<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['sifo_debug_analyzer'];?>
?execution_key=<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Debug Analyzer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 &raquo;</a>
			</dd>

			<?php if (!isset($_smarty_tpl->tpl_vars['url']->value['sifo_debug_analyzer'])||!isset($_smarty_tpl->tpl_vars['url']->value['sifo_debug_actions'])){?>
				<dt class="query_error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SIFO UPDATE<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
				<dd>
					You have to insert the sifo_debug_actions and sifo_debug_analyzer routes in your router and url.config files.
					<br><br>Check out the <a href="http://sifo.me/API/Debug">Sifo debug documentation</a>.
				</dd>
			<?php }?>
		</dl>
	</div>

	
		<script type="text/javascript">

			// Function used as a dummy callback by the Sifo debug linker JSONP call in order to be able to call it from different sub-domains.
			function foo() {}
			
			function waitingForScript(url, obj) {
				// doesn't work in Opera
				var callback = arguments.callee.caller;
				var args = arguments.callee.caller.arguments;
				var s, ok, timer, doc = document;

				// if the object/function doesn't exist and we've not tried to load it
				// then pull it in and fire the calling function once complete
				if ((typeof window[obj] == 'undefined') && !window['loading' + obj]) {
					window['loading' + obj] = true;

					if (!doc.getElementById('_' + obj)) {
						s = doc.createElement('script');
						s.src = url;
						s.id = '_' + obj;
						doc.body.appendChild(s);
					}

					timer = setInterval(function () {
						ok = false;
						try {
							ok = (typeof window[obj] != 'undefined');
						} catch (e) {}

						if (ok) {
							clearInterval(timer);
							callback.apply(this);
						}
					}, 10);

					// we're loading in the script now, so we're currently waiting
					return true;
				} else {
					// return if the object is already loaded (defined) or not (we're still waiting in that case)
					return typeof window[obj] == 'undefined';
				}
			}

			function LoadjQueryUI() {
				var domain_parts = document.domain.split('.');
				var cookie_domain = document.domain.replace( domain_parts[0], '');

				if ( typeof jQuery != 'function' && waitingForScript( (("https:" == document.location.protocol) ? "https" : "http") + '://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js', 'jQuery')  ) return;

				$(document).ready( function(){

					if (parseFloat(jQuery.fn.jquery) >= 1.8) {
						$.getScript('http://code.jquery.com/jquery-migrate-1.0.0.js' ).done( debugBehaviours );
					} else {
						debugBehaviours();
					}


					function debugBehaviours() {

						// If cookie plugin is not loaded, we declare it
						if ( typeof jQuery.cookie != 'function' )
						{
							jQuery.cookie=function(name,value,options){if(typeof value!='undefined'){options=options||{};if(value===null){value='';options.expires=-1;}var expires='';if(options.expires&&(typeof options.expires=='number'||options.expires.toUTCString)){var date;if(typeof options.expires=='number'){date=new Date();date.setTime(date.getTime()+(options.expires*24*60*60*1000));}else{date=options.expires;}expires='; expires='+date.toUTCString();}var path=options.path?'; path='+(options.path):'';var domain=options.domain?'; domain='+(options.domain):'';var secure=options.secure?'; secure':'';document.cookie=[name,'=',encodeURIComponent(value),expires,path,domain,secure].join('');}else{var cookieValue=null;if(document.cookie&&document.cookie!=''){var cookies=document.cookie.split(';');for(var i=0;i<cookies.length;i++){var cookie=jQuery.trim(cookies[i]);if(cookie.substring(0,name.length+1)==(name+'=')){cookieValue=decodeURIComponent(cookie.substring(name.length+1));break;}}}return cookieValue;}};
						}

						(function($) {
								$.fn.drags = function(opt) {

									opt = $.extend({handle:"",cursor:"move"}, opt);

									if(opt.handle === "") {
										var $el = this;
									} else {
										var $el = this.find(opt.handle);
									}

									return $el.css('cursor', opt.cursor).bind("mousedown", function(e) {
										if(opt.handle === "") {
											var $drag = $(this).addClass('draggable');
										} else {
											var $drag = $(this).addClass('active-handle').parent().addClass('draggable');
										}
										var z_idx = $drag.css('z-index'),
												drg_h = $drag.outerHeight(),
												drg_w = $drag.outerWidth(),
												pos_y = $drag.offset().top + drg_h - e.pageY,
												pos_x = $drag.offset().left + drg_w - e.pageX;
										$drag.css('z-index', 1000).parents().bind("mousemove", function(e) {
											$('.draggable').offset({
												top:e.pageY + pos_y - drg_h,
												left:e.pageX + pos_x - drg_w
											}).bind("mouseup", function() {
														$(this).removeClass('draggable').css('z-index', z_idx);
													});
										});
										e.preventDefault(); // disable selection
									}).bind("mouseup", function() {
												if(opt.handle === "") {
													$(this).removeClass('draggable');
												} else {
													$(this).removeClass('active-handle').parent().removeClass('draggable');
												}
												$.cookie("DEBUG_timer_style", $('#debug_timers').attr('style'),{ expires:7, domain: cookie_domain });
											});

								}
							})(jQuery);

						$('#debug_timers').drags();

						$('#debug_timers a.slide').click( function() {
							if ( $('#debug_timers dt:last').is(':visible') )
							{
								$.cookie('DEBUG_hide_time', 'true', { expires:7, domain: cookie_domain } );
								$('#debug_timers dd:gt(0),#debug_timers dt:gt(0)').not('.no-hide').slideUp();
								$(this).html('&darr;');
							}
							else
							{
								$.cookie('DEBUG_hide_time', 'false', { expires:7, domain: cookie_domain } );
								$('#debug_timers dd:gt(0),#debug_timers dt:gt(0)').slideDown();
								$(this).html('&uarr;');
							}
							return false;
						});

						if ( 'true' == $.cookie( 'DEBUG_hide_time' ) )
						{
							$('#debug_timers dd:gt(0),#debug_timers dt:gt(0)').not('.no-hide').hide();
						}
						if (sStyle = $.cookie("DEBUG_timer_style")){
							$('#debug_timers').attr('style', sStyle);
						}

					

					<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_timers']->value)===null||$tmp==='' ? true : $tmp)){?>

						
							var num_ajax_calls 	= 0;
							var total_time 		= 0;

							// Link a child execution to its parent
							$(document).ajaxComplete(function( e, xhr, settings )
							{
								try
								{
									var response = jQuery.parseJSON( xhr.responseText );
									var debug_timers = $('#debug_timers');

									if ( typeof response.debug_total_time != 'undefined' )
									{
										$('#debug_timers .ajax_calls').show();

										$.ajax({
											dataType: "jsonp",
											url: debug_timers.data('sifoDebugActionsUrl') + '?action=link&execution_key=' + debug_timers.data('sifoParentDebugExecutionKey') + '&child_execution_key=' + response.debug_execution_key + '&json_callback=foo'
										});

										num_ajax_calls++;
										$("#debug_timers dt.ajax_calls .num_calls" ).html( num_ajax_calls );

										// Timing.
										total_time = total_time + parseFloat( response.debug_total_time );

										// Format timing:
										var time = total_time * 1000;

										if ( time < 100 )
										{
											// Miliseconds.
											$formatted_time = time.toFixed(2) + ' milisec';
										}
										else
										{
											// Seconds.
											time = time / 1000;
											$formatted_time = time.toFixed(2) + ' sec';
										}

										$("#debug_timers dd.ajax_calls").html( $formatted_time + ' <small>(<a href="' + debug_timers.data('sifoDebugAnalyzerUrl') + '?execution_key=' + debug_timers.data('sifoParentDebugExecutionKey') + '#ajax_debug_' + ( num_ajax_calls - 1 ) + '">Go to last one</a>)</small>' );
									}
								}
								catch( e )
								{
									// Do nothing. Only supported for JSON responses.
								}
							});

							// Expand/collapse debug block info form Analyzer
							$('#debug a.debug_toggle_view,#ajax_debug a.debug_toggle_view').unbind('click').on( 'click', function() {
								dest_el = $(this).attr('rel');
								if ( $('#'+dest_el).is(':visible') )
									$('#'+dest_el).slideUp();
								else
									$('#'+dest_el).slideDown();
								return false;
							});

							// Un/Pin debug execution form Analyzer
							$('#pin_execution, #unpin_execution').on('click', function(e) {
								e.preventDefault();

								var clicked_element = $(this);

								$.ajax({
									dataType: "json",
									url: clicked_element.attr('href')
								} ).done( function(){
									clicked_element.addClass('debug_hidden');
									$('#' + clicked_element.data('counterpart') ).removeClass('debug_hidden');
								});
							});

						
					<?php }?>

					
					}
				});
			}

			LoadjQueryUI();
		</script>
	
<?php }?><?php }} ?>