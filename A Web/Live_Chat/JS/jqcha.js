$(document).ready(function(){
    $('#option').click(function(){
        $('#chat_B').slideToggle(500);
        $('#pdf_B').slideToggle(800);
        document.getElementById("#ChatsBox").innerHTML = "ad";
    });
    $('#chat_B').click(function(){
        $('.opt').hide(500);
        $('#ChatsBox').show(100);
    });
    $('#pdf_B').click(function(){
        $('.opt').hide(500);
        document.getElementById("option").after("D");
    });
});
