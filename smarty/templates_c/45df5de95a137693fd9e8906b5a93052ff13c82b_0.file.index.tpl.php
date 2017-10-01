<?php
/* Smarty version 3.1.30, created on 2017-10-01 21:44:00
  from "C:\xampp\htdocs\wanna_eat\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d1458093bb77_48487557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45df5de95a137693fd9e8906b5a93052ff13c82b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wanna_eat\\templates\\index.tpl',
      1 => 1506887035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d1458093bb77_48487557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php $_smarty_tpl->_assignInScope('test', array("a"=>"a","b"=>"b"));
?>

<div class="card">
    <?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>
</div>


<?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
