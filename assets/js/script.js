const menu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".menuItem");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

var quiz4 = {
  "q1": "../tutorials/tutorial4.html#lsa",
  "q2": "../tutorials/tutorial4.html#lsl",
  "q3": "../tutorials/tutorial4.html#lsFlags",
  "q4": "../tutorials/tutorial4.html#cdDot",
  "q5": "../tutorials/tutorial4.html#cdDotDot",
  "q6": "../tutorials/tutorial4.html#cdTilde",
  "q7": "../tutorials/tutorial4.html#cdTilde",
  "q8": "../tutorials/tutorial4.html#mkdir",
  "q9": "../tutorials/tutorial4.html#pathways",
  "q10": "../tutorials/tutorial4.html#pathways"
}

var sectionLinks = {
  "quiz4": quiz4
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

    if(correctCount >= 8){
      end.appendChild(document.createTextNode("\nExcellent work! You seem to understand this topic well."));
    } else if(correctCount > 4 && correctCount < 8){
      end.appendChild(document.createTextNode("\nGood job! You seem to understand the topic fairly well, but brushing up on it is reccommended."));
    } else if(correctCount <= 4){
      end.appendChild(document.createTextNode("\nNice try! Try reading up on the topic again."));
    }

}


function showAnswers4(){
  let indivQuestions = document.getElementsByTagName('input');

  for(let i = 0; i < indivQuestions.length; i++){
  if(indivQuestions[i].value == 't' && !indivQuestions[i].checked){
    let currQuestion = document.getElementById(indivQuestions[i].name);

    // Create anchor element.
    var a = document.createElement('a'); 
            
    // Create the text node for anchor element.
    var link = document.createTextNode("Try reviewing this section!");
      
    // Append the text node to anchor element.
    a.appendChild(link); 
      
    // Set the href property.
    a.href = dict[indivQuestions[i].name]; 
      
    // Append the anchor element to the body.

    currQuestion.appendChild(a)
  }
}
}
