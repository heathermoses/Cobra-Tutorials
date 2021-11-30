<?php
    $page = "../";
    include $page . "assets/includes/header.php";
?>
            <h1 id="quiz4">Quiz 3: Traversing UNIX</h1>
            <form method="get">
                <ol>
                    <li id="q1" class="question">
                        The ls command lists the files in the current directory. What does <span class="code">ls -a</span> do?<br/>
                        <label for="q1a"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1a"/>Shows the files and the date they were created</div></label>
                        <label for="q1b"><div class="answer"><input type="radio" name = "q1" value = "t" id="q1b"/>Shows hidden files</div></label>
                        <label for="q1c"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1c"/>Shows the files and the permissions</div></label>
                    </li>
                    
                    <li id="q2" class="question">
                        What does <span class="code">ls -l</span> NOT do?<br/>
                        <label for="q2a"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2a"/>Show the date the files were created</div></label>
                        <label for="q2b"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2b"/>Show file type</div></label>
                        <label for="q2c"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2c"/>Show file owner</div></label>
                        <label for="q2d"><div class="answer"><input type="radio" name = "q2" value = "t" id="q2d"/>Show hidden files</div></label>
                        <label for="q2e"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2e"/>Show file permissions</div></label>
                    </li>

                    <li id="q3" class="question">
                        With the different forms of ls, what do you call the -a/-l/-la? (More than one answer is correct)<br/>
                        <label for="q3a"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3a"/>Mod</div></label>
                        <label for="q3b"><div class="answer"><input type="radio" name = "q3" value = "t" id="q3b"/>Flag</div></label>
                        <label for="q3c"><div class="answer"><input type="radio" name = "q3" value = "t" id="q3c"/>Switch</div></label>
                        <label for="q3d"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3d"/>Option</div></label>
                    </li>

                    <li id="q4" class="question">
                        Where does <span class="code">cd ./</span> take you?<br/>
                        <label for="q4a"><div class="answer"><input type="radio" name = "q4" value = "t" id="q4a"/>Current directory</div></label>
                        <label for="q4b"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4b"/>The parent directory</div></label>
                        <label for="q4c"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4c"/>A child directory</div></label>
                    </li>

                    <li id="q5" class="question">
                        If <span class="code">cd ../../</span> is used, how many levels up will you move?<br/>
                        <label for="q5a"><div class="answer"><input type="radio" name = "q5" value = "f" id="q5a"/>One</div></label>
                        <label for="q5b"><div class="answer"><input type="radio" name = "q5" value = "t" id="q5b"/>Two</div></label>
                        <label for="q5c"><div class="answer"><input type="radio" name = "q5" value = "f" id="q5c"/>Three</div></label>
                    </li>

                    <li id="q6" class="question">
                        Where does <span class="code">cd ~</span> take you?<br/>
                        <label for="q6a"><div class="answer"><input type="radio" name = "q6" value = "f" id="q6a"/>Root Directory</div></label>
                        <label for="q6b"><div class="answer"><input type="radio" name = "q6" value = "f" id="q6b"/>Parent Directory</div></label>
                        <label for="q6c"><div class="answer"><input type="radio" name = "q6" value = "t" id="q6c"/>Home Directory</div></label>
                    </li>

                    <li id="q7" class="question">
                        Where does <span class="code">cd /</span> take you?<br/>
                        <label for="q7a"><div class="answer"><input type="radio" name = "q7" value = "t" id="q7a"/>Root Directory</div></label>
                        <label for="q7b"><div class="answer"><input type="radio" name = "q7" value = "f" id="q7b"/>Parent Directory</div></label>
                        <label for="q7c"><div class="answer"><input type="radio" name = "q7" value = "f" id="q7c"/>Home Directory</div></label>
                    </li>

                    <li id="q8" class="question">
                        When you want to make a new directory what command should you use?<br/>
                        <label for="q8a"><div class="answer"><input type="radio" name = "q8" value = "t" id="q8a"/>mkdir</div></label>
                        <label for="q8b"><div class="answer"><input type="radio" name = "q8" value = "f" id="q8b"/>maked</div></label>
                        <label for="q8c"><div class="answer"><input type="radio" name = "q8" value = "f" id="q8c"/>mkdirtry</div></label>
                        <label for="q8d"><div class="answer"><input type="radio" name = "q8" value = "f" id="q8d"/>makedirectory</div></label>
                    </li>

                    <li id="q9" class="question">
                        What is the root directory?<br/>
                        <label for="q9a"><div class="answer"><input type="radio" name = "q9" value = "f" id="q9a"/>The path starting at the current directory</div></label>
                        <label for="q9b"><div class="answer"><input type="radio" name = "q9" value = "t" id="q9b"/>The path starting at the very beginning of the UNIX hierarchy</div></label>
                    </li>
                    
                    <li id="q10" class="question">
                        Does pwd show the absolute path or relative path to a directory?<br/>
                        <label for="q10a"><div class="answer"><input type="radio" name = "q10" value = "t" id="q10a"/>Absolute</div></label>
                        <label for="q10b"><div class="answer"><input type="radio" name = "q10" value = "f" id="q10b"/>Relative</div></label>
                    </li>
                </ol>
                <input type="button" id= "quizSubmit" value="Check Quiz!" onclick="checkQuiz()">
            </form>
            <br/>
            <div>
                <button class="multipleChoice backButton" onclick="window.location.href='../quizzes/quiz2.html';">Go to Quiz 2: UNIX Structure</button>
                <button class="multipleChoice nextButton" onclick="window.location.href='../quizzes/quiz4.html';">Go to Quiz 4: Manipulating UNIX Files and Directories</button>
            </div>
<?php
    include $page . "assets/includes/footer.php";
?>