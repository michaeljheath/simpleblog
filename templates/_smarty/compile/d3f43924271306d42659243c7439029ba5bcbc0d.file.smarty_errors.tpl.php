<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:18:25
         compiled from "C:\dev\sifo\instances\common\templates\debug\analyzer_modules\smarty_errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2183354e87791b482e3-33834963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3f43924271306d42659243c7439029ba5bcbc0d' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\debug\\analyzer_modules\\smarty_errors.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2183354e87791b482e3-33834963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'affected_file' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e8779210ee2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e8779210ee2')) {function content_54e8779210ee2($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\block.t.php';
?><?php if (is_array($_smarty_tpl->tpl_vars['debug']->value['smarty_errors'])){?>
	<h2 id="smarty_erorrs_title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Smarty Errors<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['affected_file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['smarty_errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['smerrors']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['affected_file']->value = $_smarty_tpl->tpl_vars['error']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['smerrors']['index']++;
?>
	<h3 class="sm_errors query_error" id="smarty_errors_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['smerrors']['index'];?>
">
		<a class="debug_toggle_view" href="#" rel="smarty_errors_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['smerrors']['index'];?>
">
		<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['smerrors']['index']+1;?>
. <?php echo $_smarty_tpl->tpl_vars['affected_file']->value;?>
</a> </h3>
	<div id="smarty_errors_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['smerrors']['index'];?>
" class="debug_contents">
			<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	</div>
<?php } ?>
<?php }?><?php }} ?>