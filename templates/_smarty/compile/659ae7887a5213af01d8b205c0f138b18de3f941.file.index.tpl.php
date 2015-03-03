<?php /* Smarty version Smarty 3.1.4, created on 2015-02-27 11:20:32
         compiled from "C:\dev\sifo\instances\simpleblog\templates\home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1484954e7c4cadb87c8-32892885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '659ae7887a5213af01d8b205c0f138b18de3f941' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\simpleblog\\templates\\home\\index.tpl',
      1 => 1425032357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1484954e7c4cadb87c8-32892885',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e7c4cb1a38b',
  'variables' => 
  array (
    'modules' => 0,
    'url' => 0,
    'blog_entries' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e7c4cb1a38b')) {function content_54e7c4cb1a38b($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <?php echo $_smarty_tpl->tpl_vars['modules']->value['head'];?>

  <body>
    <div class="content">
      <div id="header">
        <div class="title">
        <h1><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['base'];?>
/">SIMPLE BLOG</a></h1>
        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['base'];?>
/admin-blog-entry">ADMIN</a></h2>
        <h3>Latest Blog Entries</h3>
        </div>
      </div>
      <div id="main">
        <div class="center">
        <?php if ($_smarty_tpl->tpl_vars['blog_entries']->value){?>
          <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog_entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
      
            <h3><?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
</h3>
            <?php echo $_smarty_tpl->tpl_vars['entry']->value['content'];?>

            <p class="date">Posted by Jack <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['static'];?>
/css/images/more.gif" alt="" /> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['base'];?>
/blog-entry/id:<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
;title:<?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
;content:<?php echo $_smarty_tpl->tpl_vars['entry']->value['content'];?>
">Read more</a> </p>
            <br />
            
      
          <?php } ?>
        <?php }?>
        </div>
      </div>
      <div id="footer">
        <div class="padding"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['base'];?>
/">HOME</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['base'];?>
/admin-blog-entry">ADMIN</a></div>
      </div>
    </div>
  </body>
</html><?php }} ?>