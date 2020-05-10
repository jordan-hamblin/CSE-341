window.onload = function(){
    document.getElementById("form1").addEventListener('submit', subm);
}

function subm(event){
    event.preventDefault;

    if (!formElement.reportValidity) {
        return;
    }

    formElement.submit();
    
        }

function totl(){
    let it1 = Number(document.getElementById("item1").value);
    let it2 = Number(document.getElementById("item2").value);
    let it3 = Number(document.getElementById("item3").value);
    let it4 = Number( document.getElementById("item4").value);
    let tot1 = it1 + it2 + it3 + it4;
    document.getElementById(total).value = tot1;
}



let tot = 0;
function price(){
    tot = 0;
    if(document.getElementById("item1").checked == true){
        tot += 500;
    }
    if(document.getElementById("item2").checked == true){
        tot += 50;
    }
    if(document.getElementById("item3").checked == true){
        tot += 10;
    }
    if(document.getElementById("item4").checked == true){
        tot += 20;
    }
    document.getElementById("total").value = tot;

}
