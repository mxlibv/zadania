<?php
/* Smarty version 4.2.0, created on 2023-04-17 20:12:00
  from 'C:\xamp\htdocs\php_4\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_643d8bf0b138d2_95870533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e81421bc9a9dd2f566975ed06cc9fcd4d4ea51f' => 
    array (
      0 => 'C:\\xamp\\htdocs\\php_4\\app\\calc.html',
      1 => 1681755117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d8bf0b138d2_95870533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1515342351643d8bf0ae9d47_29739712', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_962161042643d8bf0aeb812_10704022', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1515342351643d8bf0ae9d47_29739712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1515342351643d8bf0ae9d47_29739712',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_962161042643d8bf0aeb812_10704022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_962161042643d8bf0aeb812_10704022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<<div class="pure-g">
	<div class='l-box-lrg pure-u-med-2-5'>
	<h2 class="content-head"> Kalkulator kredytowy </h2>
	<form action= "<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php"method= "get">
	<label for="id_x"> Kwota: </label>
	<input id="id_x" type = "text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
" />
	<br> 
	<label for="id_y"> Liczba lat: </label>
	<input id="id_y" type = "text" name="y"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
" />
	<br>
	<label for="id_z"> Oprocentowanie (%): </label>
	<input id="id_z" type = "text" name="z"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value['z'];?>
"/>
	<br>
	<button type="submit" class="pure-button">Oblicz</button>
	<br> <br>
	<!--<a href="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>-->
	</div>


<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
