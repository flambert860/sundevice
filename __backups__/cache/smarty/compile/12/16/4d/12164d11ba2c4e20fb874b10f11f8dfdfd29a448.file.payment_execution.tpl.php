<?php /* Smarty version Smarty-3.1.19, created on 2019-02-06 16:25:56
         compiled from "/home/sundevice/public_html/themes/pos_ruby5/modules/bankwirecopie/views/templates/front/payment_execution.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7302274825c5afbdee2cc69-69217418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12164d11ba2c4e20fb874b10f11f8dfdfd29a448' => 
    array (
      0 => '/home/sundevice/public_html/themes/pos_ruby5/modules/bankwirecopie/views/templates/front/payment_execution.tpl',
      1 => 1549466740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7302274825c5afbdee2cc69-69217418',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c5afbdee61149_45988832',
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'nbProducts' => 0,
    'total' => 0,
    'use_taxes' => 0,
    'currencies' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c5afbdee61149_45988832')) {function content_5c5afbdee61149_45988832($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=3"), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Go back to the Checkout','mod'=>'bankwirecopie'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Checkout','mod'=>'bankwirecopie'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo smartyTranslate(array('s'=>'Bank-wire payment','mod'=>'bankwirecopie'),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading">
    <?php echo smartyTranslate(array('s'=>'Order summary','mod'=>'bankwirecopie'),$_smarty_tpl);?>

</h1>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value<=0) {?>
    <p class="alert alert-warning">
        <?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.','mod'=>'bankwirecopie'),$_smarty_tpl);?>

    </p>
<?php } else { ?>
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwirecopie','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
        <div class="box cheque-box">
            <h3 class="page-subheading">
                <?php echo smartyTranslate(array('s'=>'Bank-wire payment','mod'=>'bankwirecopie'),$_smarty_tpl);?>

            </h3>
            <p class="cheque-indent">
                <strong class="dark">
                    <?php echo smartyTranslate(array('s'=>'You have chosen to pay by bank wire.','mod'=>'bankwirecopie'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'Here is a short summary of your order:','mod'=>'bankwirecopie'),$_smarty_tpl);?>

                </strong>
            </p>
            <p>
                - <?php echo smartyTranslate(array('s'=>'The total amount of your order is','mod'=>'bankwirecopie'),$_smarty_tpl);?>

                <span id="amount" class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl);?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1) {?>
                    <?php echo smartyTranslate(array('s'=>'(tax incl.)','mod'=>'bankwirecopie'),$_smarty_tpl);?>

                <?php }?>
            </p>
            <p>
                -
                
                    <?php echo smartyTranslate(array('s'=>'We allow the following currency to be sent via bank wire:','mod'=>'bankwirecopie'),$_smarty_tpl);?>
&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['name'];?>
</b>
                    <input type="hidden" name="currency_payment" value="<?php echo $_smarty_tpl->tpl_vars['currencies']->value[0]['id_currency'];?>
" />
                
            </p>
            <p>
                - <?php echo smartyTranslate(array('s'=>'Bank wire account information will be displayed on the next page.','mod'=>'bankwirecopie'),$_smarty_tpl);?>

                <br />
                - <?php echo smartyTranslate(array('s'=>'Please confirm your order by clicking "I confirm my order".','mod'=>'bankwirecopie'),$_smarty_tpl);?>

            </p>
        </div><!-- .cheque-box -->
        <p class="cart_navigation clearfix" id="cart_navigation">
            <a class="button-exclusive btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=3"), ENT_QUOTES, 'UTF-8', true);?>
">
                <i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Other payment methods','mod'=>'bankwirecopie'),$_smarty_tpl);?>

            </a>
            <button class="button btn btn-default button-medium" type="submit">
                <span><?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'bankwirecopie'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span>
            </button>
        </p>
    </form>
<?php }?>
<?php }} ?>
