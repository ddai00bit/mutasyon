<?php /* Smarty version 3.1.27, created on 2016-04-04 20:50:01
         compiled from "/var/www/html/mcopy/themes/default/invoiceadj/addadj.html" */ ?>
<?php
/*%%SmartyHeaderCode:8717224385702a9493e2e20_87378767%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b2d96aac4a22347277beb72319dfa1d555de1e7' => 
    array (
      0 => '/var/www/html/mcopy/themes/default/invoiceadj/addadj.html',
      1 => 1456420612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8717224385702a9493e2e20_87378767',
  'variables' => 
  array (
    '_invoiceadj_name' => 0,
    'page_name' => 0,
    '_ok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5702a9493ea8c8_95999492',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5702a9493ea8c8_95999492')) {
function content_5702a9493ea8c8_95999492 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8717224385702a9493e2e20_87378767';
?>
<div class="collapse topwind" id="addadj">
      <div class="panel panel-pink" style="background:#fff;">
	      <button type="button" class="close addadjm" data-toggle="collapse" href="#addadj" style="margin-right:10px;margin-top:8px;"><span aria-hidden="true">×</span></button>
	      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_invoiceadj_name']->value;?>
</div>
	      <div class="panel-body pan">
		      <form id="paymentform" action="invoiceadj.php" method="POST" <?php if ($_smarty_tpl->tpl_vars['page_name']->value != 'settings') {?>class="noload"<?php } else { ?>class="reload"<?php }?>>
			      <div class="form-body pal">
					<div class="navbar">
					      <h5><?php echo $_smarty_tpl->tpl_vars['_invoiceadj_name']->value;?>
</h5>
					      <input type="text" name="invoiceadj" class="form-control addinvoiceadj" />
					      <button type ="submit" class="btn btn-info btn-sm margin-top"><i class="glyphicon glyphicon-ok"></i><?php echo $_smarty_tpl->tpl_vars['_ok']->value;?>
</button>
					</div><!--/row-->
			      </div><!--/form-body-->
		      </form>
	      </div><!--/panel-body-->
      </div><!--/panel-->
</div><!--/topwind--><?php }
}
?>