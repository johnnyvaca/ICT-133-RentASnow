// Homeview.js : javascript used only in the home page
// Author: XCL (refactoring only)
// Jan 2020

function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "ajax_info.txt", true);
    xhttp.send();
}
function startCamera() {
    $('#camera_wrap').camera({
        fx: 'scrollLeft',
        time: 2000,
        loader: 'none',
        playPause: false,
        navigation: true,
        height: '35%',
        pagination: true
    });
}

function cool() {
    document.getElementById("carte").style.color = blue;
}

$(document).ready(function () {
    startCamera();
    loadDoc();
    bouton.addEventListener('click',cool());
});
$("#more_com").click(function(){

    $.ajax({
        url : 'more_com.php' // La ressource ciblée
    });

});
