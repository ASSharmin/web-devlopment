var d = document.getElementById("display");

function Numclick(x){
    d.value = d.value+ "" + x;
}
var opertor ;//opertor + - * /
var fistValue;
function OperatorSelect(x){
    opertor = x;
    fistValue =  d.value;
    clr();
}
function clr(){
    d.value = ""; 
}
function Equal(){
    fistValue = parseInt(fistValue);
    secondValue = parseInt(d.value);
    if(opertor == "sum"){d.value = fistValue + secondValue;}
    if(opertor == "sub"){d.value = fistValue - secondValue;}
    if(opertor == "mul"){d.value = fistValue * secondValue;}
    if(opertor == "div"){d.value = fistValue / secondValue;}
}