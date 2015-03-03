<?php /* Smarty version Smarty 3.1.4, created on 2015-02-21 13:18:26
         compiled from "C:\dev\sifo\instances\common\templates\debug\analyzer_modules\basic_debug.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1595054e877922f6e92-98860202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3afeb17670bb28fd1bcd2c747cc62157443f0e31' => 
    array (
      0 => 'C:\\dev\\sifo\\instances\\common\\templates\\debug\\analyzer_modules\\basic_debug.tpl',
      1 => 1423673066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1595054e877922f6e92-98860202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'execution_key' => 0,
    'debug' => 0,
    'bench' => 0,
    'label' => 0,
    'controller_name' => 0,
    'controller' => 0,
    'key' => 0,
    'content' => 0,
    'content1' => 0,
    'key1' => 0,
    'k' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54e877944bd16',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e877944bd16')) {function content_54e877944bd16($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\block.t.php';
if (!is_callable('smarty_modifier_number_format')) include 'C:\dev\sifo/libs/Smarty-sifo-plugins\modifier.number_format.php';
if (!is_callable('smarty_modifier_debug_print_var')) include 'C:\dev\sifo\libs\Smarty-3.1.4\plugins\modifier.debug_print_var.php';
?><h2 id="benchmarks"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Benchmarks<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<h3 id="bench"><a class="debug_toggle_view" rel="benchmarks_content<?php echo (($tmp = @$_smarty_tpl->tpl_vars['execution_key']->value)===null||$tmp==='' ? '' : $tmp);?>
" href="#">Times of execution</a></h3>
<div id="benchmarks_content<?php echo (($tmp = @$_smarty_tpl->tpl_vars['execution_key']->value)===null||$tmp==='' ? '' : $tmp);?>
" class="debug_contents">
	<table class="benchmark_contents">
		<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['benchmarks'])){?>
			<?php  $_smarty_tpl->tpl_vars['bench'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bench']->_loop = false;
 $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['benchmarks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bench']->key => $_smarty_tpl->tpl_vars['bench']->value){
$_smarty_tpl->tpl_vars['bench']->_loop = true;
 $_smarty_tpl->tpl_vars['label']->value = $_smarty_tpl->tpl_vars['bench']->key;
?>
				<tr <?php if ($_smarty_tpl->tpl_vars['bench']->value>0.1){?> class="slow"<?php }?>><td><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</td><td><?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['bench']->value,4);?>
 secs.</td></tr>
			<?php } ?>
		<?php }?>
	</table>
	<div class="benchmarks_legend">
		<p>Order of execution:
		<ul>
		<li><strong>Parent dispatch:</strong>
				<ul>
					<li>Parent preDispatch</li>
					<li>executeNestedModules [<strong>foreach module</strong>]
						<ul>
							<li>preDispatch</li>
							<li>execute</li>
							<li>postDispatch</li>
						</ul>
					</li>
					<li>Parent execute
						<ul>
							<li>preDispatch</li>
							<li>execute</li>
							<li>postDispatch</li>
						</ul>
					</li>
					<li>Grab HTML</li>
					<li>Realtimereplacement [<strong>foreach RTR found</strong>]
						<ul>
							<li>preDispatch</li>
							<li>execute</li>
							<li>postDispatch</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>

</div>
	<h2 id="controllers"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Controllers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<?php  $_smarty_tpl->tpl_vars['controller'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['controller']->_loop = false;
 $_smarty_tpl->tpl_vars['controller_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['controllers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['controller']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['controller']->key => $_smarty_tpl->tpl_vars['controller']->value){
$_smarty_tpl->tpl_vars['controller']->_loop = true;
 $_smarty_tpl->tpl_vars['controller_name']->value = $_smarty_tpl->tpl_vars['controller']->key;
 $_smarty_tpl->tpl_vars['controller']->index++;
?>
	<h3 id="cont_<?php echo $_smarty_tpl->tpl_vars['controller']->index;?>
"><a class="debug_toggle_view" rel="cont_content_<?php echo $_smarty_tpl->tpl_vars['controller']->index;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['execution_key']->value)===null||$tmp==='' ? '' : $tmp);?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['controller']->index+1;?>
. <?php echo $_smarty_tpl->tpl_vars['controller_name']->value;?>
</a></h3>
	<div id="cont_content_<?php echo $_smarty_tpl->tpl_vars['controller']->index;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['execution_key']->value)===null||$tmp==='' ? '' : $tmp);?>
" class="debug_contents">
	<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['controller']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['content']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['content']->key;
 $_smarty_tpl->tpl_vars['content']->index++;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value=="CONTROLLER"){?>
	<h4><a class="debug_toggle_view" rel="params_cont_content_<?php echo $_smarty_tpl->tpl_vars['controller']->index;?>
_<?php echo $_smarty_tpl->tpl_vars['content']->index;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['execution_key']->value)===null||$tmp==='' ? '' : $tmp);?>
" href="#">Controller parameters</a></h4>
	<div id="params_cont_content_<?php echo $_smarty_tpl->tpl_vars['controller']->index;?>
_<?php echo $_smarty_tpl->tpl_vars['content']->index;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['execution_key']->value)===null||$tmp==='' ? '' : $tmp);?>
" class="debug_contents">
	<ul>
		<?php  $_smarty_tpl->tpl_vars['content1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content1']->_loop = false;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['content']->value['parameters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content1']->key => $_smarty_tpl->tpl_vars['content1']->value){
$_smarty_tpl->tpl_vars['content1']->_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['content1']->key;
?>
			<?php if (is_array($_smarty_tpl->tpl_vars['content1']->value)){?>
			<li class="array"><strong><?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
: Array</strong>
				<?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['content1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['arr']->key;
?>
				<ul>
					<li><strong><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</strong>: <?php if (is_array($_smarty_tpl->tpl_vars['arr']->value)){?><pre><?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['arr']->value);?>
</pre><?php }else{ ?><code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arr']->value, ENT_QUOTES, 'UTF-8', true);?>
</code><?php }?></li>
				</ul>
				<?php } ?>
			</li>
			<?php }else{ ?>
			<li><strong><?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
</strong>: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content1']->value, ENT_QUOTES, 'UTF-8', true);?>
"</li>
			<?php }?>
		<?php } ?>
	</ul>
	</div>
		<?php }else{ ?>
	<h4><a class="debug_toggle_view" rel="assigns_cont_content_<?php echo $_smarty_tpl->tpl_vars['controller']->index;?>
_<?php echo $_smarty_tpl->tpl_vars['content']->index;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['execution_key']->value)===null||$tmp==='' ? '' : $tmp);?>
" href="#">
			<?php if ($_smarty_tpl->tpl_vars['key']->value=="assigns"){?>Template assigns<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php }?>
		</a></h4>
	<div  id="assigns_cont_content_<?php echo $_smarty_tpl->tpl_vars['controller']->index;?>
_<?php echo $_smarty_tpl->tpl_vars['content']->index;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['execution_key']->value)===null||$tmp==='' ? '' : $tmp);?>
" class="debug_contents">
	<ul>
		<?php  $_smarty_tpl->tpl_vars['content1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content1']->_loop = false;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content1']->key => $_smarty_tpl->tpl_vars['content1']->value){
$_smarty_tpl->tpl_vars['content1']->_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['content1']->key;
?>
			<?php if (is_array($_smarty_tpl->tpl_vars['content1']->value)){?>
			<li class="array"><strong><?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
: Array</strong>
				<?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['content1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['arr']->key;
?>
				<ul>
					<li><strong><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</strong>: <?php if (is_array($_smarty_tpl->tpl_vars['arr']->value)){?><pre><?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['arr']->value);?>
</pre><?php }else{ ?><code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arr']->value, ENT_QUOTES, 'UTF-8', true);?>
</code><?php }?></li>
				</ul>
				<?php } ?>
			</li>
			<?php }else{ ?>
			<li><strong><?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
</strong>: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content1']->value, ENT_QUOTES, 'UTF-8', true);?>
"</li>
			<?php }?>
		<?php } ?>
	</ul>
	</div>
		<?php }?>
	<?php } ?>
	</div>
<?php } ?><?php }} ?>