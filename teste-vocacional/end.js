const username = document.getElementById('username');
const saveScoreBtn = document.getElementById('saveScoreBtn');
const finalScore = document.getElementById('finalScore');
const mostRecentScore = localStorage.getItem('mostRecentScore');
//const area = document.getElementById('area');
const areaSec = sessionStorage.getItem('sessaoTeste');
const areaSession = document.getElementById('areaSec');


areaSession.innerText = areaSec;
finalScore.innerText = mostRecentScore;




