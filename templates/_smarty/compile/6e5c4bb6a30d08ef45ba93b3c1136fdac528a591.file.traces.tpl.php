<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:18:23
         compiled from "C:\dev\sifo\instances\common\templates\debug\analyzer_modules\traces.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2560254e8778fc98020-56728949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e5c4bb6a30d08ef45ba93b3c1136fdac528a591' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\debug\\analyzer_modules\\traces.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2560254e8778fc98020-56728949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'trace' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e877901bee9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e877901bee9')) {function content_54e877901bee9($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\block.t.php';
if (!is_callable('smarty_modifier_debug_print_var')) include 'C:\dev\sifo\libs\Smarty-3.1.4\plugins\modifier.debug_print_var.php';
?><?php if (isset($_smarty_tpl->tpl_vars['debug']->value['traces'])&&is_array($_smarty_tpl->tpl_vars['debug']->value['traces'])){?>
	<h3 id="sess_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['session']['index'];?>
"><a class="debug_toggle_view" rel="traces_content" href="#"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show traces<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><h3 id="sess_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['session']['index'];?>
">
	<div id="traces_content" class="debug_contents">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['trace'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trace']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['traces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trace']->key => $_smarty_tpl->tpl_vars['trace']->value){
$_smarty_tpl->tpl_vars['trace']->_loop = true;
?>
				<li>
					<?php if (is_array($_smarty_tpl->tpl_vars['trace']->value)){?>
						<?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['trace']->value);?>

					<?php }else{ ?>
						"<?php echo $_smarty_tpl->tpl_vars['trace']->value;?>
"
					<?php }?>
				</li>
			<?php } ?>
		</ul>
	</div>
<?php }?><?php }} ?>