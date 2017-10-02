<?php
/* Smarty version 3.1.30, created on 2017-10-01 23:06:26
  from "C:\xampp\htdocs\wanna_eat\templates\_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d158d2b9bbd8_28229923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4df135c97e01032316c37d13e617d40a7d1d08fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wanna_eat\\templates\\_login.tpl',
      1 => 1506891985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d158d2b9bbd8_28229923 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="login">
    <div class="container">
        <div class="card">
            <div class="card-block p-5">
                <div class="row align-items-center">
                    <div class="col col-md p-4" style="border-right: 1px solid rgba(0,0,0,.12)">
                        <div class="row m-0 align-items-center mb-4">
                            <i style="font-size: 48px; color: rgba(0, 0, 0, .38)" class="material-icons mr-3">edit</i>
                            <h4 class="text-muted m-0">
                            Registracija
                            </h4>
                        </div> 
                        <form action=""> 
                            <div class="form-group row mx-0">
                                <input class="form-control col mr-3" placeholder="Vardas">
                                <input class="form-control col ml-3" placeholder="Pavardė"> 
                            </div>
                            <div class="form-group"><input type="email" class="form-control" placeholder="El. paštas"></div>
                            <div class="form-group"><input type="password" class="form-control" placeholder="Slaptažodis"></div>
                            <div class="form-group"><input type="password" class="form-control" placeholder="Pakartokite slaptažodį"></div>
                            <div class="text-right">
                                <button class="btn btn-secondary" type="submit">Registruotis</button>
                            </div>
                        </form>
                    </div>
                    <div class="col col-md p-4">
                        <div class="row m-0 align-items-center">
                            <i style="font-size: 48px; color: rgba(0, 0, 0, .38)" class="material-icons mr-3">account_circle</i>
                            <h4 class="text-muted m-0">
                            Prisijungimas
                            </h4>
                        </div>
                        <p class="text-muted my-4">
                            
                                Placeat esse blanditiis dolor odio earum alias, quaerat rerum asperiores quam? Fugit ad cumque nihil. Fugiat!
                            
                        </p>
    
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="El. paštas">
                            </div>
                            <div class="form-group">
                                <input type="password" type="text" class="form-control" placeholder="Slaptažodis">
                            </div>
                            <button type="submit" class="btn btn-outline-primary float-right">Prisijungti</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
