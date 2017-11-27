<?php
/* Smarty version 3.1.30, created on 2017-11-25 14:22:13
  from "/Applications/MAMP/htdocs/lumos.local/views/default/chat.block.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a196e85c6e385_67447069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c974a4adb3fe1eb5c568c40aea6c925e6a15c95d' => 
    array (
      0 => '/Applications/MAMP/htdocs/lumos.local/views/default/chat.block.tpl',
      1 => 1511616108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a196e85c6e385_67447069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container" style="margin-top: 50px">
    <div class="row card">
        <div class="card-header">
              Общаться сюда:
        </div>
        <div class="col-md-8 container lumos-chat-body">
            <h3>Начните общаться:</h3>
            <div id ="message-box"style="height: 500px; background-color: #f5f5f7; padding-bottom: 20px; border-top-left-radius: 10px; border-top-right-radius: 10px; overflow: scroll">
                <ol class="messages-list" id="msg-list" reversed>
                </ol>
            </div>

            <form class="chatForm" method="post">
                <div class="form-group">
                    <input type="text" id="message" name="message" class="msgField form-control mr-sm-2" placeholder="Введите сообщение...">
                </div>
                <div>
                    <button type="submit" name="msgButton" class="btn btn-outline-info float-right msgButton">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
