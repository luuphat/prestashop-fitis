<?php /* Smarty version Smarty-3.1.19, created on 2015-12-23 05:27:25
         compiled from "D:\webroot\prestashop\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176205679ce4d26b202-86536022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c5e8ba5dd950c9a5b613dedbbde19276686cf1d' => 
    array (
      0 => 'D:\\webroot\\prestashop\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1448536200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176205679ce4d26b202-86536022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5679ce4d2c7e63_20781930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5679ce4d2c7e63_20781930')) {function content_5679ce4d2c7e63_20781930($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
