<?php
/* Smarty version 3.1.30, created on 2017-10-01 21:44:00
  from "C:\xampp\htdocs\wanna_eat\templates\styles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d14580998418_03394262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66ae857cea9e0ddcc6615ca2b0dda6dfcb3f2b83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wanna_eat\\templates\\styles.tpl',
      1 => 1506886908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d14580998418_03394262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('styles', array("https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese","https://fonts.googleapis.com/icon?family=Material+Icons","/css/style.css"));
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styles']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
