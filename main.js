




const clickBtn = document.querySelector(".svg-chat");
const chatBox = document.querySelector(".chat-box")
const chatClose = document.getElementById('close-chat')

clickBtn.addEventListener('click', function(){
    document.querySelector('.chat-box').style.display = "block"
})

chatClose.addEventListener('click', function(){
    document.querySelector('.chat-box').style.display = "none"
})