<?php /* Smarty version Smarty 3.1.4, created on 2015-02-22 22:25:42
         compiled from "C:\dev\sifo\instances\common\templates\shared\media_packer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2258054ea4956dbd346-14285632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9afa31f0d1ebdbb96aeee0136be1f7c13276dcf' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\shared\\media_packer.tpl',
      1 => 1423673067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2258054ea4956dbd346-14285632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_groups' => 0,
    'css_group' => 0,
    'media' => 0,
    'url' => 0,
    'static_rev' => 0,
    'js_groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54ea4957583ac',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ea4957583ac')) {function content_54ea4957583ac($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['css_groups']->value)){?>
<?php  $_smarty_tpl->tpl_vars['css_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css_group']->key => $_smarty_tpl->tpl_vars['css_group']->value){
$_smarty_tpl->tpl_vars['css_group']->_loop = true;
?>
		<link rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value[$_smarty_tpl->tpl_vars['css_group']->value]['media'];?>
" class="cssfx" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['static'];?>
/css/generated/<?php echo $_smarty_tpl->tpl_vars['css_group']->value;?>
.css?rev=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['static_rev']->value)===null||$tmp==='' ? 'unset' : $tmp);?>
" />
<?php } ?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['js_groups']->value)){?>
<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value['static'];?>
/js/generated/<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
.js?rev=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['static_rev']->value)===null||$tmp==='' ? 'unset' : $tmp);?>
"></script>
<?php } ?>
<?php }?><?php }} ?>