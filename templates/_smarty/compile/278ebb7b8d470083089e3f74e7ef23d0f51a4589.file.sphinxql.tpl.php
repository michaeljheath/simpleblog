<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:18:28
         compiled from "C:\dev\sifo\instances\common\templates\debug\analyzer_modules\sphinxql.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3159954e877947f6d06-93155342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '278ebb7b8d470083089e3f74e7ef23d0f51a4589' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\debug\\analyzer_modules\\sphinxql.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3159954e877947f6d06-93155342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'value' => 0,
    'execution_key' => 0,
    'step' => 0,
    'query' => 0,
    'attribute' => 0,
    'match' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e877962a846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e877962a846')) {function content_54e877962a846($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\block.t.php';
if (!is_callable('smarty_modifier_time_format')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\modifier.time_format.php';
if (!is_callable('smarty_modifier_debug_print_var')) include 'C:\dev\sifo\libs\Smarty-3.1.4\plugins\modifier.debug_print_var.php';
?><?php if (is_array($_smarty_tpl->tpl_vars['debug']->value['sphinxql'])){?>
	<h2 id="sphinxql_queries"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SphinxQl<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['sphinxql']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['search']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['search']['index']++;
?>
	<h3 class="queries query_read<?php if ($_smarty_tpl->tpl_vars['value']->value['error']){?> query_error<?php }?>" id="sphinxql_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['search']['index'];?>
"><a class="debug_toggle_view" rel="sphinxql_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['search']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" href="#"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['search']['index']+1;?>
. [R] <?php echo $_smarty_tpl->tpl_vars['value']->value['tag'];?>
</a> <small>(<?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['value']->value['time']);?>
 - match: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['total_found'])===null||$tmp==='' ? '' : $tmp);?>
 elements - return: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['returned_rows'])===null||$tmp==='' ? '' : $tmp);?>
 elements )</small></h3>
	<div id="sphinxql_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['search']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" class="debug_contents">

		<table>
			<tr>
				<th>Host</th>
				<th>Port</th>
				<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['connection_data']['weight'])){?><th>Weight</th><?php }?>
				<th>Trace <a href="#" class="debug_toggle_view" rel="sphinxql_backtrace_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['search']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
">(show/collapse full trace)</a></th>
			</tr>
			<tr>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['connection_data']['server'])===null||$tmp==='' ? '' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['connection_data']['port'])===null||$tmp==='' ? '' : $tmp);?>
</td>
				<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['connection_data']['weight'])){?><td><?php echo $_smarty_tpl->tpl_vars['value']->value['connection_data']['weight'];?>
</td><?php }?>
				<td>
                    <div id="sphinxql_backtrace_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['search']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" class="debug_contents">
                    <?php  $_smarty_tpl->tpl_vars['step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['backtrace']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['step']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['step']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['step']->key => $_smarty_tpl->tpl_vars['step']->value){
$_smarty_tpl->tpl_vars['step']->_loop = true;
 $_smarty_tpl->tpl_vars['step']->iteration++;
 $_smarty_tpl->tpl_vars['step']->last = $_smarty_tpl->tpl_vars['step']->iteration === $_smarty_tpl->tpl_vars['step']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['backtrace_iterator']['last'] = $_smarty_tpl->tpl_vars['step']->last;
?>
                        <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['backtrace_iterator']['last']){?><?php echo $_smarty_tpl->tpl_vars['step']->value;?>
<br /><?php }?>
                    <?php } ?>
                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['value']->value['backtrace'][count($_smarty_tpl->tpl_vars['value']->value['backtrace'])-1];?>

                </td>
			</tr>
		</table>

		<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['error'])){?>
		<h4 class="query_error"><?php echo $_smarty_tpl->tpl_vars['value']->value['error'];?>
</h4>
		<?php }?>

		<?php  $_smarty_tpl->tpl_vars['query'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['query']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['queries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sphinxql_query']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['query']->key => $_smarty_tpl->tpl_vars['query']->value){
$_smarty_tpl->tpl_vars['query']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sphinxql_query']['index']++;
?>
		<?php if (count($_smarty_tpl->tpl_vars['value']->value['queries'])>1){?>
			<h4 class="<?php if (!empty($_smarty_tpl->tpl_vars['query']->value['error'])){?>query_error<?php }?>"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['sphinxql_query']['index'];?>
. <?php echo $_smarty_tpl->tpl_vars['query']->value['tag'];?>
 <small>(<?php echo (($tmp = @smarty_modifier_time_format($_smarty_tpl->tpl_vars['query']->value['time']))===null||$tmp==='' ? '' : $tmp);?>
 - match: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['query']->value['total_found'])===null||$tmp==='' ? '' : $tmp);?>
 elements - return: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['query']->value['returned_rows'])===null||$tmp==='' ? '' : $tmp);?>
 elements )</small></h4>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['query']->value['error'])){?><p class="query_error"><b><?php echo $_smarty_tpl->tpl_vars['query']->value['error'];?>
</b></p><?php }?>
		<pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8', true);?>
</pre>

	<?php if (!empty($_smarty_tpl->tpl_vars['query']->value['resultset'][0])){?>
		<table>
			<tr>
<?php  $_smarty_tpl->tpl_vars['values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['values']->_loop = false;
 $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['query']->value['resultset'][0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['values']->key => $_smarty_tpl->tpl_vars['values']->value){
$_smarty_tpl->tpl_vars['values']->_loop = true;
 $_smarty_tpl->tpl_vars['attribute']->value = $_smarty_tpl->tpl_vars['values']->key;
?>
				<th><?php echo $_smarty_tpl->tpl_vars['attribute']->value;?>
</th>
<?php } ?>

			</tr>
<?php if (isset($_smarty_tpl->tpl_vars['query']->value['resultset'])){?>
<?php  $_smarty_tpl->tpl_vars['match'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['match']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['query']->value['resultset']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['match']->key => $_smarty_tpl->tpl_vars['match']->value){
$_smarty_tpl->tpl_vars['match']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['match']->key;
?>
			<tr>
<?php  $_smarty_tpl->tpl_vars['values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['values']->_loop = false;
 $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['match']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
	<?php }else{ ?>
		<h5>No results.</h5>
	<?php }?>
		<?php } ?>
	</div>
<?php } ?>
<?php }?><?php }} ?>