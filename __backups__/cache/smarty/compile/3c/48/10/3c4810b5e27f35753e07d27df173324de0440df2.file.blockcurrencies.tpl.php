<?php /* Smarty version Smarty-3.1.19, created on 2019-02-13 23:00:40
         compiled from "D:\wamp\www\projects\ps\sun-device.local\themes\sundevice\modules\blockcurrencies\blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279515c649388db1708-17973251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c4810b5e27f35753e07d27df173324de0440df2' => 
    array (
      0 => 'D:\\wamp\\www\\projects\\ps\\sun-device.local\\themes\\sundevice\\modules\\blockcurrencies\\blockcurrencies.tpl',
      1 => 1550094321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279515c649388db1708-17973251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'request_uri' => 0,
    'f_currency' => 0,
    'cookie' => 0,
    'currency_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c649388ee6770_03213186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c649388ee6770_03213186')) {function content_5c649388ee6770_03213186($_smarty_tpl) {?><!-- Block currencies module -->
<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
	<div id="currencies-block-top" class="loca_content">
		<span class="title_top fontcustom1"><?php echo smartyTranslate(array('s'=>'Currencies','mod'=>'blockcurrencies'),$_smarty_tpl);?>
</span>
		<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
			<ul id="first-currencies" class="currencies_ul">
				<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
					<?php if (strpos($_smarty_tpl->tpl_vars['f_currency']->value['name'],('(').($_smarty_tpl->tpl_vars['f_currency']->value['iso_code']).(')'))===false) {?>
						<?php ob_start();?><?php echo smartyTranslate(array('s'=>'%s (%s)','sprintf'=>array($_smarty_tpl->tpl_vars['f_currency']->value['name'],$_smarty_tpl->tpl_vars['f_currency']->value['iso_code'])),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["currency_name"] = new Smarty_variable($_tmp1, null, 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars["currency_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['f_currency']->value['name'], null, 0);?>
					<?php }?>
					<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }?>>
						<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>
">
							<span class="fontcustom1"><?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>
</span>
						</a>
					</li>
				<?php } ?>
			</ul>
		</form>
	</div>
<?php }?>
<!-- /Block currencies module -->
<?php }} ?>
