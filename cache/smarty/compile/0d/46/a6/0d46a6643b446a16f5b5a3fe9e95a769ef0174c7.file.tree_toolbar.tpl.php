<?php /* Smarty version Smarty-3.1.19, created on 2019-05-03 15:11:00
         compiled from "/home/sundevice/public_html/modules/posstaticfooter/views/templates/admin/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11482025705ccc3de45ef410-26621360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d46a6643b446a16f5b5a3fe9e95a769ef0174c7' => 
    array (
      0 => '/home/sundevice/public_html/modules/posstaticfooter/views/templates/admin/helpers/tree/tree_toolbar.tpl',
      1 => 1534502030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11482025705ccc3de45ef410-26621360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ccc3de45ff835_87952438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccc3de45ff835_87952438')) {function content_5ccc3de45ff835_87952438($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
