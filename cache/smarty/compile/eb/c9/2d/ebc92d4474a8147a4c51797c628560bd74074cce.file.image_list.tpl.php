<?php /* Smarty version Smarty-3.1.19, created on 2019-04-29 16:48:35
         compiled from "/home/sundevice/public_html/modules/imagebycolorattrib/views/templates/admin/image_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16290363585cc70ec370b0a7-57010359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebc92d4474a8147a4c51797c628560bd74074cce' => 
    array (
      0 => '/home/sundevice/public_html/modules/imagebycolorattrib/views/templates/admin/image_list.tpl',
      1 => 1518187446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16290363585cc70ec370b0a7-57010359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'image' => 0,
    'imageType' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cc70ec37125c8_76136713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc70ec37125c8_76136713')) {function content_5cc70ec37125c8_76136713($_smarty_tpl) {?>

<ul class="list-inline">
	<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
	<li>
		<img class="img-thumbnail" src="<?php echo @constant('_THEME_PROD_DIR_');?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['obj']->getExistingImgPath();?>
-<?php echo $_smarty_tpl->tpl_vars['imageType']->value;?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" />
	</li>
	<?php } ?>
</ul>

<?php }} ?>
