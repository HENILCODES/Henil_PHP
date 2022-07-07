    function hh() {
        const d = new XMLHttpRequest();
        d.onload = function() {
            document.getElementById('d1').innerHTML = this.responseText;
        }
        d.open("GET", "form.html");
        d.send();
        console.log("Hello");
    }
