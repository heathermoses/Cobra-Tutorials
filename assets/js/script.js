const menu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".menuItem");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

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

function checkQuiz(){
    let correctCount = 0;
                
    let questions = document.getElementsByClassName('question');
                
    let indivQuestions = document.getElementsByTagName('input');
                
    for(let i = 0; i < indivQuestions.length; i++){
        if(indivQuestions[i].value == 't' && indivQuestions[i].checked){
            correctCount++;
        }
        if(indivQuestions[i].value == 't'){
            questions[i].style.backgroundColor = "#55A630";
        }else if(indivQuestions[i].value == 'f'){
            questions[i].style.backgroundColor = "#fd332f";
        }
    }
}
