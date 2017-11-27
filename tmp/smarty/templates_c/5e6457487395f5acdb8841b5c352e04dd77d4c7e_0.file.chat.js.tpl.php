<?php
/* Smarty version 3.1.30, created on 2017-11-22 19:18:02
  from "/Applications/MAMP/htdocs/lumos.local/views/default/chat.js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a15bf5af0e684_27649519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e6457487395f5acdb8841b5c352e04dd77d4c7e' => 
    array (
      0 => '/Applications/MAMP/htdocs/lumos.local/views/default/chat.js.tpl',
      1 => 1511374681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a15bf5af0e684_27649519 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        var conn = new WebSocket('ws://localhost:8080');
        var chatForm = $(".chatForm");
        var messageInput = chatForm.find("#message");
        var messagesList = $(".messages-list");

        chatForm.on("submit", function (e) {
            e.preventDefault();
            var message = messageInput.val();
            conn.send(message);
            messagesList.prepend('<li>' + message + '</li>');
        });
        conn.onopen = function(e) {
            console.log("Connection established");
            conn.send("message test from a browser client")
        };

        conn.onmessage = function(e) {
            console.log(e.data);
            messagesList.prepend('<li>' + e.data + '</li>');
        };
    <?php echo '</script'; ?>
>
<?php }
}
