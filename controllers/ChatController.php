<?php

class ChatController {
    private $chatModel;
    private $chatView;

    public function __construct(ChatModel $chatModel, ChatView $chatView) {
        $this->chatModel = $chatModel;
        $this->chatView = $chatView;
    }

    public function sendMessage($sender, $message) {
        $this->chatModel->saveMessage($sender, $message);
    }

    public function renderChat() {
        $messages = $this->chatModel->getMessages();
        $this->chatView->renderChat($messages);
    }
}
?>
