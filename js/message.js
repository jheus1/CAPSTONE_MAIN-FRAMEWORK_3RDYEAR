function toggleConversation(conversationId, botName) {
    // Hide all conversations
    var conversations = document.querySelectorAll('.conversation');
    conversations.forEach(function(conv) {
        conv.style.display = "none";
    });

    // Show the conversation of the clicked bot
    var conversation = document.getElementById(conversationId);
    conversation.style.display = "block";

    // Update conversation header with bot name
    document.getElementById('conversationHeader').innerText = "Conversation with " + botName;
}