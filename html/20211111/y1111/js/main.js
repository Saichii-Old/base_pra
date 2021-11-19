const myForm = document.getElementById("myForm");
const num1Input = document.getElementById("num1");
const num2Input = document.getElementById("num2");
// const resultBtn = document.getElementById("resultBtn");
const result = document.getElementById("result");

// myForm.addEventListener("submit",function(e){
//     alert("55688");
// });

// num1Input.addEventListener("change",function(e){
//     alert("changee");
// });

// myForm.addEventListener("submit",function(e){
//     e.preventDefault();
//     calResult = parseInt(num1Input.value) * parseInt(num2Input.value) ;
//     // console.log(calResult);
//     // result.innerText = "Result : " + calResult;
// });

num1Input.addEventListener("change",function(e){
    num1InputValue = parseInt(num1Input.value);
    num2InputValue = parseInt(num2Input.value);
    calResult = num1InputValue * num2InputValue;
    console.log(calResult);
    console.log(typeof(calResult));
    result.innerText = "Result : " + calResult;
});
