
const highScoresList=document.getElementById("highScoresList");
// load high score list from local storage
const highScores=JSON.parse(localStorage.getItem("highScores")) || [];

console.log(highScores);


highScoresList.innerHTML= highScores.map(score=>{
    console.log(score.name )
    return '<li class="high-score">'+score.name+' - '+score.score+'</li>'
}).join("");