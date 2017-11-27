<?php
/* Smarty version 3.1.30, created on 2017-11-25 14:01:34
  from "/Applications/MAMP/htdocs/lumos.local/views/default/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1969ae922167_58992484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1796ec9e619f09c440722a9275fb6fae573577fe' => 
    array (
      0 => '/Applications/MAMP/htdocs/lumos.local/views/default/header.tpl',
      1 => 1511614892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1969ae922167_58992484 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
          crossorigin="anonymous">

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jsWebPath']->value;?>
jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jsWebPath']->value;?>
chat.socket.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jsWebPath']->value;?>
modal.control.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jsWebPath']->value;?>
user.control.js"><?php echo '</script'; ?>
>

</head>
<body>
<nav class="navbar navbar-toggleable-md bg-info navbar-inverse position-sticky">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgWebPath']->value;?>
logo.png" width="90">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto lumos-navbar-links">
            <li class="nav-item active">
                <a class="nav-link" href="?controller=index&action=index">Главная<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link reg-button" href="#" data-toggle="modal" data-target="#registrationModal">Регистрация</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="?controller=chat&action=chat">Чат<span class="sr-only"></span></a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" id="auth-form">
            <input class="lumos-input form-control mr-sm-2" name ="auth-email"t ype="email" placeholder="email...">
            <input class="form-control mr-sm-2" type="password" placeholder="password...">
            <button class="btn btn-info my-2 my-sm-0" type="submit" name="auth-pass" onclick="registerNewUser()">Войти</button>
        </form>
    </div>
</nav>

<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Привет!</h6>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Просто введите свои данные в формы ниже:</p>
                <div class="container-fluid">
                    <form id="reg-form">
                        <div class="form-group">
                            <label for="inputNickname">Придумайте никнейм:</label>
                            <input type="text" class="form-control" id="inputNickname" placeholder="Nickname..." required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Адрес электронной почты:</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email..." required>
                        </div>
                        <div class="form-group">
                            <label for="inputPass">Пароль:</label>
                            <input type="password" class="form-control" id="inputPass" aria-describedby="emailHelp" placeholder="Password..." required>
                        </div>
                        <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Отмена</button>
                        <button type="submit" class="btn btn-outline-info" onclick="registerNewUser()">Вперед</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
