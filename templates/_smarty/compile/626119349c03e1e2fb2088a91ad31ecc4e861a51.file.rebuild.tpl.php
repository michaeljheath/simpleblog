<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 00:35:29
         compiled from "C:\dev\sifo\instances\common\templates\manager\rebuild.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2967254e7c4c1efcf07-44311973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '626119349c03e1e2fb2088a91ad31ecc4e861a51' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\manager\\rebuild.tpl',
      1 => 1423673067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2967254e7c4c1efcf07-44311973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inheritance' => 0,
    'errors' => 0,
    'error' => 0,
    'instance' => 0,
    'files_output' => 0,
    'instance_name' => 0,
    'files_instance' => 0,
    'file' => 0,
    'filenames' => 0,
    'output' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e7c4c28f1a5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e7c4c28f1a5')) {function content_54e7c4c28f1a5($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Rebuild for <?php echo $_smarty_tpl->tpl_vars['inheritance']->value;?>
</title>
</head>
<style>

body{
    color: #333;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 12px;
}
a { text-decoration: none; color: inherit; padding: 5px;}
h3 { padding: 10px;}
pre {
    -webkit-border-image: none;
    position: relative;
    background-color: whiteSmoke;
    border-color: #ddd;
    border-radius: 4px;
    border-style: solid;
    border-width: 1px;
    color: #333;
    display: block;
    font-family: Monaco, Menlo, Consolas, 'Courier New', monospace;
    font-size: 13px;
    line-height: 20px;
    white-space: pre-wrap;
    word-break: break-all;
    word-wrap: break-word;
    padding: 10px;;
}
#container { padding: 10px; }
#errors { padding: 10px; border: 1px solid #b43d3d; background-color: #FFCFD1; }
#errors p { font-weight: bold; }
.bgcolor1 { background-color: #cdf492; } .bgcolor1, .bordercolor1 { border: 1px solid #a2cb5b; border-left-width: 5px; }
.bgcolor2 { background-color: #d7eff4; } .bgcolor2, .bordercolor2 { border: 1px solid #73a7b4; border-left-width: 5px; }
.bgcolor3 { background-color: #ebd5f4; } .bgcolor3, .bordercolor3 { border: 1px solid #c963f4; border-left-width: 5px; }
.bgcolor4 { background-color: #f4e486; } .bgcolor4, .bordercolor4 { border: 1px solid #f4da43; border-left-width: 5px; }


</style>
<body>
<div id="container">
<h1>Rebuilding configuration files...</h1>
<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)){?>
<div id="errors">
    <p>Unable to write the following files, fix their permissions (copy/paste):</p>
    <ul>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li>chmod -R 777 <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php } ?>
    </ul>
</div>
<?php }?>
<h2>Your instance inheritance is:
<?php  $_smarty_tpl->tpl_vars['instance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['instance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inheritance']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['instance']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['instance']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['instance']->key => $_smarty_tpl->tpl_vars['instance']->value){
$_smarty_tpl->tpl_vars['instance']->_loop = true;
 $_smarty_tpl->tpl_vars['instance']->iteration++;
 $_smarty_tpl->tpl_vars['instance']->last = $_smarty_tpl->tpl_vars['instance']->iteration === $_smarty_tpl->tpl_vars['instance']->total;
?>
<a href="#<?php echo $_smarty_tpl->tpl_vars['instance']->value;?>
" class="bgcolor<?php echo $_smarty_tpl->tpl_vars['instance']->iteration;?>
"><?php echo $_smarty_tpl->tpl_vars['instance']->value;?>
</a>
<?php if (!$_smarty_tpl->tpl_vars['instance']->last){?> > <?php }?>
<?php } ?>
</h2>
<?php  $_smarty_tpl->tpl_vars['files_instance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['files_instance']->_loop = false;
 $_smarty_tpl->tpl_vars['instance_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['files_output']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['files_instance']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['files_instance']->key => $_smarty_tpl->tpl_vars['files_instance']->value){
$_smarty_tpl->tpl_vars['files_instance']->_loop = true;
 $_smarty_tpl->tpl_vars['instance_name']->value = $_smarty_tpl->tpl_vars['files_instance']->key;
 $_smarty_tpl->tpl_vars['files_instance']->iteration++;
?>
<h3 id="<?php echo $_smarty_tpl->tpl_vars['instance_name']->value;?>
" class="bgcolor<?php echo $_smarty_tpl->tpl_vars['files_instance']->iteration;?>
">Instance <em><?php echo ucfirst($_smarty_tpl->tpl_vars['instance_name']->value);?>
</em></h3>
    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['files_instance']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['file']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
    <h4><?php echo $_smarty_tpl->tpl_vars['filenames']->value[$_smarty_tpl->tpl_vars['file']->value];?>
</h4>
    <pre class="bordercolor<?php echo $_smarty_tpl->tpl_vars['files_instance']->iteration;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['output']->value, ENT_QUOTES, 'UTF-8', true);?>
</pre>
    <?php } ?>
<?php } ?>
</div>
</body>
</html>



<?php }} ?>