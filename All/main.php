<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hneil</title>
</head>
<body>
        <input type="text" id="Chat" name="Chats">
        <button onclick="chats_Send()">Send</button>
        <div id="Chat_Show">

        </div>
</body>
<script>
    // function send_Chats(){
    //     var Ch = document.getElementById("Chat").value;
    //     var XML = new XMLHttpRequest();
    //     XML.onload = function(){
    //         document.getElementById("Chat_Show").innerHTML = this.responseText;
    //     }
    //     XML.open("GET","select.php");
    //     XML.send();
    // }
    
function chats_Send() {
    var Code = new XMLHttpRequest();
    Code.onload = function(){
        document.getElementById("Chat_Show").innerHTML = this.responseText;
    }
    Code.open("GET","select.php");
    Code.send();
}
</script>
</html>