<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:18:35
         compiled from "C:\dev\sifo\instances\common\templates\debug\analyzer_modules\session.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1444054e8779b1eec20-01344540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5f9677b0ecf5bfc3336050f8c906bd3f1caa34c' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\debug\\analyzer_modules\\session.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1444054e8779b1eec20-01344540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'execution_key' => 0,
    'session_key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e8779b58133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e8779b58133')) {function content_54e8779b58133($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\block.t.php';
if (!is_callable('smarty_modifier_debug_print_var')) include 'C:\dev\sifo\libs\Smarty-3.1.4\plugins\modifier.debug_print_var.php';
?><?php if (is_array($_smarty_tpl->tpl_vars['debug']->value['session'])){?>
	<h2 id="session"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Session<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['session_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['session']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['session_key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->index++;
?>
		<h3 id="sess_<?php echo $_smarty_tpl->tpl_vars['value']->index;?>
"><a class="debug_toggle_view" rel="sess_content_<?php echo $_smarty_tpl->tpl_vars['value']->index;?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['value']->index+1;?>
. <?php echo $_smarty_tpl->tpl_vars['session_key']->value;?>
</a></h3>
		<div id="sess_content_<?php echo $_smarty_tpl->tpl_vars['value']->index;?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" class="debug_contents">
			<pre>
				<?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['value']->value);?>

			</pre>
		</div>
	<?php } ?>
<?php }?><?php }} ?>