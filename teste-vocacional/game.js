const question = document.getElementById('question');
const choices = Array.from(document.getElementsByClassName('choice-text'));
const progressText = document.getElementById('progressText');
const scoreText = document.getElementById('score');
const progressBarFull = document.getElementById('progressBarFull');
const loader = document.getElementById('loader');
const game = document.getElementById('game');
const areaText = document.getElementById('area');
const areaSession = document.getElementById('areaSec');


var area1 = "Você se enquadra melhor no campo Cientifico - Experimental que tem como principal actividade: \n - Investigar e realizar experiencias em diversas areas da ciencia" +
    "\n e possibilidade de trabalhar nas áreas de Geologia, Fisica, Quimica, Astronomia, Psicologia, Matematica, Botanica, Analista informático";
var area2 = "Você se enquadra melhor no campo Cientifico -  Sanitario que tem como principais actividades: \n - Atender feridos e doentes para curar ou prevenir as suas doencas" +
    "\n - Fazer diagnosticos, prescrever e administrar tratamento medico e cururgico para curar e prevenir feridas, lesoes e outras doencas de seres humanos e animais. Receitar medicamentos, etc." +
    "\n e possibilidade de trabalhar nas áreas de Medicina, Veterinaria, Farmacia, Fisioterapia, Medicina Dentaria, Nutricao";
var area3 = "Você se enquadra melhor no campo Teorico - Humanista que tem como principais actividades: \n - Realizar estudos e investigacoes sobre as origens, a evolucao, a historia e o comportamento do homem como individuo e como membro da sociedade. \n - Divulgar doutrinas e realizar cerimonias de culto" +
    "e possibilidade de trabalhar nas áreas de Antropologia, Arqueologia, Historia, Filosofia, Sacerdote, Conservacao de Museus";
var area4 = "Você se enquadra melhor no campo Literario, que tem como principais actividades: \n - Escrever obras de diferentes  generos literarios para representacao ou publicacao. \n - Escrever criticas de obras literarias, artisticas ou musicais, escrever, preparar e selecionar informacoes para publicacao em jornais e revistas ou para difusao via radio, televisao, etc" +
    "e possibilidade de trabalhar nas áreas de Escritor, Locutor, Apresentador, Jornalismo";
var area5 = "Você se enquadra melhor no campo Psicopedagógico, que tem como principais actividades: \n - Dar aulas a alunos diversos niveis de ensino. \n - Ensinar pessoas fisicas ou mentalmente diminuidas. \n - Investigar e aconselhar sobre metodos pedagogicos. \n - Organizar e dirigir actividades educativas em centros escolares. \n - Estudar o comportamento do ser humano e os problemas psicologicos no campo da educação" +
    "e possibilidade de trabalhar nas áreas de Pedagogia, educacao de infancia, psicologia escolar, reabilitacao de deliquentes ou toxicodependentes, direccao de escolas e professor.";
var area6 = "Você se enquadra melhor no campo Politico - social, que tem como principais actividades: \n - Dirigir a politica nacional ou participar nela (intervir na elaboracao de leis, descretos, etc. na sua transmissao e aprovacao).\n - Interpretar as leis para sua integracao na politica nacional. \n - Dirigir empresas publicas.\n - Ajudar membros da comunidade, tendo em conta factores economicos e sociais. administrar a justica, intervir face aos tribunais representando o Estado ou entidades privadas. \n - Autorizar e registar documentos juridicos" +
    "e possibilidade de trabalhar nas áreas de advogacia, sociologia, assistencia social, diplomacia, politica, magistratura, assessoria juridica";
var area7 = "Você se enquadra melhor no campo Economico - empresarial, que tem como principais actividades: \n - Planear, organizar, dirigir e controlar actividades de empresas publicas ou privadas e/ou dos seus departamentos nos sectores industriais ou de servicos. \n - Realizar estudos, ou previsoes sobre problemas relacionados com a economia do pais ou da empresa" +
    "e possibilidade de trabalhar nas áreas de economia, empresariado, gestao, assessoria economica, assessoria fiscal.";
var area8 = "Você se enquadra melhor no campo Persuasivo-Comercial, que tem como principais actividades: \n - Organizar, coordenar e dirigir, por conta dos proprietarios, as actividades de empresas ou estabelecimentos dedicados ao comercio, compra e venda de maercadorias, servicos, seguros, etc." +
    " \n e com possibilidade de trabalhar nas áreas de Direcção de vendas, agente de seguros, encarregado de relacoes publicas, director de empresas turisticas, agente de espetaculos, tecnico de publicidade.";
var area9 = "Você se enquadra melhor no campo Administrativo, que tem como principais actividades: \n - Organizar ou realizar o trabalho administrativo normal de um escritorio: registo de operacoes comerciais ou financeiras, reproducao de textos transmitidos oralmente ou por escrito, utilizacao de maquinas de escritorios  (maquinas de escrever, computadores, telefaxes, calculadora, fotocopiadora, etc). \n - e de instalacoes telefonicas, realizacao de pagamentos e cobrancas, etc \n" +
    "com a possibilidade de trabalhar nas áreas de Operador de computador, escriturario, telefonista, administrativo e secretaria";
var area10 = "Você se enquadra melhor no campo Desportivo, que tem como principais actividades: \n - Participar em competicoes desportivas, treinar ou preparar desportistas para melhorar o seu rendimento, o conhecimento e a tecnica desportiva.\n - Zelar para que se cumpra o regulamento desportivo" +
    "\n com a possibilidade de trabalhar como árbitro, atleta, treinador, preparador fisico";
var area11 = "Você se enquadra melhor no campo Agro-Pecuario, que tem como principais actividades: \n - Dirigir exploracoes agricolas ou de pesca.\n - Cultivar o campo.\n - Criar animais.\n - Cuidar e explorar as florestas.\n - Dedicar-se a pesca em rios ou no mar \n" +
    "com a possibilidade de trabalhar nas áreas de agricultura, criar de animais, agronomia, pastor de animais, pescador, jardinagem.";
var area12 = "Você se enquadra melhor no campo Artistico-musical, que tem como principais actividades: \n - Compor, dirigir ou interpretar obras musicais no teatro, cimena, radio, televisao, etc. \n - Cantar , criar coregrafias, dancar \n" +
    "com a possibilidade de trabalhar como compositor, autor e interprete de de cancoes, cantor, instrumentista, coreografo";
var area13 = "Você se enquadra melhor no campo Artistico-plastico, que tem como principais actividades: \n - Criar e ralizar obras artisticas de escultura, pintura, desenho ou gravacao. \n - Restaurar obras de arte. \n - Desenhar objectos para decorar casa, teatros, edificios publicos, etc. \n - Ilustrar livros, revistas ou folhetos.\n - Fotografar pessoas, animais, paisagens ou objectos para publicacao ou publicidade \n" +
    "com a possibilidade de trabalhar como pintor, desenhador, escultor, restaurar obras de arte, decoracao, ilustrador de livros, cenografo, fotografo, operador de camaras";
var area14 = "Você se enquadra melhor no campo Militar - Segurança, que tem como principais actividades: \n - Pertencer aos corpos militares terrestres, navais ou aereos. \n - Prestar servicos em estabelecimentos militares.\n - Realizar funcoes de proteccao, seguranca e vigilancia.\n - Proteger pessoas e evitar violacoes da lei \n" +
    "com a possibilidade de trabalhar como militar, policia, seguranca";
var area15 = "Você se enquadra melhor no campo de Aventura - Risco, que tem como principais actividades: \n - Fazer viagens ou explorações arriscadas: voos espaciais, descidas a grutas, exploracoes submarinas, etc.\n - Domar animais selvagens (tigres, leoes, etc.) participar  em corridas de carros ou motos \n" +
    "com a possibilidade de trabalhar como astronauta, espeleologo, explorador. Piloto de corridas. Domador, toureiro, detective";
var area16 = "Você se enquadra melhor no campo Mecanico-Manual, que tem como principais actividades: \n - Construir ou reparar utensilios ou objectos usando ferramentas manuais ou maquinas.\n - Montar, manter ou reparar instalacoes ou aparelhos eletricos.\n - Construir ou reparar edificios. Colocar azulejos, instalar tubos para gas e agua.\n - Confeccionar tecidos ou roupa a mao ou a maquina \n" +
    "com a possibilidade de trabalhar como construtor de instrumentos musicais, modista, relojoeiro, sapateiro, seramista, joalheiro, pedreiro, eletricista";
var area17 = "Você se enquadra melhor no campo Cientifico - Técnico, que tem como principais actividades: \n - Utilizar os conhecimentos cientificos na industria.\n - Projectar e dirigir a construcao de edificios, zonas urbanas ou comerciais, bairros, parques, zonas de recreio, carris ferroviarios, pontes, etc.\n - Desenvolver novos produtos: motores, Investigar e realizar experiencias em diversas areas da cienciaaquinas, avioes, etc \n" +
    "com a possibilidade de trabalhar nas áreas de Arquitectura, Engenharia, Controlador Aereo, piloto";

let areas = [area1, area2, area3, area4, area5, area6, area7, area8, area9, area10, area11, area12, area13, area14, area15, area16, area17]; //adicionado
var a;
let currentQuestion = {};
let acceptingAnswers = false;
let score = 0;
let questionCounter = 0;
let availableQuesions = [];
let questions = [];

var grupo1 = 0;
var grupo2 = 0;
var grupo3 = 0;
var grupo4 = 0;
var grupo5 = 0;
var grupo6 = 0;
var grupo7 = 0;
var grupo8 = 0;
var grupo9 = 0;
var grupo10 = 0;
var grupo11 = 0;
var grupo12 = 0;
var grupo13 = 0;
var grupo14 = 0;
var grupo15 = 0;
var grupo16 = 0;
var grupo17 = 0;
var grupoMaior;

var setsession;
var groupMaxIndex;

fetch('testevocacionalperguntas.json')
    .then((res) => {
        return res.json();
    })
    .then((loadedQuestions) => {
        questions = loadedQuestions;
        startGame();
    })
    .catch((err) => {
        console.error(err);
    });

//CONSTANTS
const CORRECT_BONUS = 1;
const MAX_QUESTIONS = 204;

startGame = () => {
    questionCounter = 0;
    score = 0;
    availableQuesions = [...questions];
    getNewQuestion();

};

getNewQuestion = () => {
    if (availableQuesions.length === 0 || questionCounter >= MAX_QUESTIONS) {
        localStorage.setItem('mostRecentScore', score);
        
        // localStorage.setItem('campodeactuacao', area);
        //go to the end page
        return window.location.assign('end.html?resulText='+groupMaxIndex);
    }
    questionCounter++;
    progressText.innerText = `Questão ${questionCounter}/${MAX_QUESTIONS}`;
    //Update the progress bar
    progressBarFull.style.width = `${(questionCounter / MAX_QUESTIONS) * 100}%`;

    const questionIndex = Math.floor(Math.random() * availableQuesions.length);
    currentQuestion = availableQuesions[questionIndex];
    question.innerHTML = currentQuestion.question;

    choices.forEach((choice) => {
        const number = choice.dataset['number'];
        choice.innerHTML = currentQuestion['choice' + number];
    });

    availableQuesions.splice(questionIndex, 1);
    acceptingAnswers = true;
};

choices.forEach((choice) => {
    choice.addEventListener('click', (e) => {
        if (!acceptingAnswers) return;

        acceptingAnswers = false;
        const selectedChoice = e.target;
        const selectedAnswer = selectedChoice.dataset['number'];

        const classToApply =
            selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect';

        console.log(selectedAnswer, currentQuestion.answer, currentQuestion.grupo);
        if (classToApply === 'correct') {

            if (currentQuestion.grupo == 1) {
                incrementScore(CORRECT_BONUS);

                grupo1++;
             
            } else if (currentQuestion.grupo == 2) {
                incrementScore(CORRECT_BONUS);
                grupo2++;
         
            } else if (currentQuestion.grupo == 3) {
                incrementScore(CORRECT_BONUS);
                grupo3++;
                
            } else if (currentQuestion.grupo == 4) {
                incrementScore(CORRECT_BONUS);
                grupo4++;
            
            } else if (currentQuestion.grupo == 5) {
                incrementScore(CORRECT_BONUS);
                grupo5++;
               
            } else if (currentQuestion.grupo == 6) {
                incrementScore(CORRECT_BONUS);

                grupo6++;
               
            } else if (currentQuestion.grupo == 7) {
                incrementScore(CORRECT_BONUS);

                grupo7++;
      
            } else if (currentQuestion.grupo == 8) {
                incrementScore(CORRECT_BONUS);

                grupo8++;
 
            } else if (currentQuestion.grupo == 9) {
                incrementScore(CORRECT_BONUS);

                grupo9++;
    
            } else if (currentQuestion.grupo == 10) {
                incrementScore(CORRECT_BONUS);

                grupo10++;
        } else if (currentQuestion.grupo == 11) {
                incrementScore(CORRECT_BONUS);

                grupo11++;
                
            } else if (currentQuestion.grupo == 12) {
                incrementScore(CORRECT_BONUS);

                grupo12++;
 
            } else if (currentQuestion.grupo == 13) {
                incrementScore(CORRECT_BONUS);

                grupo13++;
              
            } else if (currentQuestion.grupo == 14) {
                incrementScore(CORRECT_BONUS);

                grupo14++;
             
            } else if (currentQuestion.grupo == 15) {
                incrementScore(CORRECT_BONUS);

                grupo15++;
          
            } else if (currentQuestion.grupo == 16) {
                incrementScore(CORRECT_BONUS);

                grupo16++;
      
            } else if (currentQuestion.grupo == 17) {
                incrementScore(CORRECT_BONUS);
                grupo17++;
       
            }
            var grupos = [grupo1, grupo2, grupo3, grupo4, grupo5, grupo6, grupo7, grupo8, grupo9, grupo10, grupo11, grupo12, grupo13, grupo14, grupo15, grupo16, grupo17];
            //incrementScore(CORRECT_BONUS);
            grupoMaior = Math.max(...grupos);
            groupMaxIndex = grupos.indexOf(grupoMaior);

            // if (grupoMaior == grupo1) {
            //     resulText(areas[0]);
            
            
            // } else if (grupoMaior == grupo2) {
            //     resulText(areas[1]);
            //     setsession  = window.sessionStorage.setItem('sessaoTeste',resulText(areas[1]));
            //     console.log(setsession);
            // } else if (grupoMaior == grupo3) {
            //     setsession  = window.sessionStorage.setItem('sessaoTeste',resulText(areas[2]));
            //     console.log(setsession);
            //     resulText(areas[2]);
            // } else if (grupoMaior == grupo4) {
               
            //     resulText(areas[3]);
            // } else if (grupoMaior == grupo5) {
            //     resulText(areas[4]);
            // } else if (grupoMaior == grupo6) {
            //     resulText(areas[5])
            // } else if (grupoMaior == grupo7) {
            //     resulText(areas[6])
            // } else if (grupoMaior == grupo8) {
            //     resulText(areas[7])
            // } else if (grupoMaior == grupo9) {
            //     resulText(areas[8])
            // } else if (grupoMaior == grupo10) {
            //     resulText(areas[9])
            // } else if (grupoMaior == grupo11) {
            //     resulText(areas[10])
            // } else if (grupoMaior == grupo12) {
            //     resulText(areas[11])
            // } else if (grupoMaior == grupo13) {
            //     resulText(areas[12])
            // } else if (grupoMaior == grupo14) {
            //     resulText(areas[13])
            // } else if (grupoMaior == grupo15) {
            //     resulText(areas[14])
            // } else if (grupoMaior == grupo16) {
            //     resulText(areas[15])
            // } else if (grupoMaior == grupo17) {
            //     resulText(areas[16])

            // }


        
            
        }



        selectedChoice.parentElement.classList.add(classToApply);

        setTimeout(() => {
            selectedChoice.parentElement.classList.remove(classToApply);
            getNewQuestion();
        }, 1000);
    });
});

resulText = (text) => {

    areaSec = text;
    areaSession.innerText = areaSec;

};

incrementScore = (num) => {
    score += num;
    scoreText.innerText = score;
};





function salvar() {

    var pergunta = selectedAnswer;
    var resposta = '';
    var resultado = '';
    
    create( pergunta, resposta, resultado);

}


function create( pergunta, resposta, resultado) {
    var data = {
        pergunta: pergunta,
        resposta: resposta,
        resultado:resultado
        
    };

    firebase.database().ref().child('resultstestvoc').push(data, function (error) {
        if (error) {
            alert("Data could not be saved." + error);
            location.href = "index.html";
        } else {
            location.href = "game.html";
        }
    });

}