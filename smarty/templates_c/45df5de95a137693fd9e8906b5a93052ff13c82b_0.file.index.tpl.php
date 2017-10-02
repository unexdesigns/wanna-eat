<?php
/* Smarty version 3.1.30, created on 2017-10-01 22:23:06
  from "C:\xampp\htdocs\wanna_eat\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d14eaa66c1b6_46225997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45df5de95a137693fd9e8906b5a93052ff13c82b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wanna_eat\\templates\\index.tpl',
      1 => 1506889385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d14eaa66c1b6_46225997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/core/_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/core/_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
