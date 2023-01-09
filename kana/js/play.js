let i = 0;
let Q = i + 1;
let P = 0;
let js_Kanjis = arrayShuffle(js_Kanjis_Origin);


let K_Qnum = document.querySelector("#Q-Num");
K_Qnum.innerHTML = Q;

let K_Points = document.querySelector("#P-Num");
K_Points.innerHTML = P;

let K_Question = document.querySelector("#K_Question");
K_Question.textContent = js_Kanjis[i].question;

let K_Figure = document.querySelector(".K_figure");

let K_input = document.querySelector("#K-input");
K_input.addEventListener('keypress', K_Ans);

let K_output = document.querySelector("#K-output");

const btn_Pass = document.querySelector("#btn-Pass");
btn_Pass.addEventListener('click', K_Pass);

const btn_submit = document.querySelector("#K_submit");
btn_submit.addEventListener('click', K_submit);

let K_Results = [];
class K_Result {
    constructor(question, answer, input, flg) {
        this.question = question;
        this.answer = answer;
        this.input = input;
        this.flg = flg;
    }
}

let startTime = new Date();
let now;
let hour;
let min;
let sec;
let K_Time = document.querySelector("#K-Time");
setInterval('watchTime()', 1000);



function watchTime() {
    nowTime = new Date();
    datet = parseInt((nowTime.getTime() - startTime.getTime()) / 1000);
    hour = parseInt(datet / 3600);
    min = parseInt((datet / 60) % 60);
    sec = datet % 60;
    remainingTime = 60 - sec;


    if (remainingTime == 60) {
        TimeOver();
        return;
    }

    K_Time.innerHTML = remainingTime;
}

function arrayShuffle(arry) {
    for (let index = (arry.length - 1); 0 < index; index--) {
        let random = Math.floor(Math.random() * (index + 1));

        let tmp = arry[index];
        arry[index] = arry[random];
        arry[random] = tmp;
    }
    return arry;
}

function TimeOver() {
    let e = new Event('click');
    btn_submit.dispatchEvent(e);
    document.resultForm.submit();
}

function K_submit() {
    let result_input = document.querySelector("#result_input");
    let J_K_Results = JSON.stringify(K_Results);
    result_input.setAttribute('value', J_K_Results);
}



function K_Pass() {
    Result_Set(2);
    i++;
    if (i >= js_Kanjis.length) {
        TimeOver();
    } else {
        K_output.innerHTML = "パスしました";
        K_output.classList.add('likes-blue');
        K_Question.textContent = js_Kanjis[i].question;
        K_Reset();
    }
}

function K_Ans() {
    if (event.key === 'Enter') {
        if (K_input.value === js_Kanjis[i].answer) {
            Result_Set(0);
            K_output.innerHTML = "せいかい";
            K_output.classList.add('likes-green');
            K_Figure.classList.add('double-circle');
            i++;
            if (i >= js_Kanjis.length) {
                TimeOver();
            }
            P++;
            K_Points.innerHTML = P;
            K_Reset();
            setTimeout("K_Question.textContent = js_Kanjis[i].question;", 600);

        }
        else if (K_input.value === "") {
            return;
        }
        else {
            Result_Set(1);
            K_output.innerHTML = "ふせいかい";
            K_output.classList.add('dislikes-red');
            K_Figure.classList.add('False-cross');

            K_Reset();
        }
    }
}

function K_Reset() {
    setTimeout('K_output.innerHTML = "　　　　　　　　　　"', 600);
    setTimeout("K_output.classList.remove('likes-green')", 600);
    setTimeout("K_output.classList.remove('dislikes-red')", 600);
    setTimeout("K_output.classList.remove('likes-blue')", 600);
    setTimeout("K_Figure.classList.remove('double-circle')", 600);
    setTimeout("K_Figure.classList.remove('False-cross')", 600);
    K_input.value = "";
    K_input.setAttribute('placeholder', "");
    K_input.focus();

    Q = i + 1;
    K_Qnum.innerHTML = Q;
}

function Result_Set(flg) {
    let K_Result1 = new K_Result(js_Kanjis[i].question, js_Kanjis[i].answer, K_input.value, flg);
    K_Results.push(K_Result1);
}

