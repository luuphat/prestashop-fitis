<?php /*%%SmartyHeaderCode:237865679cef03d24a7-60129702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c985c898cf7582ff143cdd661c1a71750fcf64d' => 
    array (
      0 => 'D:\\webroot\\prestashop\\themes\\default-bootstrap\\modules\\blockspecials\\blockspecials.tpl',
      1 => 1448536198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237865679cef03d24a7-60129702',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5679cef074a129_32183682',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5679cef074a129_32183682')) {function content_5679cef074a129_32183682($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://fitis.vn/prices-drop" title="Specials">
            Specials
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://fitis.vn/summer-dresses/7-printed-chiffon-dress.html">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://fitis.vn/20-small_default/printed-chiffon-dress.jpg" 
                    alt="" 
                    title="Printed Chiffon Dress" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://fitis.vn/summer-dresses/7-printed-chiffon-dress.html" title="Printed Chiffon Dress">
                            Printed Chiffon Dress
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Printed chiffon knee length dress...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    18,04 ₫                            </span>
                                                                                                                                 <span class="price-percent-reduction">-20%</span>
                                                                                         <span class="old-price">
                                                                    22,55 ₫                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://fitis.vn/prices-drop" 
            title="All specials">
                <span>All specials<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
