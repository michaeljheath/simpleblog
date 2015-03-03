<?php /* Smarty version Smarty 3.1.4, created on 2015-02-22 17:01:57
         compiled from "C:\dev\sifo\instances\simpleblog\templates\shared\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2585154e9fd756e4092-28773668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39b356b8d1724b89889307d5eb634d2449b68dcd' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\simpleblog\\templates\\shared\\header.tpl',
      1 => 1424620332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2585154e9fd756e4092-28773668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e9fd7576cff',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e9fd7576cff')) {function content_54e9fd7576cff($_smarty_tpl) {?><div class="content">
  <div id="header">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['static'];?>
/css/simpleblog.css" />
    <div class="title">
      <h1>Simple blog</h1>
    </div>
  </div>
<?php }} ?>