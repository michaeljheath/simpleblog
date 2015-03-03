<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:07:46
         compiled from "C:\dev\sifo\instances\common\templates\error\common.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2691554e87512253c87-92460581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ae354db1694082ce492361863f76738247d7217' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\error\\common.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2691554e87512253c87-92460581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_code_msg' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e875126287c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e875126287c')) {function content_54e875126287c($_smarty_tpl) {?><h1>Error <?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['error_code_msg']->value;?>
</h1>

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
<hr />
Message:
<pre>
<?php echo $_smarty_tpl->tpl_vars['error']->value['msg'];?>

</pre>
Trace:
Messages:
<pre>
<?php echo $_smarty_tpl->tpl_vars['error']->value['trace'];?>

</pre>
<?php }?><?php }} ?>