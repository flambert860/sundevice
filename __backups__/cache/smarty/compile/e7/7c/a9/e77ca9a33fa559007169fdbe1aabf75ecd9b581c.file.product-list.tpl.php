<?php /* Smarty version Smarty-3.1.19, created on 2019-01-29 11:50:03
         compiled from "/home/sundevice/public_html/themes/pos_ruby5/product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13375916245c502a71ca2b77-13916651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e77ca9a33fa559007169fdbe1aabf75ecd9b581c' => 
    array (
      0 => '/home/sundevice/public_html/themes/pos_ruby5/product-list.tpl',
      1 => 1548758983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13375916245c502a71ca2b77-13916651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c502a71d0b1b4_57074769',
  'variables' => 
  array (
    'products' => 0,
    'id' => 0,
    'show_as_grid' => 0,
    'class' => 0,
    'has_big_item' => 0,
    'show_in_menu' => 0,
    'product' => 0,
    'link' => 0,
    'show_on_home' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'logged' => 0,
    'priceDisplay' => 0,
    'value' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'comparator_max_item' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c502a71d0b1b4_57074769')) {function content_5c502a71d0b1b4_57074769($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<!-- Products list -->
	<ul<?php if (isset($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?> class="product_list <?php if (isset($_smarty_tpl->tpl_vars['show_as_grid']->value)&&$_smarty_tpl->tpl_vars['show_as_grid']->value) {?>row grid<?php } else { ?>list<?php }?> product_content <?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['has_big_item']->value)&&$_smarty_tpl->tpl_vars['has_big_item']->value) {?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?>
				<div class="col-xs-12 col-sm-6 col-lg-6">
					<li class="ajax_block_product big_item">
			<?php } else { ?>
				<li class="ajax_block_product">
			<?php }?>
		<?php } elseif (isset($_smarty_tpl->tpl_vars['show_in_menu']->value)&&$_smarty_tpl->tpl_vars['show_in_menu']->value) {?>
			<li class="ajax_block_product col-xs-12">
		<?php } else { ?>
			<?php if (isset($_smarty_tpl->tpl_vars['show_as_grid']->value)&&$_smarty_tpl->tpl_vars['show_as_grid']->value) {?>
				<li class="ajax_block_product col-xs-12 col-sm-6 col-lg-4">
			<?php } else { ?>
				<li class="ajax_block_product ">
			<?php }?>
		<?php }?>
			<div class="product-container item" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<a class="img_content" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
"
						alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"
						class="img-responsive"/>
					</a>
					
					<?php if (!isset($_smarty_tpl->tpl_vars['show_on_home']->value)||!$_smarty_tpl->tpl_vars['show_on_home']->value) {?>
						<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']>0&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
									<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
										<div class="item_reduction">
											<span>-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100;?>
%</span>
										</div>
									<?php }?>
								<?php }?>
							<?php }?>
						<?php }?>
					<?php }?>
					<div class="btn_container">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

						
					</div>
					<div class="hook-reviews">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

					</div>
				</div>
				<div class="right-block">
					<h5>
						<a class="product-name fontcustom1" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
							<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

						</a>
					</h5>
					
					
					<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
					<div class="price-box clearfix">
						<meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
" />
						<span class="price fontcustom1"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
							<span class="old-price product-price">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

							</span>
						<?php }?>
					</div>
					<?php }?>
					<?php if (!isset($_smarty_tpl->tpl_vars['show_on_home']->value)||!$_smarty_tpl->tpl_vars['show_on_home']->value) {?>
						<p class="product-desc">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...');?>

						</p>
						<?php if (!isset($_smarty_tpl->tpl_vars['show_in_menu']->value)||!$_smarty_tpl->tpl_vars['show_in_menu']->value) {?>
						<div class="custom-add-to-cart clearfix">
							<input type="text" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']);?>
" data-min="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']);?>
" data-max="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
" maxlength="12" id="qty_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" name="qty" class="input-text qty">
							<div class="qty-control">
								<button type="button" class="button btn-plus" onclick="increaseQtyFeature('qty_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
');">
									<span>
										<span>+</span>
									</span>
								</button>
								<button type="button" class="button btn-minus" onclick="decreaseQtyFeature('qty_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
');">
									<span>
										<span>-</span>
									</span>
								</button>
							</div>
						</div>
						<?php }?>
					<?php } else { ?>
					<div class="attributes-values">
						<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['attributes_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
							<span class="value-item"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
						<?php } ?>
					</div>
					<?php }?>
					<?php if (!isset($_smarty_tpl->tpl_vars['show_on_home']->value)||!$_smarty_tpl->tpl_vars['show_on_home']->value) {?>
					<div class="transfer">
						<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']>=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							
							<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
								<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
									<a class="exclusive ajax_add_to_cart_button btn btn-default fontcustom1" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp1."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" data-targeted-input="qty_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" data-minimal_quantity="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']);?>
">
										<?php echo smartyTranslate(array('s'=>'+ Add to cart'),$_smarty_tpl);?>

									</a>
								<?php } else { ?>
									<a class="exclusive ajax_add_to_cart_button btn btn-default fontcustom1" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,'add=1&amp;id_product={$product.id_product|intval}',false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
"data-targeted-input="qty_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" data-minimal_quantity="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']);?>
">
										<?php echo smartyTranslate(array('s'=>'+ Add to cart'),$_smarty_tpl);?>

									</a>
								<?php }?>
							<?php } else { ?>
								<span class="exclusive ajax_add_to_cart_button btn btn-default fontcustom1 disabled">
									<?php echo smartyTranslate(array('s'=>'+ Add to cart'),$_smarty_tpl);?>

								</span>
							<?php }?>
						<?php }?>
					</div>
					<?php }?>
				</div>
			</div><!-- .product-container> -->
		</li>
			
		<?php if (isset($_smarty_tpl->tpl_vars['has_big_item']->value)&&$_smarty_tpl->tpl_vars['has_big_item']->value) {?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-6">
			<?php }?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']) {?>
				</div>
			<?php }?>
		<?php }?>
	<?php } ?>
	</ul>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'min_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'max_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl);?>
<?php }} ?>
