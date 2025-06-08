@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Hỏi đáp cùng AI cơ bản</h3>
    <div id="chat-box" style="border:1px solid #ccc; padding:10px; height:300px; overflow-y:scroll;"></div>
    <input type="text" id="message" placeholder="Nhập câu hỏi..." class="form-control mt-2">
    <button class="btn btn-success mt-2" onclick="sendMessage()">Gửi</button>
</div>

<script>
function sendMessage() {
    let msg = document.getElementById('message').value;
    if (!msg) return;

    let chatBox = document.getElementById('chat-box');
    chatBox.innerHTML += `<div><strong>Bạn:</strong> ${msg}</div>`;

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
        chatBox.innerHTML += `<div><strong>AI:</strong> ${data.reply}</div>`;
        chatBox.scrollTop = chatBox.scrollHeight;
        document.getElementById('message').value = '';
    });
}
</script>
@endsection
