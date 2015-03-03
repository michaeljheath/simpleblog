<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:18:35
         compiled from "C:\dev\sifo\instances\common\templates\debug\analyzer_modules\cookies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2572954e8779b67ab41-39196957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '324b45f3f6dab3ab98c3fe5546f9ff2eb4d1d0dd' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\debug\\analyzer_modules\\cookies.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2572954e8779b67ab41-39196957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'execution_key' => 0,
    'cookies_key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e8779ba871f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e8779ba871f')) {function content_54e8779ba871f($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\block.t.php';
if (!is_callable('smarty_modifier_debug_print_var')) include 'C:\dev\sifo\libs\Smarty-3.1.4\plugins\modifier.debug_print_var.php';
?><?php if (is_array($_smarty_tpl->tpl_vars['debug']->value['cookies'])){?>
	<h2 id="cookies"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cookies<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['cookies_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['cookies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['cookies_key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->index++;
?>
		<h3 id="cook_<?php echo $_smarty_tpl->tpl_vars['value']->index;?>
"><a class="debug_toggle_view" rel="cook_content_<?php echo $_smarty_tpl->tpl_vars['value']->index;?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['value']->index+1;?>
. <?php echo $_smarty_tpl->tpl_vars['cookies_key']->value;?>
</a></h3>
		<div id="cook_content_<?php echo $_smarty_tpl->tpl_vars['value']->index;?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" class="debug_contents">
			<pre>
				<?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['value']->value);?>

			</pre>
		</div>
	<?php } ?>
<?php }?><?php }} ?>