<?php
    $page = "../";
    include $page . "assets/includes/header.html";
?>
            <h1 id="quiz6">Quiz 5: UNIX and File Permissions</h1>
            <form method="get">
                <ol>
                    <li id="q1" class="question">
                        UNIX files have three different ownership categories. What is the user category?<br/>
                        <label for="q1a"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1a"/>The person who views the file</div></label>
                        <label for="q1b"><div class="answer"><input type="radio" name = "q1" value = "f" id="q1b"/>The person who last edited the file</div></label>
                        <label for="q1c"><div class="answer"><input type="radio" name = "q1" value = "t" id="q1c"/>The person who owns the file</div></label>
                    </li>
                    
                    <li id="q2" class="question">
                        UNIX files have three different ownership categories. Other than the user group, what are the other two groups?<br/>
                        <label for="q2a"><div class="answer"><input type="radio" name = "q2" value = "t" id="q2a"/>Group, Other</div></label>
                        <label for="q2b"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2b"/>Mod, Misc</div></label>
                        <label for="q2c"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2c"/>Group, Misc</div></label>
                        <label for="q2d"><div class="answer"><input type="radio" name = "q2" value = "f" id="q2d"/>Other, Banned</div></label>
                    </li>

                    <li id="q3" class="question">
                        What are the three permissions that UNIX assigns to the ownership categories?<br/>
                        <label for="q3a"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3a"/>Edit, View, Share</div></label>
                        <label for="q3b"><div class="answer"><input type="radio" name = "q3" value = "f" id="q3b"/>Change, Execute, Delete</div></label>
                        <label for="q3c"><div class="answer"><input type="radio" name = "q3" value = "t" id="q3c"/>Read, Write, Execute</div></label>
                    </li>

                    <li id="q4" class="question">
                        What command can you use to see the permissions and ownership of a file?<br/>
                        <label for="q4a"><div class="answer"><input type="radio" name = "q4" value = "t" id="q4a"/>ls -l</div></label>
                        <label for="q4b"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4b"/>ls -v</div></label>
                        <label for="q4c"><div class="answer"><input type="radio" name = "q4" value = "f" id="q4c"/>ls -a</div></label>
                    </li>

                    <li id="q5" class="question">
                        What command can you use to change file permissions?<br/>
                        <label for="q5a"><div class="answer"><input type="radio" name = "q5" value = "f" id="q5a"/>chperm</div></label>
                        <label for="q5b"><div class="answer"><input type="radio" name = "q5" value = "t" id="q5b"/>chmod</div></label>
                        <label for="q5c"><div class="answer"><input type="radio" name = "q5" value = "f" id="q5c"/>modfile</div></label>
                        <label for="q5d"><div class="answer"><input type="radio" name = "q5" value = "f" id="q5d"/>modperm</div></label>
                    </li>

                    <li id="q6" class="question">
                        To change permissions with UNIX, how is absolute mode represented?<br/>
                        <label for="q6a"><div class="answer"><input type="radio" name = "q6" value = "t" id="q6a"/>With numbers</div></label>
                        <label for="q6b"><div class="answer"><input type="radio" name = "q6" value = "f" id="q6b"/>With letters</div></label>
                    </li>

                    <li id="q7" class="question">
                        To change permissions with UNIX, how is symbolic mode represented?<br/>
                        <label for="q7a"><div class="answer"><input type="radio" name = "q7" value = "f" id="q7a"/>With numbers</div></label>
                        <label for="q7b"><div class="answer"><input type="radio" name = "q7" value = "t" id="q7b"/>With letters</div></label>
                    </li>

                    <li id="q8" class="question">
                        What command will change the owner of a file?<br/>
                        <label for="q8a"><div class="answer"><input type="radio" name = "q8" value = "f" id="q8a"/>ch -own</div></label>
                        <label for="q8b"><div class="answer"><input type="radio" name = "q8" value = "t" id="q8b"/>chown</div></label>
                        <label for="q8c"><div class="answer"><input type="radio" name = "q8" value = "f" id="q8c"/>chowner</div></label>
                    </li>

                    <li id="q9" class="question">
                        What command will change the group of a file?<br/>
                        <label for="q9a"><div class="answer"><input type="radio" name = "q9" value = "f" id="q9a"/>ch -grp</div></label>
                        <label for="q9b"><div class="answer"><input type="radio" name = "q9" value = "f" id="q9b"/>chg</div></label>
                        <label for="q9c"><div class="answer"><input type="radio" name = "q9" value = "t" id="q9c"/>chgrp</div></label>
                    </li>
                    
                    <li id="q10" class="question">
                        What command do you need to use to elevate your user privileges in order to change a file’s owner or group?<br/>
                        <label for="q10a"><div class="answer"><input type="radio" name = "q10" value = "t" id="q10a"/>sudo</div></label>
                        <label for="q10b"><div class="answer"><input type="radio" name = "q10" value = "f" id="q10b"/>admin</div></label>
                        <label for="q10c"><div class="answer"><input type="radio" name = "q10" value = "f" id="q10c"/>elvt</div></label>
                        <label for="q10d"><div class="answer"><input type="radio" name = "q10" value = "f" id="q10d"/>override</div></label>
                    </li>
                </ol>
                <input type="button" id= "quizSubmit" value="Check Quiz!" onclick="checkQuiz()">
            </form>
            <br/>
            <div>
                <button class="multipleChoice backButton" onclick="window.location.href='../quizzes/quiz4.html';">Go to Quiz 4: Manipulating UNIX Files and Directories</button>
                <button class="multipleChoice nextButton" onclick="window.location.href='../quizzes/quiz6.html';">Go to Quiz 6: Helpful Commands</button>
            </div>
<?php
    include $page . "assets/includes/footer.html";
?>


