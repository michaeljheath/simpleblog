<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:07:50
         compiled from "C:\dev\sifo\instances\common\templates\error\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1736954e8751669d894-79371405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54e78685f8fced708b4f6b5b696d2c8020c3b6e3' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\error\\404.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1736954e8751669d894-79371405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e875168c8f7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e875168c8f7')) {function content_54e875168c8f7($_smarty_tpl) {?><h1>Error 404 - Not found page</h1>

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
<?php }?><?php }} ?>