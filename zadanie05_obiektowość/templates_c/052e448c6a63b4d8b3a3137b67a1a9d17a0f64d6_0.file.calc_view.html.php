<?php
/* Smarty version 4.2.0, created on 2023-04-19 12:13:08
  from 'C:\xamp\htdocs\php_5\app\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_643fbeb4c058c4_08218150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '052e448c6a63b4d8b3a3137b67a1a9d17a0f64d6' => 
    array (
      0 => 'C:\\xamp\\htdocs\\php_5\\app\\calc_view.html',
      1 => 1681773427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643fbeb4c058c4_08218150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77581540643fbeb490b344_21145429', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1780879848643fbeb490eff0_98672141', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_77581540643fbeb490b344_21145429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_77581540643fbeb490b344_21145429',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Superancka strona z kalkulatorem kredytowym<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1780879848643fbeb490eff0_98672141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1780879848643fbeb490eff0_98672141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<<div class="pure-g">
	<div class='l-box-lrg pure-u-med-2-5'>
	<h2 class="content-head"> Kalkulator kredytowy </h2>
	<form action= "<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php"method= "post">
	<label for="id_x"> Kwota: </label>
	<input id="id_x" type = "text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" />
	<br> 
	<label for="id_y"> Liczba lat: </label>
	<input id="id_y" type = "text" name="y"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" />
	<br>
	<label for="id_z"> Oprocentowanie (%): </label>
	<input id="id_z" type = "text" name="z"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
"/>
	<br>
	<button type="submit" class="pure-button">Oblicz</button>
	<br> <br>
	<!--<a href="<?php echo '<?php'; ?>
 print(_APP_ROOT); <?php echo '?>'; ?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>-->
	</div>


<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
