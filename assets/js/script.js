const menu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".menuItem");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

var quiz1 = {
  "q1": "../tutorials/tutorial1.php#loadingSSH",
  "q2": "../tutorials/tutorial1.php#macSSH",
  "q3": "../tutorials/tutorial1.php#macSSH",
  "q4": "../tutorials/tutorial1.php#establishSFTP"
}

var quiz2 = {
  "q1": "../tutorials/tutorial2.php#processesAndFiles",
  "q2": "../tutorials/tutorial2.php#files",
  "q3": "../tutorials/tutorial2.php#fileStructure",
}

var quiz3 = {
  "q1": "../tutorials/tutorial3.php#lsa",
  "q2": "../tutorials/tutorial3.php#lsl",
  "q3": "../tutorials/tutorial3.php#lsFlags",
  "q4": "../tutorials/tutorial3.php#cdDot",
  "q5": "../tutorials/tutorial3.php#cdDotDot",
  "q6": "../tutorials/tutorial3.php#cdTilde",
  "q7": "../tutorials/tutorial3.php#cdTilde",
  "q8": "../tutorials/tutorial3.php#mkdir",
  "q9": "../tutorials/tutorial3.php#pathways",
  "q10": "../tutorials/tutorial3.php#pathways"
}

var quiz4 = {
  "q1": "../tutorials/tutorial4.php#move",
  "q2": "../tutorials/tutorial4.php#moving",
  "q3": "../tutorials/tutorial4.php#copy",
  "q4": "../tutorials/tutorial4.php#removeFiles",
  "q5": "../tutorials/tutorial4.php#removeDir",
  "q6": "../tutorials/tutorial4.php#removeDir"
}

var quiz5 = {
  "q1": "../tutorials/tutorial5.php#ownership",
  "q2": "../tutorials/tutorial5.php#ownership",
  "q3": "../tutorials/tutorial5.php#permissions",
  "q4": "../tutorials/tutorial5.php#change",
  "q5": "../tutorials/tutorial5.php#chpermissions",
  "q6": "../tutorials/tutorial5.php#chpermissions",
  "q7": "../tutorials/tutorial5.php#chpermissions",
  "q8": "../tutorials/tutorial5.php#chowngrp",
  "q9": "../tutorials/tutorial5.php#chowngrp",
  "q10": "../tutorials/tutorial5.php#chowngrp"
}

var quiz6 = {
  "q1": "../tutorials/tutorial6.php#clear",
  "q2": "../tutorials/tutorial6.php#tab",
  "q3": "../tutorials/tutorial6.php#touch",
  "q4": "../tutorials/tutorial6.php#cat",
  "q5": "../tutorials/tutorial6.php#editors",
  "q6": "../tutorials/tutorial6.php#man"
}

var sectionLinks = {
  "quiz1": quiz1,
  "quiz2": quiz2,
  "quiz3": quiz3,
  "quiz4": quiz4,
  "quiz5": quiz5,
  "quiz6": quiz6
}

function toggleMenu() {
  if (menu.classList.contains("showMenu")) {
    menu.classList.remove("showMenu");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    menu.classList.add("showMenu");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
  }
}

hamburger.addEventListener("click", toggleMenu);

menuItems.forEach( 
  function(menuItem) { 
    menuItem.addEventListener("click", toggleMenu);
  }
)

function showAnswer(tutorialNumber, currQuestionName){
  // Create anchor element.
  var a = document.createElement('a'); 
            
  // Create the text node for anchor element.
  var link = document.createTextNode("Try reviewing this section!");
    
  // Append the text node to anchor element.
  a.appendChild(link); 
    
  // Set the href property.
  a.href = sectionLinks[tutorialNumber][currQuestionName]; 
  
  return a;

}

function checkQuiz(){
  // Function that checks the quiz; should be applicable to all quizzes. 

    let correctCount = 0; // current correct number of questions 
                
    let answers = document.getElementsByClassName('answer'); // array of all the answers (div)
                
    let indivQuestions = document.getElementsByTagName('input'); // array of the anwers (inputs)

    let tutorialNumber = document.getElementsByTagName('h1')[0].id; // quiz tutorial id
                
    for(let i = 0; i < indivQuestions.length; i++){
        if(indivQuestions[i].value == 't' && indivQuestions[i].checked){
            correctCount++;
        }
        if(indivQuestions[i].value == 't' && !indivQuestions[i].checked){
          let currQuestionName = indivQuestions[i].name; // current question name 
          
          let currQuestion = document.getElementById(currQuestionName);

          currQuestion.appendChild(showAnswer(tutorialNumber, currQuestionName));
        }
        if(indivQuestions[i].value == 't'){
            answers[i].style.backgroundColor = "#55A630";
        }else if(indivQuestions[i].value == 'f'){
            answers[i].style.backgroundColor = "#fd332f";
        }
    }

    let end = document.getElementById('content');

    let qCount = document.getElementsByTagName('li');

    end.appendChild(document.createTextNode("Congrats on finishing the quiz! You got " + correctCount + " out of " + qCount.length + " questions correct."));

}