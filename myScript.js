function showHide(shown, hidden){
    document.getElementById(hidden).style.display='block';
    document.getElementById(shown).style.display='none';
    return false;
}

function show(hidden){
    document.getElementById(hidden).style.display='block';
    return false;
}

// function check(form)
// {

// if(form.document == "landLineStart" && form.getElementById == "ogY")
// {

//     var myWindow = location.replace("outgoingOnly.html");

//     return true;
// }
// else if(form.document == "landLineStart" && form.getElementById == "ogN")
// {
//     var myWindow = location.replace("testSocket.html");
//     return true;
// }
// }