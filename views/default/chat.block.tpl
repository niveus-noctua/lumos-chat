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
