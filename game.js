setTimeout(function() {
    $('textarea').focus();
}, 0);

function httpGet(theUrl)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false );
    xmlHttp.send( null );
    return xmlHttp.responseText;
}
var lastUpdate = httpGet("/mpword/data.php");
var previousUpdate = lastUpdate;
var preparedString = lastUpdate;
$('textarea').val(lastUpdate);
 setInterval(function() {
     preparedString = lastUpdate;
}, 5000); 

 setInterval(function() {
     var len = $('textarea').val().length;
     if(lastUpdate.length > len){
        len = lastUpdate.length; 
     }
     for (var i = 0; i < len; i++) {
        if(lastUpdate[i] !== $('textarea').val()[i] && ($('textarea').val()[i] !== preparedString[i])){
            httpGet("/mpword/data.php?id=" + len + "&val=" + $('textarea').val()[i]);
        }
     }
      lastUpdate = httpGet("/mpword/data.php");
     if(previousUpdate !== lastUpdate){
         $('textarea').val(lastUpdate);
     }
     previousUpdate = lastUpdate;

}, 200); 

window.oncontextmenu = function () {
    return false; 
}