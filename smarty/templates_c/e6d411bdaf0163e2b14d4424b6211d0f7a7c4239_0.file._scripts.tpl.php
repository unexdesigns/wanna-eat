<?php
/* Smarty version 3.1.30, created on 2017-10-01 21:54:06
  from "C:\xampp\htdocs\wanna_eat\templates\_scripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d147de877e03_79167224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d411bdaf0163e2b14d4424b6211d0f7a7c4239' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wanna_eat\\templates\\_scripts.tpl',
      1 => 1506887630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d147de877e03_79167224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('scripts', array("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"));
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scripts']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
"><?php echo '</script'; ?>
>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
