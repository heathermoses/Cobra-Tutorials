<?php
    $page = "../";
    include $page . "assets/includes/header.php";
?>
            <!-- Akira Kovacsics/Group 3, ISTE-240, 2198-->

            <title>Quiz: UNIX StructureX</title>
            <h1 id="quiz2">Quiz 2: UNIX Structure</h1>
            <form method="get">
                <ol>
                    <li id="q1" class="question">
                    What are the two things that make up UNIX?<br/>
                        <label for="q1a"><div class="answer"><input type="radio" name = "q1" value = "t" id="q1a"/>Processes and files</div></label>
                        <label for="q1b"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1b"/>Pathways and permissions</div></label>
                        <label for="q1c"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1c"/>Hierarchy and pages</div></label>
                    </li>
                    
                    <li id="q2" class="question">
                    Are directories considered files?<br/>
                        <label for="q2a"><div class="answer"><input type="radio" name = "q2" value = "t" id="q2a"/>Yes</div></label>
                        <label for="q2b"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2b"/>No</div></label>
                    </li>

                    <li id="q3" class="question">
                    What is at the very top of the UNIX file tree?<br/>
                        <label for="q3a"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3a"/>Home</div></label>
                        <label for="q3b"><div class="answer"><input type="radio" name = "q3" value = "t" id="q3b"/>Root</div></label>
                        <label for="q3c"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3c"/>Leaf</div></label>
                    </li>
                </ol>
                <input type="button" id= "quizSubmit" value="Check Quiz!" onclick="checkQuiz()">
            </form>
            <br/>
            <div>
                <button class="multipleChoice nextButton" onclick="window.location.href='../quizzes/quiz3.php';">Go to Quiz 3: Traversing UNIX</button>
            </div>
<?php
    include $page . "assets/includes/footer.php";
?>
