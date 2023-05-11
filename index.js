const button= document.getElementById("btn");
const res= document.getElementById("result");
const p=document.getElementById("p").value;
const r=document.getElementById("r").value;
const t=document.getElementById("t").value;

button.addEventListener('click',function(e){

    e.preventDefault();

    const p=document.getElementById("p").value;
    const r=document.getElementById("r").value;
    const t=document.getElementById("t").value;

    const ci=(p *(1+(r/100))**t);

    res.innerText=`Your Compound Interest is $${ci}`;

})