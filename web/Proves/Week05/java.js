


window.onload = function(){
    document.getElementById("action").addEventListener('onchange', show);
}

function show(event){
    console.log(event);
    let action = document.getElementById("action").value;
    if (action == "insert"){
            document.getElementById("content").style.display = "block";
    }   
}