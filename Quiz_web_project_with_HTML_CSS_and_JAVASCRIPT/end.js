

const userName=document.getElementById("userName");
const saveScoreBtn=document.getElementById("saveScoreBtn");
const finalScore=document.getElementById("finalScore");


// load score from local storage
const mostRecentScore=localStorage.getItem('mostRecentScore')
finalScore.innerText=mostRecentScore;

const highScores=JSON.parse(localStorage.getItem("highScores")) || [];
const MAX_HIGH_SCORE=5;
// console.log(highScores);


userName.addEventListener("keyup",()=>{
    // console.log(userName.value);
    saveScoreBtn.disabled=!userName.value;
});

saveHighScore= e=>{
    // console.log("click save button")
    e.preventDefault();

    const score={
        score: mostRecentScore,
        // score:Math.floor(Math.random()*100),
        name: userName.value
    };
    highScores.push(score);
    highScores.sort((a,b)=>b.score-a.score);
    // take 5 high score 
    highScores.splice(5);

    // store 5 high score in local storage
    localStorage.setItem("highScores",JSON.stringify(highScores));
    // console.log(highScores);

    // back home page
    window.location.assign("/quiz.html");

}