


window.onload = function(){
    document.getElementById("action").addEventListener('change', show);
}

function show(event){
    let action = document.getElementById("action").value;
    if (action == "insert"){
            document.getElementById("content").style.display = "block";
    }
    else{
        document.getElementById("content").style.display = "none";
    }   
}