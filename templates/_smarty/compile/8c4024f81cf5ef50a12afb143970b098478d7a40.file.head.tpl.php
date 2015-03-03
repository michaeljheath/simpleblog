<?php /* Smarty version Smarty 3.1.4, created on 2015-02-24 12:13:31
         compiled from "C:\dev\sifo\instances\simpleblog\templates\shared\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:572554ea49576689c3-16939916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c4024f81cf5ef50a12afb143970b098478d7a40' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\simpleblog\\templates\\shared\\head.tpl',
      1 => 1424775926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '572554ea49576689c3-16939916',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54ea49578a57e',
  'variables' => 
  array (
    'url' => 0,
    'metadata' => 0,
    'media_module' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ea49578a57e')) {function content_54ea49578a57e($_smarty_tpl) {?><head>
    <meta charset="utf-8">
    <title>Simple Blog</title>
	<meta http-equiv="Content-Language" content="<?php echo $_smarty_tpl->tpl_vars['url']->value['lang'];?>
" />
    <meta name="title" content="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['title'];?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['description'];?>
" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['keywords'];?>
" />
	<?php echo $_smarty_tpl->tpl_vars['media_module']->value;?>

  </head>
<?php }} ?>