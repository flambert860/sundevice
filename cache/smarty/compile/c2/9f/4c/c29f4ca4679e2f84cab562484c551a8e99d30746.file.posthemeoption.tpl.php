<?php /* Smarty version Smarty-3.1.19, created on 2019-04-29 16:36:45
         compiled from "/home/sundevice/public_html/modules/posthemeoption/posthemeoption.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15932631575cc70bfd6d4294-74015343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c29f4ca4679e2f84cab562484c551a8e99d30746' => 
    array (
      0 => '/home/sundevice/public_html/modules/posthemeoption/posthemeoption.tpl',
      1 => 1534502030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15932631575cc70bfd6d4294-74015343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titlefont' => 0,
    'linkfont' => 0,
    'fontnametitle' => 0,
    'fontnamelink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cc70bfd6e3746_25111936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc70bfd6e3746_25111936')) {function content_5cc70bfd6e3746_25111936($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['titlefont']->value)&&$_smarty_tpl->tpl_vars['titlefont']->value) {?> <?php echo html_entity_decode($_smarty_tpl->tpl_vars['titlefont']->value);?>
 <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['linkfont']->value)&&$_smarty_tpl->tpl_vars['linkfont']->value) {?> <?php echo html_entity_decode($_smarty_tpl->tpl_vars['linkfont']->value);?>
 <?php }?>
<style type="text/css">
	
		<?php if (isset($_smarty_tpl->tpl_vars['titlefont']->value)&&$_smarty_tpl->tpl_vars['titlefont']->value) {?>
			body,
			h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnametitle']->value;?>
;
			} 
			.fontcustom1{
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnametitle']->value;?>
 !important;
			}
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['linkfont']->value)&&$_smarty_tpl->tpl_vars['linkfont']->value) {?>
			body {
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnamelink']->value;?>
;
			}
			.fontcustom2{
			font-family:<?php echo $_smarty_tpl->tpl_vars['fontnamelink']->value;?>
 !important;
			}
		<?php }?>
	
	
</style><?php }} ?>
