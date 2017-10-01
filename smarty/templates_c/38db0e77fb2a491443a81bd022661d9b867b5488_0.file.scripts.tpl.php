<?php
/* Smarty version 3.1.30, created on 2017-10-01 21:45:08
  from "C:\xampp\htdocs\wanna_eat\templates\scripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d145c4ebc565_80032246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38db0e77fb2a491443a81bd022661d9b867b5488' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wanna_eat\\templates\\scripts.tpl',
      1 => 1506887108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d145c4ebc565_80032246 (Smarty_Internal_Template $_smarty_tpl) {
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
