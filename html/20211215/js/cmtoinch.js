// 宣告
const cmInput = document.getElementById("centimeter");
const inchInput = document.getElementById("inch");

const m2Input = document.getElementById("m2");
const pingInput = document.getElementById("ping");

const cmErr = document.getElementById("cmErr");
const inchErr = document.getElementById("inchErr");
const m2Err = document.getElementById("m2Err");
const pingErr = document.getElementById("pingErr");


cmInput.addEventListener("change", function (e) {
    // console.log("centimeter is changes")
    //1.1 公分
    const cm = parseFloat(cmInput.value);
    console.log(cm);
    let inch = cm / 2.54;
    console.log(inch);
    inch = Math.round(inch * 100)  / 100; 
    console.log(inch);
    inchInput.value = inch;
    if(isNaN(cm)){
        cmErr.innerText = "請輸入數字";
    }

});

inchInput.addEventListener("change", function (e) {
    // console.log("centimeter is changes")
    //1.2 英吋
    const inch = parseFloat(inchInput.value);
    console.log(inch);
    cm = inch * 2.54; 
    cm = Math.round(cm * 100)  / 100
    console.log(cm);
    cmInput.value = cm;
    if(isNaN(inch)){
        inchErr.innerText = "請輸入數字";
    }

});

m2Input.addEventListener("change", function (e) {
    console.log("m2 is changes")
    //1.3 平方公尺
    const m2 = parseFloat(m2Input.value);
    console.log(m2);
    let ping = m2 / 3.306;
    console.log(ping);
    ping = Math.round(ping * 100)  / 100; 
    console.log(ping);
    pingInput.value = ping;
    if(isNaN(m2)){
        m2Err.innerText = "請輸入數字";
    }

});

pingInput.addEventListener("change", function (e) {
    // console.log("centimeter is changes")
    //1.2 英吋
    const ping = parseFloat(pingInput.value);
    console.log(ping);
    m2 = ping * 3.306; 
    m2 = Math.round(m2 * 100)  / 100
    console.log(m2);
    m2Input.value = m2;
    if(isNaN(ping)){
        pingErr.innerText = "請輸入數字";
    }

});




    //1.2 英吋
    // parseInch = parseFloat(inch.value);
    // console.log(parseInch);

    // console.log(parseCentimeter.value);
    // console.log(parseInch.value);

    // alert(discountAll);     
    // resultOutput.innerText = "Result : 恭喜你今天賺了" + discountAll;
    // switch end




