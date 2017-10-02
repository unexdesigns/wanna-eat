<?php
/* Smarty version 3.1.30, created on 2017-10-01 22:03:35
  from "C:\xampp\htdocs\wanna_eat\templates\core\_styles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d14a17d05302_23199012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19bf5725e4faaacf6b093dc3ee168f23786d348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wanna_eat\\templates\\core\\_styles.tpl',
      1 => 1506888199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d14a17d05302_23199012 (Smarty_Internal_Template $_smarty_tpl) {
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
