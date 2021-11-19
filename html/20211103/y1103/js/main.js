const form = document.getElementById("myForm");
const num1Input = document.getElementById("num1");
const num2Input = document.getElementById("num2");
const optionInput = document.getElementById("option");
const resultBtn = document.getElementById("result");
const pResult = document.getElementById("pResult");

form.addEventListener("submit",function(e){
    // console.log(e);
    //預防表單重新整理的預設行為
    e.preventDefault();
    // console.log("submit",e);
    console.log(num1Input.value);
    console.log(num2Input.value);
    console.log(optionInput.value);
    calResult = parseInt(num1Input.value) + parseInt(num2Input.value);
    console.log(typeof(calResult));
    console.log(calResult);


    pResult.innerText = "Result : " + calResult;
    }
)
