<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:18:24
         compiled from "C:\dev\sifo\instances\common\templates\debug\analyzer_modules\log_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2485154e877902c2619-57774960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8bec8a24dd91c6fe72d167053e2a755b65d63a2' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\debug\\analyzer_modules\\log_messages.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2485154e877902c2619-57774960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'value' => 0,
    'debug_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e87791469e1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e87791469e1')) {function content_54e87791469e1($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\block.t.php';
if (!is_callable('smarty_modifier_debug_print_var')) include 'C:\dev\sifo\libs\Smarty-3.1.4\plugins\modifier.debug_print_var.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['log_messages']['html'])){?>
	<h2 id="benchmarks"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Log Messages<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['log_messages']['html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['html_log']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['html_log']['index']++;
?>
	<h3 id="html_log_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['html_log']['index'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='error'){?>query_error<?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='warn'){?>query_duplicated<?php }?>">
		<a class="debug_toggle_view" rel="html_log_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['html_log']['index'];?>
" href="#">
			<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['html_log']['index']+1;?>
. Message <?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>

		</a>
	</h3>
	<div id="html_log_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['html_log']['index'];?>
" class="debug_contents">
			<pre>
	<?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['value']->value['message']);?>

			</pre>
		</div>

	<?php } ?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['log_messages']['browser_console'])){?>
<script>
	
	// JavaScript debug this is for IE and other browsers w/o console
	if (!window.console) console = {};
	console.log = console.log || function(){};
	console.warn = console.warn || function(){};
	console.error = console.error || function(){};
	console.info = console.info || function(){};
	console.debug = console.debug || function(){};
	

	<?php  $_smarty_tpl->tpl_vars['debug_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['debug_message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['log_messages']['browser_console']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['debug_messages_iteration']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['debug_message']->key => $_smarty_tpl->tpl_vars['debug_message']->value){
$_smarty_tpl->tpl_vars['debug_message']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['debug_messages_iteration']['iteration']++;
?>
		<?php if ($_smarty_tpl->tpl_vars['debug_message']->value['is_object']){?>
	var object_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['debug_messages_iteration']['iteration'];?>
 = <?php echo $_smarty_tpl->tpl_vars['debug_message']->value['message'];?>
;
	var val_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['debug_messages_iteration']['iteration'];?>
 = eval("(" + object_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['debug_messages_iteration']['iteration'];?>
 + ")" );
		<?php }else{ ?>
	var val_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['debug_messages_iteration']['iteration'];?>
 = <?php echo $_smarty_tpl->tpl_vars['debug_message']->value['message'];?>
;
		<?php }?>
	console.<?php echo $_smarty_tpl->tpl_vars['debug_message']->value['type'];?>
( val_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['debug_messages_iteration']['iteration'];?>
 );
	<?php } ?>
</script>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['log_messages']['alert'])){?>
<script>
	<?php  $_smarty_tpl->tpl_vars['debug_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['debug_message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['log_messages']['alert']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['debug_messages_iteration']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['debug_message']->key => $_smarty_tpl->tpl_vars['debug_message']->value){
$_smarty_tpl->tpl_vars['debug_message']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['debug_messages_iteration']['iteration']++;
?>
		alert( <?php echo $_smarty_tpl->tpl_vars['debug_message']->value['message'];?>
 );
	<?php } ?>
</script>
<?php }?><?php }} ?>