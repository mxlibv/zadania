<?php
/* Smarty version 3.1.30, created on 2023-05-08 18:12:45
  from "C:\xamp\htdocs\php_7\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64591f7d4ddff3_89158231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc96bcda9c928237f25bd5d31f0a4abaf983226e' => 
    array (
      0 => 'C:\\xamp\\htdocs\\php_7\\app\\views\\CalcView.tpl',
      1 => 1683562362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_64591f7d4ddff3_89158231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158649506364591f7d4c6a72_05838553', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136904509964591f7d4dcfe5_79362323', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_158649506364591f7d4c6a72_05838553 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_136904509964591f7d4dcfe5_79362323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link pure-button">wyloguj</a>
	
</div>

<div class='content'>
	<h2> Kalkulator kredytowy </h2>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method= "post" width="500px">
	<label for="id_x"> Kwota: </label> 
	<input id="id_x" type = "text" name="money" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->money;?>
" />
	<br> 
	<label for="id_y"> Liczba lat: </label>
	<input id="id_y" type = "text" name="year"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->year;?>
" />
	<br>
	<label for="id_z"> Oprocentowanie (%): </label>
	<input id="id_z" type = "text" name="per"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->per;?>
"/>
	<br>
	<button type="submit" class="pure-button">Oblicz</button>
	<br> <br>
	
	</div>
<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
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
