<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:18:30
         compiled from "C:\dev\sifo\instances\common\templates\debug\analyzer_modules\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:422054e87796379162-73782628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffd244bbb02b952b14422966c45383559ae61fca' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\debug\\analyzer_modules\\search.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '422054e87796379162-73782628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'execution_key' => 0,
    'value' => 0,
    'query' => 0,
    'filter' => 0,
    'attribute' => 0,
    'match' => 0,
    'id' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e877981cc7e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e877981cc7e')) {function content_54e877981cc7e($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\block.t.php';
if (!is_callable('smarty_modifier_time_format')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\modifier.time_format.php';
if (!is_callable('smarty_modifier_debug_print_var')) include 'C:\dev\sifo\libs\Smarty-3.1.4\plugins\modifier.debug_print_var.php';
?><?php if (is_array($_smarty_tpl->tpl_vars['debug']->value['searches'])){?>
	<h2 id="search_queries"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['searches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['search']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['search']['index']++;
?>
	<h3 class="queries query_read" id="search_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['search']['index'];?>
"><a class="debug_toggle_view" rel="search_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['search']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" href="#"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['search']['index']+1;?>
. [R] <?php echo $_smarty_tpl->tpl_vars['value']->value['tag'];?>
</a> <small>(<?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['value']->value['time']);?>
 - match: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['total_found'])===null||$tmp==='' ? '' : $tmp);?>
 elements - return: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['returned_rows'])===null||$tmp==='' ? '' : $tmp);?>
 elements )</small></h3>
	<div id="search_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['search']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" class="debug_contents">

		<table>
			<tr>
				<th>Host</th>
				<th>Port</th>
				<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['connection_data']['weight'])){?><th>Weight</th><?php }?>
				<th>Connection</th>
			</tr>
			<tr>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['connection_data']['server'])===null||$tmp==='' ? '' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['connection_data']['port'])===null||$tmp==='' ? '' : $tmp);?>
</td>
				<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['connection_data']['weight'])){?><td><?php echo $_smarty_tpl->tpl_vars['value']->value['connection_data']['weight'];?>
</td><?php }?>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['queries'][0]['connection'])===null||$tmp==='' ? '?' : $tmp);?>
.config</td>
			</tr>
		</table>

		<?php  $_smarty_tpl->tpl_vars['query'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['query']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['queries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['search_query']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['query']->key => $_smarty_tpl->tpl_vars['query']->value){
$_smarty_tpl->tpl_vars['query']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['search_query']['index']++;
?>
		<h4 class="<?php if ($_smarty_tpl->tpl_vars['query']->value['error']){?>query_error<?php }?>"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['search_query']['index'];?>
. <?php echo $_smarty_tpl->tpl_vars['query']->value['tag'];?>
 <small>(<?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['query']->value['time']);?>
 - match: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['query']->value['total_found'])===null||$tmp==='' ? '' : $tmp);?>
 elements - return: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['query']->value['returned_rows'])===null||$tmp==='' ? '' : $tmp);?>
 elements )</small></h4>
		<?php if ($_smarty_tpl->tpl_vars['query']->value['error']){?><p class="query_error"><b><?php echo $_smarty_tpl->tpl_vars['query']->value['error'];?>
</b></p><?php }?>
		<table>
			<tr>
				<th>Query</th>
				<th>Filter</th>
				<th>Order</th>
				<th>GroupBy</th>
				<th>Indexs</th>
				<th>Trace</th>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['query']->value['query'];?>
</td>
				<td>
				<?php if (isset($_smarty_tpl->tpl_vars['query']->value['filters'])){?>
					<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['query']->value['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['filter']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['filter']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
$_smarty_tpl->tpl_vars['filter']->_loop = true;
 $_smarty_tpl->tpl_vars['filter']->iteration++;
 $_smarty_tpl->tpl_vars['filter']->last = $_smarty_tpl->tpl_vars['filter']->iteration === $_smarty_tpl->tpl_vars['filter']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['fil']['last'] = $_smarty_tpl->tpl_vars['filter']->last;
?>
					<?php echo $_smarty_tpl->tpl_vars['filter']->value['attribute'];?>
 <?php if ($_smarty_tpl->tpl_vars['filter']->value['exclude']){?>!<?php }?>= (
						<?php if (is_array($_smarty_tpl->tpl_vars['filter']->value['values'])){?>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->iteration++;
 $_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration === $_smarty_tpl->tpl_vars['value']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['val']['last'] = $_smarty_tpl->tpl_vars['value']->last;
?>
								<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['val']['last']){?>, <?php }?>
							<?php } ?>
						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['filter']->value['values'];?>

						<?php }?>
						 )<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['fil']['last']){?> && <?php }?>
					<?php } ?>
				<?php }?>
				</td>
				<td><?php if (isset($_smarty_tpl->tpl_vars['query']->value['sort']['mode'])){?><em><?php echo $_smarty_tpl->tpl_vars['query']->value['sort']['mode'];?>
</em><?php }?> <?php if (isset($_smarty_tpl->tpl_vars['query']->value['sort']['sortby'])){?>- <?php echo $_smarty_tpl->tpl_vars['query']->value['sort']['sortby'];?>
<?php }?></td>
				<td><?php if (isset($_smarty_tpl->tpl_vars['query']->value['group']['attribute'])){?><?php echo $_smarty_tpl->tpl_vars['query']->value['group']['attribute'];?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['query']->value['group']['func'])){?><em>- Func: <?php echo $_smarty_tpl->tpl_vars['query']->value['group']['func'];?>
</em><?php }?> <?php if (isset($_smarty_tpl->tpl_vars['query']->value['group']['groupsort'])){?>- Groupsort: <?php echo $_smarty_tpl->tpl_vars['query']->value['group']['groupsort'];?>
<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['query']->value['indexes'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['query']->value['controller'];?>
</td>
			</tr>
		</table>
		<table>
			<tr>
				<th>WEIGHT</th>
				<th>ID</th>
<?php  $_smarty_tpl->tpl_vars['values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['values']->_loop = false;
 $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['query']->value['resultset']['attrs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['values']->key => $_smarty_tpl->tpl_vars['values']->value){
$_smarty_tpl->tpl_vars['values']->_loop = true;
 $_smarty_tpl->tpl_vars['attribute']->value = $_smarty_tpl->tpl_vars['values']->key;
?>
				<th><?php echo $_smarty_tpl->tpl_vars['attribute']->value;?>
</th>
<?php } ?>
			</tr>
<?php if (isset($_smarty_tpl->tpl_vars['query']->value['resultset']['matches'])){?>
<?php  $_smarty_tpl->tpl_vars['match'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['match']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['query']->value['resultset']['matches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['match']->key => $_smarty_tpl->tpl_vars['match']->value){
$_smarty_tpl->tpl_vars['match']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['match']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['match']->value['weight'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td>
<?php  $_smarty_tpl->tpl_vars['values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['values']->_loop = false;
 $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['match']->value['attrs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['values']->key => $_smarty_tpl->tpl_vars['values']->value){
$_smarty_tpl->tpl_vars['values']->_loop = true;
 $_smarty_tpl->tpl_vars['attribute']->value = $_smarty_tpl->tpl_vars['values']->key;
?>
				<td><?php if (is_array($_smarty_tpl->tpl_vars['values']->value)){?><?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['values']->value);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['values']->value;?>
<?php }?></td>
<?php } ?>
			</tr>
<?php } ?>
<?php }?>
		</table>
		<?php } ?>
	</div>
<?php } ?>
<?php }?><?php }} ?>