<?php
    $page = "../";
    include $page . "assets/includes/header.php";
?>
            <!-- Heather Moses/Group 3, ISTE-240, 2198-->
            <title>Manipulating UNIX Files and Directories</title>
            <h1 id="section4">Section 4: Manipulating UNIX Files and Directories</h1>
            <div class="iframe-container">
            <iframe width="650" height="360" src="https://youtube.com/embed/XhcCMQ8hz8s" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="callout-box">
                <p>
                    Feel confident about your knowledge already? Check your understanding and take the quiz for this tutorial!
                </p>
                <button class="multipleChoice" onclick="window.location.href='../quizzes/quiz4.php';">Go to Quiz 4: Manipulating UNIX Files and Directories</button>
            </div>

            <p>
                In the last tutorial, we looked at the UNIX file system and discovered how we navigate our way through it. 
                In this section, we will learn how we can further manipulate UNIX files to our advantage with more UNIX commands!
            </p>
            <!-- moving and renaming files and directories -->
            <div>
                <!-- moving files and directories -->
                <h2 id="move">
                    Moving And Renaming Files And Directories
                </h2>
                <p>
                    On a web server, having the ability to move files from one location to another is crucial. UNIX has an easy, simple to use command to do just that. 
                    The <span class="text-bold">mv</span> or move command allows a user to take the contents of a file and transfer it to another. 
                    Additionally, the move command acts as a way for a user to rename a file while keeping its contents intact. 
                    It is important to remember that after executing the move command, the original file will be deleted. 
                    Let???s look at some examples involving the move command!
                </p>
                <p>
                    For the following examples, we will start off with three files, ???a.txt???, ???b.txt???, and ???c.txt???, as well as an empty directory named ???olddir???. 
                    All files will be located in a directory named ???CobraTutorials???.
                </p>
                <img src="../assets/images/tutorial4/1_cropped.png" alt="Starter files and directories" class="tutimg">

                <!-- moving a file -->
                <h3 id="moving">
                    Moving A File
                </h3>
                <p>
                    Imagine a user wants to move ???a.txt??? to the ???olddir??? directory. 
                    In general, the move command follows the following format: <span class="text-bold">mv &lt;source&gt; &lt;destination&gt;</span> with source referring to the file???s original location and destination referring to the new, designated file location. 
                    In order to properly move ???a.txt??? to ???olddir???, we use the following command: <span class="text-bold">mv a.txt olddir</span>. 
                    To ensure the command functioned correctly, we will use the <span class="text-bold">cat</span> command to check the contents of ???a.txt???. 
                    For our purposes, ???a.txt??? shall contain the text ???This is a.txt???. 
                </p>
                <img src="../assets/images/tutorial4/2_cropped.png" alt="Moving a file" class="tutimg">

                <!-- moving a directory -->
                <h3>
                    Moving A Directory
                </h3>
                <p>
                    Just like moving a file, moving directories is just as possible. 
                    Moving directories follows the same format of mv <span class="text-bold">&lt;source&gt; &lt;destination&gt;</span> with the only difference being we are targeting directories.
                    Following the previous example, let???s say we wanted to move the ???olddir??? directory into a new directory properly named ???newdir???. 
                    After making a ???newdir??? directory via the mkdir command, we can accomplish our goal using the following command: <span class="text-bold">mv olddir newdir</span>. 
                    Again, we can check that the command executed properly by ensuring the contents of ???olddir??? are preserved properly in ???newdir???.
                </p>
                <img src="../assets/images/tutorial4/3_cropped.png" alt="Moving a directory" class="tutimg">
                <p>
                    As you can see from the snippet above, the directory ???olddir??? is originally located in the ???CobraTutorials??? directory; however, following the move command and after entering the ???newdir??? subdirectory, you can see the ???olddir??? directory has become a subdirectory of the ???new dir??? directory. 
                    Not only that, but the contents of ???olddir??? are properly preserved within ???newdir??? via the cat command. 
                    We have successfully moved a directory!
                </p>

                <!-- renaming a file -->
                <h3>
                    Renaming A File 
                </h3>
                <p>
                    As mentioned earlier, the move command has a secondary function of renaming files. 
                    The way in which a user accomplishes this is by using the move command in the following fashion: <span class="text-bold">mv &lt;old_filename&gt; &lt;new_filename&gt;</span>. 
                    This version of the move command is exactly the same as if you were to move a file, except in this case, think of the first argument being the old filename you want to change and the new filename being the new name for the old file. 
                    For example, let's say we wanted to change ???c.txt??? to be called ???d.txt???. We can perform this by using the following command: <span class="text-bold">mv c.txt d.txt</span>. 
                    To ensure the command functioned correctly, we will use the <span class="text-bold">cat</span> command to check the contents of ???d.txt???. 
                    For our purposes, ???d.txt??? shall read <span class="text-bold">???This is c.txt???</span>. 
                </p>
                <img src="../assets/images/tutorial4/4_cropped.png" alt="Renaming a file" class="tutimg">
                <p>
                    From the above snippet, you can see that following the move command, ???c.txt??? is renamed to ???d.txt???. 
                    Despite the renaming, the contents of ???c.txt??? are preserved within ???d.txt??? showing the file was indeed renamed.
                    We have successfully renamed a file!
                </p>

                <!-- renaming a directory -->
                <h3>
                    Renaming A Directory
                </h3>
                <p>
                    The process of renaming a directory is exactly the same as renaming a file except we are now using directories. 
                    Let???s say we wanted to rename ???newdir??? to ???renameddir???. 
                    This can be easily accomplished using the following command: <span class="text-bold">mv newdir renameddir</span>. 
                    To check if the command worked, we can expect the ???renameddir??? directory to contain the ???olddir??? directory from the previous examples.
                </p>
                <img src="../assets/images/tutorial4/5_cropped.png" alt="Renaming a directory" class="tutimg">
                <p>
                    As you can see in the snippet above, following the move command, ???newdir??? is renamed to ???renameddir???. 
                    Despite the renaming, the contents of ???newdir??? are preserved within the new ???renameddir??? directory. 
                    We have successfully renamed a directory! 
                </p>
            </div>

            <!-- copying files and directories -->
            <div>
                <h2 id="copy">
                    Copying Files And Directories
                </h2>
                <p>
                    Just like moving files, being able to make copies and duplicate files on a web server may prove particularly useful. 
                    Thankfully, UNIX comes prepared with a built-in copy command or <span class="text-bold">cp</span>. 
                    Like the move command, the copy command takes the contents of one file and transfers it to another file; however, unlike the move command, the original file is not deleted. 
                    Instead, we are left with two files, an original file and a copied file, after executing the command. 
                    Let???s look at some examples involving the copy command!
                </p>

                <!-- copying a file -->
                <h3>
                    Copying A File
                </h3>
                <p>
                    In order to copy a file, a user can use the copy command with the following syntax: <span class="text-bold">cp &lt;source&gt; &lt;destination&gt;</span>. 
                    When implementing this command, think of the source as the file to be copied and the destination being where the copy is stored. 
                    Let???s say that we wanted to copy the ???b.txt??? and its contents to the file ???bcopy.txt???. 
                    This can easily be done using the command: <span class="text-bold">cp b.txt bcopy.txt</span>.
                    To ensure the command functioned correctly, we will use the <span class="text-bold">cat</span> command to check the contents of ???b.txt??? and ???bcopy.txt???. 
                    For our purposes, both these files should read <span class="text-bold">???This is b.txt???</span>.
                </p>
                <img src="../assets/images/tutorial4/6_cropped.png" alt="Copying a file" class="tutimg">
                <p>
                    As you can see from the above snippet, before using the copy command, we are left with a file named ???b.txt???. 
                    After using the copy command, the ???CobraTutorials??? directory now contains both a ???b.txt??? file and a ???bcopy.txt??? file. 
                    Both of these files also contain the same information as ???bcopy.txt??? preserves the information passed down from ???b.txt???. 
                    We have successfully copied a file!
                </p>

                <!-- copying a directory -->
                <h3>
                    Copying A Directory
                </h3>
                <p>
                    The process behind copying a directory follows the same concepts as copying a file, now we are just using directories instead. 
                    There is one major difference however and this difference involves the use of the <span class="text-bold">-r</span> or <span class="text-bold">--recursive</span> option. 
                    By adding the <span class="text-bold">-r</span> option, all files and directories present in any subdirectories will be transferred during the copy. 
                    For example, let???s say we wanted to copy the contents of the directory ???renameddir??? from earlier into a new directory named ???copydir???. 
                    This is easily achieved by using the command: <span class="text-bold">cp -r renameddir copydir</span>. 
                    The -r option is necessary as the subdirectory ???olddir??? is inside the ???renameddir??? directory from previous examples.
                    Again, we can observe the command functioned properly by observing the contents of both ???renameddir??? and ???copydir??? following command execution.
                </p>
                <img src="../assets/images/tutorial4/7_cropped.png" alt="Copying a directory" class="tutimg">
                <p>
                    As you can observe from the snippet above, before the cp command, there is only one directory named ???renameddir???. 
                    Following the copy command, we can now see two directories, ???renameddir??? and ???copydir???. 
                    Both of these directories contain the ???olddir??? directory as ???copydir??? now has the same information as ???renameddir???. 
                    We have successfully copied a directory!
                </p>
            </div>

            <!-- removing files and directories -->
            <div>
                <h2>
                    Removing Files And Directories
                </h2>
                <p>
                    Being able to remove web pages from a web server is the last essential skill needed for web developers. 
                    The remove, or rm command, can easily remove any file while the removed directory, or rmdir command, can easily remove any empty directory. 
                    Let???s look at some examples using rm and rmdir commands respectively!
                </p>

                <!-- removing files -->
                <h3 id="removeFiles">
                    Removing Files
                </h3>
                <p>
                    In order to remove a file from the UNIX file system, we can use the remove command with following syntax: <span class="text-bold">rm &lt;filename&gt;</span> with filename being the file you want to target for removal. 
                    Let???s say we want to remove the copied file we made previously: ???bcopy.txt???. 
                    This can easily be done using the command: <span class="text-bold">rm bcopy.txt</span>. 
                </p>
                <img src="../assets/images/tutorial4/8_cropped.png" alt="Removing a file" class="tutimg">
                <p>
                    As you can see from the screenshot above, before the remove command is used, the ???CobraTutorials??? directory contains a file named ???bcopy.txt???. 
                    Following the remove command however, the file is no longer inside the directory and has been subsequently removed from the file UNIX file tree.
                    We have successfully removed a file!
                </p>

                <!-- removing directories -->
                <h3 id="removeDir">
                    Removing Directories
                </h3>
                <p>
                    To remove any empty directory from a UNIX filesystem, we must use the remove directory command with the following syntax: <span class="text-bold">rmdir &lt;directory_name&gt;</span> with directory name being the target directory to be removed. 
                    If the target directory has any subfiles and/or subdirectories contained within, we must instead use the rm command and add the <span class="text-bold">-r</span> or <span class="text-bold">--recursive</span> option to ensure all the contents of the target directory are removed properly. 
                    The command is modified as such: <span class="text-bold">rm -r &lt;directory_name&gt;</span>. 
                    Let???s remove the directory we copied in the previous steps named ???copydir???. 
                    We can remove this directory using the command: <span class="text-bold">rm -r copydir</span>.
                </p>
                <img src="../assets/images/tutorial4/9_cropped.png" alt="Removing a directory" class="tutimg">
                <p>
                    As observed in the the above example, before using the remove command, we have a directory named ???copydir??? present within the ???CobraTutorials??? directory; however, following the remove command with the recursive option, all remnants of the ???copydir??? directory are deleted. 
                    We have successfully removed a directory!
                </p>
            </div>

            <div>
                <button class="multipleChoice centerButton" onclick="window.location.href='../quizzes/quiz4.php';">Go to Quiz 4: Manipulating UNIX Files and Directories</button>
            </div>
            <div>
                <button class="multipleChoice backButton" onclick="window.location.href='tutorial3.php';">Go to Tutorial 3: Traversing UNIX</button>
                <button class="multipleChoice nextButton" onclick="window.location.href='tutorial5.php';">Go to Tutorial 5: UNIX and File Permissions</button>
            </div>
<?php
    include $page . "/assets/includes/footer.php";
?>