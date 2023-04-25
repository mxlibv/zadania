<?php
/* Smarty version 4.2.0, created on 2023-04-17 21:34:41
  from 'C:\xamp\htdocs\php_4\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_643d9f51c40012_03173423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03b20d82e487f9d67fbf4cb19e8a9bf8027265ed' => 
    array (
      0 => 'C:\\xamp\\htdocs\\php_4\\templates\\main.html',
      1 => 1681760078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d9f51c40012_03173423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

     <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/layouts/style.css">
	
	
<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style_hide_intro.css">
<?php }?>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/softscroll.js"><?php echo '</script'; ?>
>

</head>
<body>

<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Góra strony</a></li>
            <li><a href="#app_content">Idź do formularza</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
        <p class="splash-subhead">
             <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

        </p>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Idź do formularza</a>
        </p>
    </div>
</div>

<div class="content-wrapper">

    <div id="app_content" class="content">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1162479953643d9f51c3d545_54417303', 'content');
?>


    </div>

    <div class="footer l-box is-center">
		<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1958693971643d9f51c3f013_36623918', 'footer');
?>

		</p>
        <p>Widok oparty na stylach i szablonie <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (autor przykładu: Przemysław Kudłacik)</p>
    </div>

</div>


</body>
</html><?php }
/* {block 'content'} */
class Block_1162479953643d9f51c3d545_54417303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1162479953643d9f51c3d545_54417303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1958693971643d9f51c3f013_36623918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1958693971643d9f51c3f013_36623918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
