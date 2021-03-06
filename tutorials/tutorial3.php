<?php
    $page = "../";
    include $page . "assets/includes/header.php";
?>            
            <!-- Chris Bo/Group 3, ISTE-240, 2198-->
            <title>Traversing Unix</title>
            <h1 id="section3">Section 3: Traversing UNIX</h1>
            <div class="iframe-container">
            <iframe width="650" height="360" src="https://www.youtube.com/embed/XjA-Qszel_E" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="callout-box">
                <p>
                    Feel confident about your knowledge already? Check your understanding and take the quiz for this tutorial!
                </p>
                <button class="multipleChoice" onclick="window.location.href='../quizzes/quiz3.php';">Go to Quiz 3: Traversing UNIX</button>
            </div>
            <p>
                Let's finally get into some of the bread and butter of UNIX commands. In this tutorial, we will introduce the basics behind the <span class="text-bold">ls</span>, <span class="text-bold">mkdir</span>, <span class="text-bold">cd</span>, and <span class="text-bold">pwd</span> commands. These commands are key to movement around UNIX structure and will allow you to organize and move your files effectively on a web server! 
            </p>
            <div>
                <h2 id="ls">The ls Command</h2>
                <p>
                    The <span class="text-bold">ls</span> or <span class="text-bold">list</span> command allows you to list the contents of your current working directory. Being able to see exactly what items are present in what areas is the first step in properly organizing your website. Let's take at the following example:
                </p>
                <img src="../assets/images/tutorial3/1-ls.png" alt="ls example" class="tutimg">
                <p>
                    Here, we are listing the contents of a directory named “CobraTutorials”. Inside, you can see a number of directories and files, each with unique filenames. This being a UNIX system, upon startup, the current working directory is set to a user's home directory. The <span class="text-bold">home directory</span> is denoted by the tilde or the <span class="text-bold">“~”</span> sign. From the standpoint of the above example, the “CobraTutorials” directory is a subdirectory of the “~” directory, an idea that will become more important as we begin to discuss pathing in UNIX. For now, understand that we are listing the contents of “CobraTutorials”. Since the ls command lists all items in a directory, what would happen if the “CobraTutorials” directory was empty? Let’s test it out!
                </p>
                <img src="../assets/images/tutorial3/2-ls_empty.png" alt="ls example with no words" class="tutimg">
                <p>
                    As you can see, if the “CobraTutorials” directory was empty, we would see another command line prompt, suggesting an empty directory.
                </p>
            </div>
            <div>
                <h2 id="lsFlags">ls -a, ls -l, and ls -la</h2>
                <p>
                    The ls command has many options that can change its functionality. <span class="text-bold">An option</span>, also called a flag or switch, is a series of characters that can modify the behavior of a command. The ls command has many options however, for the purposes of this tutorial, there are two key options to memorize, these being the <span class="text-bold">-l</span> and <span class="text-bold">-a</span> options.
                </p>
                <h3 id="lsa">ls -a</h3>
                <p>
                    In the UNIX system, many files are hidden. These hidden files often contain vital configuration information for a given directory and it is usually a good idea to refrain from editing any part of these files. Identifying these hidden files is very simple as they are always characterized by a <span class="text-bold">"."</span> in front of their filenames. In order to display these hidden files, the <span class="text-bold">-a</span> or <span class="text-bold">--all</span> option can be added to the ls command. Let’s see an example of the <span class="text-bold">ls -a</span> command in action!
                </p>
                <img src="../assets/images/tutorial3/3-ls-a.png" alt="ls -a example" class="tutimg">
                <p>
                    As you can see, the ls -a command produces a similar output to the ls command; however, the ls -a command reveals the hidden files present in the “CobraTutorials” directory, these files being “.”, “..” and “.hidden.txt”.
                </p>
                <h3 id="lsl">ls -l </h3>
                <p>
                    When listing files, the ls command only shows its filename; however, every file and directory has other important information contained within. In order to reveal this information, you can add the <span class="text-bold">-l</span> or <span class="text-bold">--long</span> option to the ls command. Let’s see an example of the <span class="text-bold">ls -l</span> command!
                </p>
                <img src="../assets/images/tutorial3/4-ls-l.png" alt="ls -l example" class="tutimg">
                <p>
                    As you can see, when compared to the normal ls command, <span class="text-bold">ls -l</span> displays a plethora of useful information about a file such as current file permissions, type, owner, owner’s group, size in bytes, last modified date and time, and filename. File permissions are huge in UNIX and will be expanded upon in later tutorials.
                </p>
                <h3 id="lsla">ls -la</h3>
                <p>
                    What’s interesting about UNIX commands and their available options is that they can be combined together to produce a more specific output. For example, you can combine the -a and -l options into one command: <span class="text-bold">ls -la</span>. The below example shows the ls -la command displaying the contents of the “CobraTutorials”, all hidden files, and all additional file information for its contents.
                </p>
                <img src="../assets/images/tutorial3/5-ls-la.png" alt="ls -la example" class="tutimg">
            </div>
            <div>
                <h2 id="mkdir">The mkdir Command</h2>
                <p>
                    The <span class="text-bold">mkdir</span>, or <span class="text-bold">make directory command</span>, allows users to make new directories or subdirectories. A directory can be thought of as a folder, holding all your data, whether it be files, other directories, or a combination of the two. Making sure your webpages are properly organized is essential in web development and creating directories is a step in achieving this goal. Let’s make a new directory using this command.
                    In this example, a new subdirectory named “testdir4” is made inside the current “CobraTutorials” directory.
                </p>
                <img src="../assets/images/tutorial3/6-mkdir.png" alt="mkdir example" class="tutimg">
            </div>
            <div>
                <h2 id="cd">Moving Between Directories Using cd</h2>
                <p>
                    The <span class="text-bold">cd</span> or <span class="text-bold">change directory</span> command allows you to change your current working directory or position in the expansive UNIX file tree. Let’s test out the cd command by moving into the directory “testdir4” we made in the previous example. The command below has moved us into the “testdir4” directory.
                </p>
                <img src="../assets/images/tutorial3/7-cd.png" alt="cd example" class="tutimg">
                <h3 id="cdDot">cd .</h3>
                <p>
                    When using the cd command, there are a couple of unique characters that can be used to represent specific directories in UNIX. The <span class="text-bold">"."</span> character represents the current directory you are in. <span class="text-bold">The cd .</span> command will move you to your current working directory. The example below shows the cd . command in action and, as expected, it will keep the user in the current working directory.
                </p>
                <img src="../assets/images/tutorial3/8-cd..png" alt="cd. example" class="tutimg">
                <h3 id="cdDotDot">cd ..</h3>
                <p>
                    The <span class="text-bold">".."</span> characters represent the parent directory of your current working directory, this being the directory directly above your current level. Using <span class="text-bold">cd ..</span> will move you up one directory in the overall hierarchy. As you can see by the example below, the current working directory changes from “testdir4” to “CobraTutorials”.
                </p>
                <img src="../assets/images/tutorial3/9-cd_..png" alt="cd.. example" class="tutimg">
                <h3 id="cdTilde">cd ~ and cd /</h3>
                <p>
                    Knowing what . and .. represent, it's important to note using cd by itself, with no subsequent argument, will take you back to the home directory "~". This can also be accomplished using <span class="text-bold">cd ~</span>.
                </p>
                <img src="../assets/images/tutorial3/10-cd_empty.png" alt="cd empty example" class="tutimg">
                <br/>
                <img src="../assets/images/tutorial3/11-cd~.png" alt="cd ~ example" class="tutimg">
                <p id="cdSlash">
                    Furthemore, with <span class="text-bold">"/"</span> depicting the <span class="text-bold">root directory</span>, using <span class="text-bold">cd /</span> will take you back to the root directory.
                </p>
                <img src="../assets/images/tutorial3/12-cd_.png" alt="cd / example" class="tutimg">
            </div>
            <div>
                <h2 id="pathways">Pathways And Pathing</h2>
                <p>
                    The <span class="text-bold">pwd</span> or <span class="text-bold">print working directory</span> command will display your current working directory starting from the root “/” of the UNIX hierarchy. Because the pwd command begins with the root directory, we call this path the absolute path. Below is the absolute path for the “CobraTutorials" directory. This path translates to the following: from the root, enter the home directory, "~", of a user named "student". From the "student" home directory, enter the “CobraTutorials” directory.
                </p>
                <img src="../assets/images/tutorial3/13-pwd.png" alt="pwd example" class="tutimg">
                <p>
                    <span class="text-bold">The absolute path</span> for a file ALWAYS begins with the “/” directory. If this is not the case, we are dealing with a relative path. Instead of beginning with the root directory, <span class="text-bold">relative file paths</span> always begin with your current working directory and never the root. Let’s say that our current working directory is the “CobraTutorials” directory and we want to move into the subdirectory "testdir4". We can use the cd command and either the absolute or relative path to accomplish this.
                </p>
                <img src="../assets/images/tutorial3/14-cd_absolute.png" alt="cd absolute path example" class="tutimg">
                <p>
                    The above example shows how we could move to “testdir4” using an absolute path.
                </p>
                <img src="../assets/images/tutorial3/15-testdir4_relative.png" alt="navigating to testdir4 using the absolute path" class="tutimg">
                <p>
                    The above example shows how we could move to “testdir4” using a relative path.
                </p>
                <p>
                    If you have not realized, all the commands used throughout this tutorial have been applied with relative pathing in mind. When we utilized the ls, mkdir, and cd commands, we did so knowing what our current working directory’s relative path was. Not once did we use a file or directory’s absolute path. Having said this, for web development, getting comfortable using relative pathing is not a bad idea. While absolute paths and relative paths can both point to the same areas of the UNIX tree, absolute pathing will restrict your web pages from being fully accessible by anyone other than yourself. Refraining from absolute paths will ensure all pathing links work not only on your localhost PC, but on your web domain as well.
                </p>
                <p>
                    The following are examples showing how to list a directory and make a directory using absolute pathing.
                </p>
                <p>
                    Listing the “CobraTutorials” directory:
                </p>
                <img src="../assets/images/tutorial3/16-ls_absolute.png" alt="ls using an absolute path" class="tutimg">
                <p>
                    Making the “testdir4” directory:
                </p>
                <img src="../assets/images/tutorial3/17-mkdir_absolute.png" alt="mkdir using an absolute path" class="tutimg">
            </div>
	        <br><br>
            <div>
                <button class="multipleChoice centerButton" onclick="window.location.href='../quizzes/quiz3.php';">Go to Quiz 3: Traversing UNIX</button>
            </div>
            <div>
                <button class="multipleChoice backButton" onclick="window.location.href='tutorial2.php';">Go to Tutorial 2: UNIX Structure</button>
                <button class="multipleChoice nextButton" onclick="window.location.href='tutorial4.php';">Go to Tutorial 4: Manipulating UNIX Files and Directories</button>
            </div>
<?php
    include $page . "assets/includes/footer.php";
?>
