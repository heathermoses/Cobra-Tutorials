<?php
    $page = "../";
    include $page . "assets/includes/header.php";
?>      
            <!-- Ritvik Pandillapally/Group 3, ISTE-240, 2198-->
            <h1 id="section4">Section 2: UNIX Structure</h1>
            <div class="iframe-container">
                <iframe width="650" height="360" src="https://www.youtube.com/embed/7UagLJq951s" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="callout-box">
                <p>
                    Feel confident about your knowledge already? Check your understanding and take the quiz for this tutorial!
                </p>
                <button class="multipleChoice" onclick="window.location.href='../quizzes/quiz2.php';">Go to Quiz 2: UNIX Structure</button>
            </div>
            <p>
                Now that we have a basic understanding of what UNIX is and what we will be using UNIX for, let's dive deeper into its overarching structure. Understanding UNIX’s file structure is paramount in understanding how to properly organize your files and therefore display your webpages!
            </p>
            <div>
                <h2 id="fileStructure">The File Structure</h2>
                <p>UNIX prides itself on having a very hierarchical file structure. Think of the UNIX structure as a family tree, with millions of branching and interconnecting pathways. At the top of this tree is the root. It is here where all the branches stem. The image below shows a representation of the UNIX file structure!</p>
                <img src="../assets/images/tutorial2/fs.png" alt="File Structure Tree" class="tutimg">
            </div>
            <div>
                <h2 id="processesAndFiles">Processes and Files</h2>
                <p>In order to fully comprehend this tree-like structure, you must understand the following idea: In UNIX, everything is either a <span class="text-bold">process</span> or a <span class="text-bold">file</span>.</p>
                <p><span class="text-bold">Processes</span> refer to the instance of a currently executing program. A perfect example of this being the use of commands in the UNIX shell. Whenever you type in a UNIX command, you are executing a program to interpret and run the command you desire!</p>
                <p><span class="text-bold">Files</span> on the other hand are a collection of data. These are created using a user's preferred text editor and or compiler and take up a form of physical space on a computer's storage devices via a designated file type. Some file types include .txt, .mp3, .exe, .html, and .css files. In UNIX, directories, or folders, are considered files but they have the important job of storing and grouping other files together. In addition to this, in UNIX, all of your PC hardware components are represented as files in the system hierarchy. This way, when the UNIX system needs to communicate with some portion of your system hardware, it can through its file equivalent.</p>
                <p>Understanding everything in the UNIX file tree is initially a file or a process is your first step to realizing how simple yet powerful the UNIX environment can be. In the next chapter, we will begin to cover some basic UNIX commands so buckle up and get ready to master UNIX!</p>
            </div>
            <div>
                <button class="multipleChoice centerButton" onclick="window.location.href='../quizzes/quiz2.php';">Go to Quiz 2: UNIX Structure</button>
            </div>
            <div>
                <button class="multipleChoice backButton" onclick="window.location.href='tutorial1.php';">Go to Tutorial 1: Loading UNIX</button>
                <button class="multipleChoice nextButton" onclick="window.location.href='tutorial3.php';">Go to Tutorial 3: Traversing UNIX</button>
            </div>
<?php
    include $page . "/assets/includes/footer.php";
?>