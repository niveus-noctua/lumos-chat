<?php
/* Smarty version 3.1.30, created on 2017-11-22 18:44:42
  from "/Applications/MAMP/htdocs/lumos.local/views/default/chat.block.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a15b78a6688b8_97083634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d31e846e9ffa800c3d2c0e2f61da9d6ed8382d' => 
    array (
      0 => '/Applications/MAMP/htdocs/lumos.local/views/default/chat.block.tpl',
      1 => 1511372116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a15b78a6688b8_97083634 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>Messages</h3>
            <ul class="messages-list">

            </ul>
            <form class="chatForm" method="post">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea type="button" id="message" name="message" class="form-control" value=""></textarea>
                </div>
                <div>
                    <button type="submit" name="button" class="btn btn-primary float-right">Send</button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
