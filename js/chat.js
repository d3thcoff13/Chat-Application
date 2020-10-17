function users(){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("users").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","js/raven.php?req=users",true);
    xmlhttp.send();
}

function recieve() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("listener").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","js/raven.php?user=" + escape(document.getElementById("listenTo").value) + "&req=recieve",true);
    xmlhttp.send();
    }

function send() {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("errors").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","js/raven.php?msg=" + escape(document.getElementById("sender").value) + 
        "&user=" + escape(document.getElementById("username").value) + 
        "&pass=" + escape(document.getElementById("password").value) + "&req=send",true);
    xmlhttp.send();
}
    