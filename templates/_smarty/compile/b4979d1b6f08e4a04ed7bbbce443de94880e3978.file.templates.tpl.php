<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 00:35:28
         compiled from "C:\dev\sifo\instances\common\templates\manager\templates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2279554e7c4c0da3123-10398534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4979d1b6f08e4a04ed7bbbce443de94880e3978' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\manager\\templates.tpl',
      1 => 1423673067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2279554e7c4c0da3123-10398534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instance_parent' => 0,
    'file_name' => 0,
    'config' => 0,
    'c' => 0,
    'k' => 0,
    'instance' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e7c4c128f20',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e7c4c128f20')) {function content_54e7c4c128f20($_smarty_tpl) {?><<?php ?>?php
<?php if (!empty($_smarty_tpl->tpl_vars['instance_parent']->value)){?>
include ROOT_PATH . '/instances/<?php echo $_smarty_tpl->tpl_vars['instance_parent']->value;?>
/config/<?php echo $_smarty_tpl->tpl_vars['file_name']->value;?>
';
<?php }?>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
<?php if (is_array($_smarty_tpl->tpl_vars['c']->value)){?>
<?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_smarty_tpl->tpl_vars['instance'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['c']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value){
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['instance']->value = $_smarty_tpl->tpl_vars['path']->key;
?>
$config['<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
']['<?php echo $_smarty_tpl->tpl_vars['instance']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
';
<?php } ?>
<?php }else{ ?>
$config['<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
';
<?php }?>
<?php } ?>

<?php }} ?>