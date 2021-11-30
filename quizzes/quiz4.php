<?php
    $page = "../";
    include $page . "assets/includes/header.html";
?>
            <h1 id="quiz5">Quiz 4: Manipulating UNIX Files and Directories</h1>
            <form method="get">
                <ol>
                    <li id="q1" class="question">
                        What does the “mv” command NOT do?<br/>
                        <label for="q1a"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1a"/>Move files and directories</div></label>
                        <label for="q1b"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1b"/>Preserve a file’s contents</div></label>
                        <label for="q1c"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1c"/>Rename a moving directory or file</div></label>
                        <label for="q1d"><div class="answer"><input type="radio" name = "q1" value = "t" id="q1d"/>Move something to more than one destination</div></label>
                    </li>
                    
                    <li id="q2" class="question">
                        What is the "mv" command’s format?<br/>
                        <label for="q2a"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2a"/>mv &#60destination&#62 &#60source&#62</div></label>
                        <label for="q2b"><div class="answer"><input type="radio" name = "q2" value = "t" id="q2b"/>mv &#60source&#62 &#60destination&#62</div></label>
                    </li>

                    <li id="q3" class="question">
                        What command lets you copy files?<br/>
                        <label for="q3a"><div class="answer"><input type="radio" name = "q3" value = "t" id="q3a"/>cp</div></label>
                        <label for="q3b"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3b"/>copy</div></label>
                        <label for="q3c"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3c"/>dp</div></label>
                        <label for="q3d"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3d"/>dupl</div></label>
                    </li>

                    <li id="q4" class="question">
                        What command lets you copy files?<br/>
                        <label for="q4a"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4a"/>dl</div></label>
                        <label for="q4b"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4b"/>delete</div></label>
                        <label for="q4c"><div class="answer"><input type="radio" name = "q4" value = "t" id="q4c"/>rm</div></label>
                        <label for="q4d"><div class="answer"><input type="radio" name = "q4" value = "t" id="q4d"/>remove</div></label>
                    </li>

                    <li id="q5" class="question">
                        What command lets you delete directories?<br/>
                        <label for="q5a"><div class="answer"><input type="radio" name = "q5" value = "f" id="q5a"/>dl -dir</div></label>
                        <label for="q5b"><div class="answer"><input type="radio" name = "q5" value = "f" id="q5b"/>dldir</div></label>
                        <label for="q5c"><div class="answer"><input type="radio" name = "q5" value = "f" id="q5c"/>rm -dir</div></label>
                        <label for="q5d"><div class="answer"><input type="radio" name = "q5" value = "t" id="q5d"/>rmdir</div></label>
                    </li>

                    <li id="q6" class="question">
                        When deleting or copying directories, what option must you use in front of the directory names to make sure all directories and files inside of it are also deleted or copied?<br/>
                        <label for="q6a"><div class="answer"><input type="radio" name = "q6" value = "t" id="q6a"/>-r</div></label>
                        <label for="q6b"><div class="answer"><input type="radio" name = "q6" value = "f" id="q6b"/>-dir</div></label>
                        <label for="q6c"><div class="answer"><input type="radio" name = "q6" value = "f" id="q6c"/>-rec</div></label>
                        <label for="q6d"><div class="answer"><input type="radio" name = "q6" value = "f" id="q6d"/>-all</div></label>
                    </li>
                </ol>
                <input type="button" id= "quizSubmit" value="Check Quiz!" onclick="checkQuiz()">
            </form>
            <br/>
            <div>
                <button class="multipleChoice backButton" onclick="window.location.href='../quizzes/quiz3.html';">Go to Quiz 3: Traversing UNIX</button>
                <button class="multipleChoice nextButton" onclick="window.location.href='../quizzes/quiz5.html';">Go to Quiz 5: UNIX and File Permissions</button>
            </div>
<?php
    include $page . "assets/includes/footer.html";
?>