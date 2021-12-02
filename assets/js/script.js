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
    
    let indivQuestions = document.getElementsByTagName('input'); // array of the anwers (inputs)
    let indivQuestionsfinal = new Array();

    let tutorialNumber = document.getElementsByTagName('h1')[0].id; // quiz tutorial id

    //insert by chris: the hamburger menu counts as the first object so i filtered to only
    //radio type

    for(let i=0; i<indivQuestions.length; i++) {
      if(indivQuestions[i].type == 'radio') {
        indivQuestionsfinal.push(indivQuestions[i]);
      }
    }
      
    for(let j = 0; j < indivQuestionsfinal.length; j++){
        if(indivQuestionsfinal[j].value == 't' && indivQuestionsfinal[j].checked == false){
            correctCount++;
        }
        if(indivQuestionsfinal[j].value == 't' && !indivQuestionsfinal[j].checked){
          let currQuestionName = indivQuestionsfinal[j].name; // current question name 
          
          let currQuestion = document.getElementById(currQuestionName);

          currQuestion.appendChild(showAnswer(tutorialNumber, currQuestionName));
        }
        if(indivQuestionsfinal[j].value == 't'){
            let ansstring = indivQuestionsfinal[j].id
            document.getElementById(ansstring).parentNode.style.backgroundColor = "#55A630";
        }else if(indivQuestionsfinal[j].value == 'f'){
            let ansstring = indivQuestionsfinal[j].id
            document.getElementById(ansstring).parentNode.style.backgroundColor = "rgb(253, 51, 47)";
        }
    }

    let end = document.getElementById('content');

    let qCount = document.getElementsByTagName('li');

    end.appendChild(document.createTextNode("Congrats on finishing the quiz! You got " + correctCount + " out of " + qCount.length + " questions correct."));

}