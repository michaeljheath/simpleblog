<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 14:55:23
         compiled from "C:\dev\sifo\instances\common\templates\error\500.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1724254e88e4b5174d9-38175054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bb365e081d671c5a990327f816470e88325f293' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\error\\500.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1724254e88e4b5174d9-38175054',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'modules' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e88e4ba07f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e88e4ba07f5')) {function content_54e88e4ba07f5($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\block.t.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['url']->value['lang'];?>
">
<?php if (isset($_smarty_tpl->tpl_vars['modules']->value['head'])){?><?php echo $_smarty_tpl->tpl_vars['modules']->value['head'];?>
<?php }?>

<style>
#error500{
	text-align:center;
}
</style>

<body>
<div id="error500">
	<p style="width:600px;margin:auto;" class="msg_ko"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Internal Server Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
<hr />
Message:
<pre>
<?php echo $_smarty_tpl->tpl_vars['error']->value['msg'];?>

</pre>
Trace:
Message:
<pre>
<?php echo $_smarty_tpl->tpl_vars['error']->value['trace'];?>

</pre>
<?php }?>
</div>
</body>
</html><?php }} ?>