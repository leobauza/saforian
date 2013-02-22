
function loadExternalHTMLPage() {

var xmlhttp;
var pagesToDisplay = ['/errors/man.htm', '/errors/woman.htm', '/errors/girl.htm', '/errors/aunt.htm', '/errors/billy.htm', '/errors/kid.htm',  '/errors/littlegirl.htm',  '/errors/sensitive.htm',  '/errors/slick.htm',  '/errors/serious.htm'];

if (window.XMLHttpRequest) {

xmlhttp = new XMLHttpRequest();

} else {

xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

}
xmlhttp.onreadystatechange = function () {

if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

document.getElementById("contentArea").innerHTML = xmlhttp.responseText;

}

}
var randomnumber = Math.floor(Math.random() * pagesToDisplay.length);
xmlhttp.open("GET", pagesToDisplay[randomnumber], true);
xmlhttp.send();

}