$(document).ready(function() {
    var conn = new WebSocket('ws://localhost:8080');
    var chatForm = $(".chatForm");
    var messageInput = chatForm.find("#message");
    var msgButton = $(".msgButton");
    var messagesList = $(".messages-list");




    chatForm.on("submit", function (e) {
        e.preventDefault();
        var message = messageInput.val();
        conn.send(message);

        messagesList.append('<li style="width: 100%"><div class="message_r"><br/>' + message + '</div></li>');
        $.getScript("/js/chat.control.js", function () {
            console.log('Загружено');
            $('#message').val('');
        });
    });

    conn.onopen = function(e) {
        console.log("Connection established");
        conn.send("Новый пользователь присоединился к чату")
    };

    conn.onmessage = function(e) {
        console.log(e.data);
        messagesList.append('<li style="width: 100%"><div class="message">' + e.data + '</div></li>');
        $.getScript("/js/chat.control.js", function () {
            console.log('Загружено');
        });
    };
});
