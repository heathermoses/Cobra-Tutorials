<?php
    $page = "../";
    include $page . "assets/includes/header.php";
?>
            <!-- Akira Kovacsics/Group 3, ISTE-240, 2198-->
            <title>Quiz: Loading UNIX</title>
            <h1 id="quiz1">Quiz 1: Loading UNIX</h1>
            <form method="get">
                <ol>
                    <li id="q1" class="question">
                        What does SSH stand for?<br/>
                        <label for="q1a"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1a"/>Secure Server Host</div></label>
                        <label for="q1b"><div class="answer"><input type="radio" name = "q1" value = "t" id="q1b"/>Secure Shell</div></label>
                        <label for="q1c"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1c"/>Server Shell</div></label>
                    </li>
                    
                    <li id="q2" class="question">
                        What command do you use in UNIX to log in?<br/>
                        <label for="q2a"><div class="answer"><input type="radio" name = "q2" value = "t" id="q2a"/>ssh</div></label>
                        <label for="q2b"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2b"/>sftp</div></label>
                        <label for="q2c"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2c"/>ss</div></label>
                    </li>

                    <li id="q3" class="question">
                        How do you end your SSH connection?<br/>
                        <label for="q3a"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3a"/>end</div></label>
                        <label for="q3b"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3b"/>exit</div></label>
                        <label for="q3c"><div class="answer"><input type="radio" name = "q3" value = "t" id="q3c"/>quit</div></label>
                    </li>

                    <li id="q4" class="question">
                        What port shoukd you be establishing a connection on, when using an SFTP?<br/>
                        <label for="q4a"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4a"/>75</div></label>
                        <label for="q4b"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4b"/>64</div></label>
                        <label for="q4c"><div class="answer"><input type="radio" name = "q4" value = "t" id="q4c"/>22</div></label>
                        <label for="q4d"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4d"/>20</div></label>
                    </li>
                </ol>
                <input type="button" id= "quizSubmit" value="Check Quiz!" onclick="checkQuiz()">
            </form>
            <br/>
            <div>
                <button class="multipleChoice nextButton" onclick="window.location.href='../quizzes/quiz2.php';">Go to Quiz 2: UNIX Structure</button>
            </div>
<?php
    include $page . "assets/includes/footer.php";
?>


