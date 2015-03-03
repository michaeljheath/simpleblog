<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:18:32
         compiled from "C:\dev\sifo\instances\common\templates\debug\analyzer_modules\database.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3200554e877982ce6a6-03654188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b196a834a0471064db5e98ed5806b89d94c88f4' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\debug\\analyzer_modules\\database.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3200554e877982ce6a6-03654188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'query' => 0,
    'execution_key' => 0,
    'field' => 0,
    'value' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e87799ce73a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e87799ce73a')) {function content_54e87799ce73a($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\block.t.php';
if (!is_callable('smarty_modifier_time_format')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\modifier.time_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\dev\sifo\libs\Smarty-3.1.4\plugins\modifier.truncate.php';
?><?php if (is_array($_smarty_tpl->tpl_vars['debug']->value['queries'])){?>
	<h2 id="db_queries"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
DB Queries<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<?php  $_smarty_tpl->tpl_vars['query'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['query']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['queries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['queries']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['query']->key => $_smarty_tpl->tpl_vars['query']->value){
$_smarty_tpl->tpl_vars['query']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['queries']['index']++;
?>
	<h3 class="queries <?php if (false!==$_smarty_tpl->tpl_vars['query']->value['error']){?>query_error<?php }else{ ?>query_<?php echo $_smarty_tpl->tpl_vars['query']->value['type'];?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['query']->value['duplicated']){?>query_duplicated<?php }?><?php if ($_smarty_tpl->tpl_vars['query']->value['time']>=0.5&&$_smarty_tpl->tpl_vars['query']->value['time']<1){?> query_slow<?php }elseif($_smarty_tpl->tpl_vars['query']->value['time']>=1){?> query_very_slow<?php }?>" id="queries_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['queries']['index'];?>
">
		<a class="debug_toggle_view" href="#" rel="queries_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['queries']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
">
		<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['queries']['index']+1;?>
. <?php if ($_smarty_tpl->tpl_vars['query']->value['type']=='read'){?>[R]<?php }else{ ?>[W]<?php }?> <?php echo $_smarty_tpl->tpl_vars['query']->value['tag'];?>
</a> <small>(<?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['query']->value['time']);?>
 - rows:<?php echo $_smarty_tpl->tpl_vars['query']->value['rows_num'];?>
)</small></h3>
	<div id="queries_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['queries']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" class="debug_contents">
		<pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value['sql'], ENT_QUOTES, 'UTF-8', true);?>
</pre>
<?php if (false!==$_smarty_tpl->tpl_vars['query']->value['error']){?>
		<pre style="color:red">
--
<?php echo $_smarty_tpl->tpl_vars['query']->value['error'];?>

		</pre>
<?php }?>
		<table>
			<tr>
				<th>Host</th>
				<th>Destination</th>
				<th>Database</th>
				<th>User</th>
				<th>Controller</th>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['query']->value['host'];?>
</td>
				<td><?php if (isset($_smarty_tpl->tpl_vars['query']->value['destination'])){?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['query']->value['destination'],SMARTY_RESOURCE_CHAR_SET);?>
<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['query']->value['database'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['query']->value['user'];?>
</td>
				<td><?php if (isset($_smarty_tpl->tpl_vars['query']->value['controller'])){?><?php echo $_smarty_tpl->tpl_vars['query']->value['controller'];?>
<?php }?></td>
			</tr>
		</table>
<?php if ($_smarty_tpl->tpl_vars['query']->value['rows_num']>0){?>
			<strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Resultset<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong>:
			<table>
<?php if (is_array($_smarty_tpl->tpl_vars['query']->value['resultset'])&&!isset($_smarty_tpl->tpl_vars['query']->value['resultset'][0])){?>
			<tr>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['query']->value['resultset']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<th><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</th>
<?php } ?>
			</tr>
			<tr>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['query']->value['resultset']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
				<td title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value,50,"..."), ENT_QUOTES, 'UTF-8', true);?>
</td>
<?php } ?>
			</tr>
<?php }else{ ?>
<?php if (is_array($_smarty_tpl->tpl_vars['query']->value['resultset'])){?>
			<tr>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['query']->value['resultset'][0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<th><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</th>
<?php } ?>
			</tr>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['query']->value['resultset']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
			<tr>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
					<td title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value,50,"..."), ENT_QUOTES, 'UTF-8', true);?>
</td>
	<?php } ?>
				</tr>
	<?php } ?>
		<?php }else{ ?>
			<tr><td><pre><?php echo var_dump($_smarty_tpl->tpl_vars['query']->value['resultset']);?>
</pre></td></tr>
		<?php }?>
<?php }?>
			</table>
<?php }else{ ?>
			<strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Empty resultset<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['query']->value['trace'])){?><pre><?php echo $_smarty_tpl->tpl_vars['query']->value['trace'];?>
</pre><?php }?>
	</div>
<?php } ?>
<?php }?><?php }} ?>