


window.onload = function(){
    document.getElementById("action").addEventListener('onchchange', show);
}

function show(event){
    let action = document.getElementById("action").value;
    if (action == "insert"){
            document.getElementById("content").style.display = "block";
    }   
}