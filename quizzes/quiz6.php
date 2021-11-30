<?php
    $page = "../";
    include $page . "assets/includes/header.php";
?>
            <!-- Akira Kovacsics/Group 3, ISTE-240, 2198-->
            <h1 id="quiz7">Quiz 6: Helpful Commands</h1>
            <form method="get">
                <ol>
                    <li id="q1" class="question">
                        What does the command "clear" do?<br/>
                        <label for="q1a"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1a"/>Clears the files in the current directory</div></label>
                        <label for="q1b"><div class="answer"><input type="radio" name = "q1" value = "t" id="q1b"/>Clears the terminal to its default state</div></label>
                        <label for="q1c"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1c"/>Clears your current command</div></label>
                    </li>
                    
                    <li id="q2" class="question">
                        What does the tab button do?<br/>
                        <label for="q2a"><div class="answer"><input type="radio" name = "q2" value = "t" id="q2a"/>Autocompletes commands and file names</div></label>
                        <label for="q2b"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2b"/>Returns to the previous command</div></label>
                        <label for="q2c"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2c"/>Start a new line on the terminal</div></label>
                    </li>

                    <li id="q3" class="question">
                        When you want to create a new empty file, what command would you use?<br/>
                        <label for="q3a"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3a"/>mkfile</div></label>
                        <label for="q3b"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3b"/>create</div></label>
                        <label for="q3c"><div class="answer"><input type="radio" name = "q3" value = "t" id="q3c"/>touch</div></label>
                    </li>

                    <li id="q4" class="question">
                        What command lets you read files?<br/>
                        <label for="q4a"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4a"/>read</div></label>
                        <label for="q4b"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4b"/>view</div></label>
                        <label for="q4c"><div class="answer"><input type="radio" name = "q4" value = "t" id="q4c"/>cat</div></label>
                        <label for="q4d"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4d"/>est</div></label>
                    </li>

                    <li id="q5" class="question">
                        What command DOES NOT open a file in a text editor?<br/>
                        <label for="q5a"><div class="answer"><input type="radio" name = "q5" value = "t" id="q5a"/>cedi</div></label>
                        <label for="q5b"><div class="answer"><input type="radio" name = "q5" value = "f" id="q5b"/>nano</div></label>
                        <label for="q5c"><div class="answer"><input type="radio" name = "q5" value = "f" id="q5c"/>vim</div></label>
                    </li>

                    <li id="q6" class="question">
                        What command displays information regarding a command?<br/>
                        <label for="q6a"><div class="answer"><input type="radio" name = "q6" value = "f" id="q6a"/>com</div></label>
                        <label for="q6b"><div class="answer"><input type="radio" name = "q6" value = "t" id="q6b"/>man</div></label>
                        <label for="q6c"><div class="answer"><input type="radio" name = "q6" value = "f" id="q6c"/>info</div></label>
                    </li>

                    <li id="q7" class="question">
                        What does the "grep" command do?<br/>
                        <label for="q7a"><div class="answer"><input type="radio" name = "q7" value = "t" id="q7a"/>Allows the user to search for instances of strings in files</div></label>
                        <label for="q7b"><div class="answer"><input type="radio" name = "q7" value = "f" id="q7b"/>Allows the user to find all files with an instance of a string in it</div></label>
                        <label for="q7c"><div class="answer"><input type="radio" name = "q7" value = "f" id="q7c"/>Allows the user to replace instances of a string in files</div></label>
                    </li>
                </ol>
                <input type="button" id= "quizSubmit" value="Check Quiz!" onclick="checkQuiz()">
            </form>
            <br/>
            <div>
                <button class="multipleChoice backButton" onclick="window.location.href='../quizzes/quiz5.php';">Go to Quiz 5: UNIX and File Permissions</button>
            </div>
<?php
    include $page . "assets/includes/footer.php";
?>


