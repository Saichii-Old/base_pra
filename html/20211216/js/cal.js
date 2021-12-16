// 宣告

const chineseInput = document.getElementById("chinese");
const englishInput = document.getElementById("english");
const mathInput = document.getElementById("math");
const submitInput = document.getElementById("submitBtn");
const form = document.getElementById("myForm");
const btn2Button = document.getElementById("btn2");
const resultDiv = document.getElementById("result");

console.log(window);
console.log('chineseInput typeof is');
console.log(typeof(chineseInput));

btn2Button.addEventListener("click", function (e) {
    console.log('btn2Button click');
    alert('btn2Button');
});

// chineseInput.addEventListener("change", function (e) {
//     const chinese = parseInt(chineseInput.value);
//     const english = parseInt(englishInput.value);
//     const math = parseInt(mathInput.value);  
//     if(chinese > 100 || english > 100 || math > 100){
//         chineseInput.value = 0;
//         englishInput.value = 0;
//         mathInput.value = 0;
//     }
// });

// input 的方法 ()
submitInput.addEventListener("click", function (e) {
    // form.addEventListener("submit", function (e) {
    e.preventDefault();
    confirm("是否要送出表單?");
    // console.log("submitInput is click");

    const chinese = parseInt(chineseInput.value);
    const english = parseInt(englishInput.value);
    const math = parseInt(mathInput.value);  

    let sum = chinese + english + math;
    // console.log(typeof(sum)); //看資料型態
    // console.log("sum is " + sum); //同一行省空間 但只會看出來是string    
    // console.log("總分" , sum);   //同一行 可以看出型態
    // console.log("sum is "); //兩行 但可以看出型態
    // console.log(sum);
    let avg = Math.round(sum / 3 * 100) / 100;
    console.log("avg",avg);

    // level
    let level;
    let color = "secondary";
    if(avg >= 90){
        level = "A"
        color = "success";
    }else if(avg >= 80){
        level = "B"
    }else if(avg >= 70){
        level = "C"
    }else if(avg >= 60){
        level = "D"
    }else{
        level = "E"
        color = "danger";
    }
    
    console.log("level",level);
    console.log("color",color);

    const result =  
    `<div class="alert alert-${color}" role="alert" id="resultOutput">
     國文 : ${chinese} <br>
     英文 : ${english} <br>
     數學 : ${math} <br>
     總分 : ${sum} <br>
     平均 : ${avg} <br>                 
     成績判定 : ${level}                   
    </div>`;

    resultDiv.innerHTML = result;

});




    //1.2 英吋
    // parseInch = parseFloat(inch.value);
    // console.log(parseInch);

    // console.log(parseCentimeter.value);
    // console.log(parseInch.value);

    // alert(discountAll);     
    // resultOutput.innerText = "Result : 恭喜你今天賺了" + discountAll;
    // switch end




