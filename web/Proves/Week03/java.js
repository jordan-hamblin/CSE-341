//let formElement = document.getElementById("form1");

window.onload = function(){
    document.getElementById("form1").addEventListener('submit', subm);
}

function subm(event){
    event.preventDefault;

    if (!formElement.reportValidity) {
        return;
    }
    if (phoneN()) {
        formElement.submit();
    }
        }

function phoneN(element){
    let num = element.value;
    let numPattern = /^\d\d\d-\d\d\d-\d\d\d\d$/;

    if(numPattern.test(num)){
        document.getElementById("change1").innerHTML = "";
        return true;
    }
    else{
        document.getElementById("change1").innerHTML = "Please Enter a Valid Phone Number";
        return false;
    }
}

function totl(){
    let it1 = Number(document.getElementById("item1").value);
    let it2 = Number(document.getElementById("item2").value);
    let it3 = Number(document.getElementById("item3").value);
    let it4 = Number( document.getElementById("item4").value);
    let tot1 = it1 + it2 + it3 + it4;
    document.getElementById(total).value = tot1;
}

function cardN(element){
    let card = element.value;
    let cardPattern = /^\d\d\d\d \d\d\d\d \d\d\d\d \d\d\d\d$/;

    if(cardPattern.test(card)){
        document.getElementById("change2").innerHTML = "";
    }
    else{
        document.getElementById("change2").innerHTML = "Please Enter a Credit Card Number";
    }
}

function expir(element){
    let exp = element.value;
    let expPattern = /^(\d|0[1-9])\/(20[2-9]\d|2[1-9]\d\d)$/;

    if(expPattern.test(exp)){
        document.getElementById("change3").innerHTML = "";
    }
    else{
        document.getElementById("change3").innerHTML = "Please Enter a Valid Expiration Date";
    }
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
