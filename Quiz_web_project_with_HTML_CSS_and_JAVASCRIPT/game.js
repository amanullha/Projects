const question=document.getElementById("question");
const choices=Array.from(document.getElementsByClassName("choice-text"));

// const questionCounterText=document.getElementById("questionCounter");
const progressText=document.getElementById("progressText");
const scoreText=document.getElementById("scourePerQuestion");

const progressBarful=document.getElementById("progressBarful");

let currentQuestion={};
let acceptingAnswer=false;
let score=0;
let questionCounter=0;
let availableQuestions=[];

// load loader 

const loader=document.getElementById("loader");
const game=document.getElementById("game");




// // load question from questions.json file and store questions array
// let questions=[];

// fetch("questions.json").then(res=>{
//     return res.json();
// }).then(loadedQuestions=>{
//     console.log("question are \n",loadedQuestions);
//     questions=loadedQuestions;
//     startGame();
// })
// .catch(error=>{
//     console.log(error);
// });




// load question from calling API (API created by "Open Trivia") and store questions array
let questions=[];

fetch("https://opentdb.com/api.php?amount=10&category=9&difficulty=easy&type=multiple").then(res=>{
    return res.json();
}).then(loadedQuestions=>{
    console.log("question are \n",loadedQuestions.results);
    questions=loadedQuestions.results.map(loadedQuestion=>{
        // add question  to formattedQusetion
        const formattedQusetion={
            question:loadedQuestion.question
        };
        // fatch 3 choices from loadedQuestion.incorrect_answers and store to answerChoices 
        const answerChoices=[...loadedQuestion.incorrect_answers];
         
        // add answer  to formattedQusetion
        formattedQusetion.answer=Math.floor(Math.random()*3)+1;

        // add currect answer to the answerChoices
        answerChoices.splice(formattedQusetion.answer-1,0,loadedQuestion.correct_answer);

        answerChoices.forEach((choice,index)=>{
            formattedQusetion["choice"+(index+1)]=choice;
        })
        return formattedQusetion;


    });


    startGame();

})
.catch(error=>{
    console.log(error);
});



/**
category: "General Knowledge"
correct_answer: "Golden State"
difficulty: "easy"
incorrect_answers: (3) ['Sunshine State', 'Bay State', 'Treasure State']
question: "What is the nickname of the US state of California?"
type: "multiple"
[[Prototype]]: Object


 */



//constents
const CURRENT_BOUNS=10;
const MAX_QUESTION=10;

startGame = () => {
    questionCounter=0;
    score=0;
    availableQuestions=[...questions];
    console.log(availableQuestions);
    getNewQuestion();
        // ramove hidden class from game div
    game.classList.remove("hidden");

    // add hidden class into the loader div to hide/remve loader
    loader.classList.add("hidden");
    // setInterval(update, 1000);

};

getNewQuestion=()=>{

    if(availableQuestions.length===0 || questionCounter>=MAX_QUESTION)
    {
        // store the total score into the Local store for access from the end page
        localStorage.setItem("mostRecentScore",score);
        return window.location.assign("/end.html");
    }

    //change the question
    questionCounter++;
    //update question counter
    // questionCounterText.innerHTML=questionCounter+"/"+MAX_QUESTION;
    // update progress bar
    progressText.innerHTML="Question : "+questionCounter+"/"+MAX_QUESTION;

    // update progress Bar

    const rate=(questionCounter / MAX_QUESTION)*100;
    progressBarful.style.width=rate+'%';
      

    const questionIndex=Math.floor(Math.random()*availableQuestions.length);
    currentQuestion=availableQuestions[questionIndex];
    question.innerHTML=currentQuestion.question;

    // change the question solution options
     choices.forEach(choice=>{
        const choiceNumber=choice.dataset['number'];
        choice.innerText=currentQuestion['choice'+choiceNumber];
    });

    //delete answered question 

    availableQuestions.splice(questionIndex,1);
    acceptingAnswer=true;
};


choices.forEach(choice=>{
    choice.addEventListener("click",e=>{
        // still didn't answered the question 
        if(!acceptingAnswer)return;

        acceptingAnswer=false;
        const selectedChoice=e.target;
        const selectedAnswer=selectedChoice.dataset["number"];
        
        const classToApply=selectedAnswer==currentQuestion.answer?"correct":"incorrect";
        
        // if result is currect then update total scoure
        if(classToApply=="correct")
        incrementScore(CURRENT_BOUNS);

        // make green mark the option if be right otherwise make red if be wrong based on currect and incorrect class

        selectedChoice.parentElement.classList.add(classToApply);

        // load new question after 1000 ms 
        setTimeout(() => {
            //remove color mark in new question 
        selectedChoice.parentElement.classList.remove(classToApply);

        // console.log(selectedAnswer==currentQuestion.answer);
        // console.log(classToApply);
        getNewQuestion();

        }, 1000);
       
    });
});





// startGame();


function incrementScore(points) {
    score+=points;
    scoreText.innerHTML=score;
    
}







// // timer 

// var somoy=20;
// const timer=document.getElementById("timer");
            
// // setInterval(update, 1000);
        
// function update(){
                
//     if(somoy==0){
//         alert("done");
                    
//         }
//     somoy-=1;
//     timer.innerHTML=somoy;
                
//     }          