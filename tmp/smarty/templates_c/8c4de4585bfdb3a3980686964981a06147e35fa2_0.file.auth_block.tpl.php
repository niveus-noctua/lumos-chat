<?php
/* Smarty version 3.1.30, created on 2017-11-22 17:26:45
  from "/Applications/MAMP/htdocs/lumos.local/views/default/auth.block.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a15a545097544_44807678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c4de4585bfdb3a3980686964981a06147e35fa2' => 
    array (
      0 => '/Applications/MAMP/htdocs/lumos.local/views/default/auth.block.tpl',
      1 => 1511367837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a15a545097544_44807678 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="auth_div">
    <div id="auth_block">
        <form action="index.php" method="post">
            <label class="block">Логин:<input type="text" name="login"/></label>
            <label class="block">Пароль:<input type="text" name="pass"/></label><br>
            <input type="submit" name = "auth" value = "Вход"/>
            <input type="button" name = "reg" value = "Регистрация"/>
        </form>
    </div>
</div>

<?php }
}
