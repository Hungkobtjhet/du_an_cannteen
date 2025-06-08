<!-- AI Chat Floating Button -->
<div id="ai-float-button" onclick="toggleAIChat()">
    🤖
</div>

<!-- AI Chat Box -->
<div id="ai-chat-box">
    <div id="ai-chat-header">Hỏi đáp cùng AI <span onclick="toggleAIChat()" style="float:right; cursor:pointer;">✖</span></div>
    <div id="ai-chat-content"></div>
    <input type="text" id="ai-message" placeholder="Nhập câu hỏi..." />
    <button onclick="sendAIMessage()">Gửi</button>
</div>

<style>
    #ai-float-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #28a745;
        color: #fff;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        text-align: center;
        line-height: 50px;
        font-size: 24px;
        cursor: pointer;
        z-index: 9999;
        box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }

    #ai-chat-box {
        display: none;
        position: fixed;
        bottom: 80px;
        right: 20px;
        width: 300px;
        background: white;
        border: 1px solid #ccc;
        border-radius: 8px;
        z-index: 10000;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    #ai-chat-header {
        background: #28a745;
        color: white;
        padding: 10px;
        font-weight: bold;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    #ai-chat-content {
        padding: 10px;
        height: 200px;
        overflow-y: auto;
        font-size: 14px;
    }

    #ai-chat-box input {
        width: 70%;
        padding: 6px;
        border: none;
        border-top: 1px solid #ccc;
        outline: none;
    }

    #ai-chat-box button {
        width: 30%;
        padding: 6px;
        background: #28a745;
        color: white;
        border: none;
        border-top: 1px solid #ccc;
    }
</style>

<script>
function toggleAIChat() {
    const box = document.getElementById('ai-chat-box');
    box.style.display = (box.style.display === 'none' || box.style.display === '') ? 'block' : 'none';
}

function sendAIMessage() {
    const msg = document.getElementById('ai-message').value;
    if (!msg) return;
    const content = document.getElementById('ai-chat-content');
    content.innerHTML += `<div><strong>Bạn:</strong> ${msg}</div>`;

    fetch("{{ url('/ai-chat-basic') }}", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ message: msg })
    })
    .then(res => res.json())
    .then(data => {
        content.innerHTML += `<div><strong>AI:</strong> ${data.reply}</div>`;
        content.scrollTop = content.scrollHeight;
        document.getElementById('ai-message').value = '';
    });
}
</script>
