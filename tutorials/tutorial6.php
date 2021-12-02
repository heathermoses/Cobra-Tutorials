<?php
    $page = "../";
    include $page . "assets/includes/header.php";
?>      
            <!-- Onye Okezie/Group 3, ISTE-240, 2198-->
            <title>Helpful Commands</title>
            <h1 id="section6">Section 6: Helpful Commands</h1>
            <p>
                Video will go here
            </p>
            <div class="callout-box">
                <p>
                    Feel confident about your knowledge already? Check your understanding and take the quiz for this tutorial!
                </p>
                <button class="multipleChoice" onclick="window.location.href='../quizzes/quiz6.php';">Go to Quiz 6: Helpful Commands</button>
            </div>
			
			<div>
				<p>
					Without a doubt, the best way to learn UNIX commands is through practice and experimentation. 
					The commands and concepts you have already learned are a great starting point, but, as you dive deeper into UNIX and your web development journey, 
					the following miscellaneous commands may be extremely helpful.
				</p>
				
				<h2 id="clear">
					Clear
				</h2>
				
				<p>
					Executing commands in UNIX can quickly fill and clutter your terminal shell. An easy way to reset your terminal shell is through the clear command. 
					Clear can easily remove the outputs of previous commands, bringing your terminal to its default state. Try it out for yourself!
				</p>
				
				<img src="../assets/images/tutorial6/1_cropped.png" alt="Full Terminal Shell" class="tutimg">
				<img src="../assets/images/tutorial6/2_cropped.png" alt="Cleared Terminal Shell" class="tutimg">
				
				<p>
					Above are two terminals, the left showing a filled terminal with command outputs and the right showcasing a cleared terminal after using the clear command.
				</p>
				
				<h2 id="arrowKey">
					Up On Arrow Keys Shortcut
				</h2>
				
				<p>
					As you experiment with UNIX, using the same commands over and over will quickly become a reality. In order to save time, you can press the <span class="text-bold">up arrow key</span> “↑” to quickly cycle through commands you’ve already used. 
					This shortcut is a great tool for recalling and easily modifying any previously used commands.
				</p>
				
				<h2 id="tab">
					Tab Autocomplete
				</h2>
				
				<p>
					Another way in which you can drastically decrease the time spent typing commands is by using tab autocomplete. By using the <span class="text-bold">Tab</span> key, UNIX will automatically suggest completed command options for you. 
					Tab autocomplete becomes extremely useful when having to deal with length file, path, or directory names. For example, let’s say in the “CobraTutorials” directory, we have two files, 
					one named “This_filename_is_long.txt” and the other named “Long_this_filename_is.txt”. Instead of manually typing in these filenames, we could tab autocomplete them. 
					I could press the <span class="text-bold">T</span> key and tab to automatically fill in “This_filename_is_long.txt” in my terminal or I could press the <span class="text-bold">L</span> key and tab to automatically fill in “Long_this_filename_is.txt” in my terminal. 
					Next time you are writing commands, give tab autocomplete a try!
				</p>
				
				<h2 id="touch">
					Touch Command
				</h2>
				
				<p>
					If you ever need to create a file in UNIX, the touch command can easily do this for you. The touch command has the following syntax: touch <filename> with filename being the name of a file you want to create. 
					When using the touch command, any file you create will be empty by default. Changing a file's contents will be covered later in this tutorial. Let’s try creating a file using touch!
				</p>
				
				<img src="../assets/images/tutorial6/3_cropped.png" alt="Touch Command" class="tutimg">
				
				<p>
					In the above example, we use the touch command to create a file named “newfile.txt”. Again “newfile.txt” is empty by default but how can we check that this file is empty? 
					That’s where the next command will become useful!
				</p>
				
				<h2 id="cat">
					Cat Command
				</h2>
				
				<p>
					The cat, or concatenate command, allows a user to easily look inside files and read any data to standard terminal output. 
					Let’s say we wanted to check the contents of the file “newfile.txt” made from the previous exercise. We can do this using the following command syntax: cat <filename>. 
					Let’s give this command a try!
				</p>
				
				<img src="../assets/images/tutorial6/4_cropped.png" alt="Cat Command" class="tutimg">
				
				<p>
					In the image above, we verified that the file “newfile.txt” was indeed empty since no data was read to standard output. How could we actually edit “newfile.txt” to contain some information? 
					Well, we could use a terminal based text editor! Let’s jump to the next exercise to learn how to use some!
				</p>
			</div>
			
			<div>
				<h2 id="editors">
					Nano and Vim Text Editors
				</h2>
				
				<p>
					Two popular UNIX text editors are Nano and Vim. Both editors are very different from one another; however, no matter which editor you use, they both come equipped with the proper tools to effectively edit files. 
					To open a file in Nano, you use the command with the following syntax: nano <filename>. To open a file in Vim, you use the command with the following syntax: vim <filename>. If you use either of these commands without a filename or with a filename that does not yet exist, 
					an empty file will be created in the editor of your choice. Let’s edit “newfile.txt” from the previous exercise to actually contain some information.
				</p>
				
				<h3 id="nano">
					Editing With Nano
				</h3>
				
				<p>
					To open “newfile.txt” type in the following command: nano newfile.txt. You will be prompted with the following interface:
				</p>
				
				<img src="../assets/images/tutorial6/5_cropped.png" alt="Open Nano Text File" class="tutimg">
				
				<p>
					You can immediately begin to type Nano’s interface, editing the contents of “newfile.txt” as you see fit. 
					Nano also provides the user with plenty of shortcut options at the bottom of the interface to help them edit their files. 
					For our purposes, let’s edit “newfile.txt” to read “This file was edited with nano!”. When you want to save any changes you’ve made to the file, you can press Ctrl + o. 
					This will prompt the user with the ability to change the filename if they so choose, but, after immediately pressing the Enter key, all changes will be saved to the current file.
				</p>
				
				<img src="../assets/images/tutorial6/6_cropped.png" alt="Writing Nano Text File" class="tutimg">
				<p>In this case, nano reads “Wrote 1 line” to suggest all changes to the file have been saved.</p>
				
				<p>
					In order to exit nano, you can press Ctrl + x. Again, the user may be asked if they want to save any new changes made to the file. A user may press the Y key to save any changes or the N key to discard any changes. 
					Let’s check to see if “newfile.txt” has any new contents!
				</p>
				<img src="../assets/images/tutorial6/7_cropped.png" alt="Reading Nano Text File Using Cat" class="tutimg">
				<p>As you can see, after using the cat command, “newfile.txt” now outputs “This file was edited with nano!” to the command line. We have successfully edited a file using Nano!</p>
				
				<h3 id="vim">
					Editing With Vim
				</h3>
				
				<p>
					To open “newfile.txt”, use the following command: vim newfile.txt. You will be prompted with the following interface: 
				</p>
				<img src="../assets/images/tutorial6/8_cropped.png" alt="Opening newfile.txt Using Vim" class="tutimg">
				
				<p>
					We can see that “newfile.txt” contains “This file was edited with nano!” from the nano example. One major difference between Vim and Nano is that unlike Nano, you cannot edit a file immediately in Vim. 
					Instead, you must press the I key to enter “Insert” mode. The user can tell if they entered “Insert” mode if the button left of the interface reads “-- INSERT --”. 
					Now that we can edit the information, let’s add the line “This file was edited with vim” underneath the previously added line.
				</p>
				
				<img src="../assets/images/tutorial6/9_cropped.png" alt="Editing newfile.txt with Vim" class="tutimg">
				<p>As you can see, we have entered “Insert” mode and we have edited “newfile.txt” to contain “This file was edited with vim!”. </p>
				
				<p>
					Now that we have edited the file, we need to exit “Insert” mode. In order to do this, we can press the esc or escape key. After exiting “Insert” mode, we need to save our changes and exit the file. 
					A quick way to do this is by entering :wq. This command will write all changes to the file and quit the Vim interface. If you ever wanted to leave Vim without saving any changes, you can enter :q! to exit. 
					Let’s check to see if “newfile.txt” has any new contents!
				</p>
				<img src="../assets/images/tutorial6/10_cropped.png" alt="Reading newfile.txt Using Cat" class="tutimg">
				
				<p>
					As you can see, after using the cat command, “newfile.txt” now outputs “This file was edited with nano!” and “This file was edited with vim!” to the command line. We have successfully edited a file using Vim!
				</p>
			</div>
			
			<div>
				<h2 id="man">
					Man Command
				</h2>
				
				<p>
					UNIX is full of hundreds of case-sensitive commands. Being able to remember what each command does and all the options associated with it each command is a tall order. 
					Thankfully UNIX has a manual, or man, command. The manual command displays information regarding the functionality and purpose behind each UNIX command. It is an excellent tool to use if you ever forget what a command does. 
					The syntax for this command is man <command_name>. Let’s look at the man page for the ls command using the following command: man ls.
				</p>
				<img src="../assets/images/tutorial6/11_cropped.png" alt="Using man ls Command" class="tutimg">
				
				<p>
					This is just a small snippet of the manual for ls but, as you can see, the manual for ls describes how to use the command and what options are available to it. 
					Never be afraid to check the man pages for a UNIX command!
				</p>
			</div>
			
            <div>
                <button class="multipleChoice centerButton" onclick="window.location.href='../quizzes/quiz6.php';">Go to Quiz 6: Helpful Commands</button>
            </div>
            <div>
                <button class="multipleChoice backButton" onclick="window.location.href='tutorial5.php';">Go to Tutorial 5: UNIX and File Permissions</button>
            </div>
        </div>
<?php
    include $page . "/assets/includes/footer.php";
?>