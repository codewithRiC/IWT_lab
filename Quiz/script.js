const quests =[
    {
        quest: "In html 'hr' tag is used for ?" ,
        ans: [
            { text: "break" , correct: false},
            { text: "horizontal line" , correct: true},
            { text: "title" , correct: false},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "In html 'br' tag is used for ?" ,
        ans: [
            { text: "break" , correct: true},
            { text: "horizontal line" , correct: false},
            { text: "title" , correct: false},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "In html 'pre' tag is used for ?" ,
        ans: [
            { text: "break" , correct: false},
            { text: "predefined paragraph" , correct: true},
            { text: "title" , correct: false},
            { text: "paragraph" , correct: false},
        ]
    },
    {
        quest: "In html 'tr' tag is used for ?" ,
        ans: [
            { text: "break" , correct: false},
            { text: "table data" , correct: false},
            { text: "table row" , correct: true},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "In html 'td' tag is used for ?" ,
        ans: [
            { text: "break" , correct: false},
            { text: "table data" , correct: true},
            { text: "table row" , correct: false},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "In html 'li' tag is used for ?" ,
        ans: [
            { text: "list" , correct: true},
            { text: "horizontal line" , correct: false},
            { text: "title" , correct: false},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "In html 'ol' tag is used for ?" ,
        ans: [
            { text: "unordered list" , correct: false},
            { text: "horizontal line" , correct: false},
            { text: "title" , correct: false},
            { text: "odered list" , correct: true},
        ]
    },
    {
        quest: "In html 'ul' tag is used for ?" ,
        ans: [
            { text: "unordered list" , correct: true},
            { text: "horizontal line" , correct: false},
            { text: "title" , correct: false},
            { text: "ordered list" , correct: false},
        ]
    },
    {
        quest: "In html 'p' tag is used for ?" ,
        ans: [
            { text: "break" , correct: false},
            { text: "horizontal line" , correct: false},
            { text: "title" , correct: false},
            { text: "paragraph" , correct: true},
        ]
    },
    {
        quest: "In html 'a' tag is used for ?" ,
        ans: [
            { text: "break" , correct: false},
            { text: "link tag" , correct: true},
            { text: "title" , correct: false},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "In html 'script' tag is used for ?" ,
        ans: [
            { text: "break" , correct: false},
            { text: "to add the java script" , correct: true},
            { text: "title" , correct: false},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "In html 'title' tag is used for ?" ,
        ans: [
            { text: "break" , correct: false},
            { text: "paragraph" , correct: false},
            { text: "title" , correct: true},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "Input type for male ,female ,others ?" ,
        ans: [
            { text: "number" , correct: false},
            { text: "checkbox" , correct: false},
            { text: "text" , correct: false},
            { text: "radio" , correct: true},
        ]
    },
    {
        quest: "Input type for entering name ?" ,
        ans: [
            { text: "number" , correct: false},
            { text: "checkbox" , correct: false},
            { text: "text" , correct: true},
            { text: "radio" , correct: false},
        ]
    },
    {
        quest: "In html 'span' tag is used as which element ?" ,
        ans: [
            { text: "outline" , correct: false},
            { text: "inline" , correct: true},
            { text: "both" , correct: false},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "In html 'p' tag is used as which element ?" ,
        ans: [
            { text: "outline" , correct: true},
            { text: "inline" , correct: false},
            { text: "both" , correct: false},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "CSS can be implemented ?" ,
        ans: [
            { text: "inline" , correct: false},
            { text: "internal" , correct: false},
            { text: "external" , correct: false},
            { text: "all" , correct: true},
        ]
    },
    {
        quest: "In css for id tag we use ?" ,
        ans: [
            { text: "." , correct: false},
            { text: "#" , correct: true},
            { text: "_" , correct: false},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "In CSS for class tag we use ?" ,
        ans: [
            { text: "." , correct: true},
            { text: "#" , correct: false},
            { text: "_" , correct: false},
            { text: "none" , correct: false},
        ]
    },
    {
        quest: "In html 'nav' tag is used for ?" ,
        ans: [
            { text: "break" , correct: false},
            { text: "navigator bar" , correct: true},
            { text: "title" , correct: false},
            { text: "none" , correct: false},
        ]
    }
];

const questElement = document.getElementById("quest");
const answerButtons = document.getElementById("ans-btn");
const nextButton = document.getElementById("next");

let currentQuestionIndex =0;
let score = 0;

function startQuiz(){
    currentQuestionIndex =0;
    score=0;
    nextButton.innerHTML="Next";
    showQuestion();
}

function showQuestion(){
    resetState();
    let currentQuestion = quests[currentQuestionIndex];
    let questionNo =currentQuestionIndex +1;
    questElement.innerHTML = questionNo + "." + currentQuestion.quest;
    currentQuestion.ans.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML=answer.text;
        button.classList.add("btn");
        answerButtons.appendChild(button);
        if(answer.correct){
            button.dataset.correct=answer.correct;
        }
        button.addEventListener("click",selectAnswer);
    });
}

function resetState(){
    nextButton.style.display="none";
    while(answerButtons.firstChild){
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAnswer(e){
    const selectedBtn =e.target;
    const iscorrect=selectedBtn.dataset.correct==="true";
    if(iscorrect){
        selectedBtn.classList.add("correct");
        score++;

    }else{
        selectedBtn.classList.add("incorrect");
    }
    Array.from(answerButtons.children).forEach(button=> {
        if(button.dataset.correct==="true"){
            button.classList.add("correct");
               }
               button.disabled = true;
    });
    nextButton.style.display="block";
}

function showScore(){
    resetState();
    questElement.innerHTML=`You scored ${score} out of ${quests.length}!`;
    nextButton.innerHTML="Play Again";
    nextButton.style.display="block";
}

function handleNextButton(){
    currentQuestionIndex++;
    if(currentQuestionIndex<quests.length){
        showQuestion();
    }else{
        showScore();
    }
}
nextButton.addEventListener("click", ()=> {
    if(currentQuestionIndex<quests.length){
        handleNextButton();
    }else{
        startQuiz();
    }
});

startQuiz();


