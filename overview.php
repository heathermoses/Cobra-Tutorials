<?php
    $page = "./";
    include $page . "assets/includes/header.php";
?>     
            <!-- Bryce Hofstrom/Group 3, ISTE-240, 2198-->
            <title>Overview of UNIX</title>
            <h1 id="section4">Overview Of UNIX</h1>
            <p>
                One of the most important steps a web developer takes in producing their website is pushing their php, css, and javascript files to a web server. Web servers can organize and structure information in varying ways and, in our case, we will be exploring how a UNIX based web server operates. Here, we will explore the basics of UNIX as we lay a strong foundation for our various UNIX Tutorials to come.
            </p>
            <div>
                <h2 id="WhatIsUnix">What Is UNIX?</h2>
                <p>
                    UNIX is a <span class="text-bold">computer operating system (OS)</span>. The term operating system refers to some form of system software that literally gives a computer its functionality. In our case, this system software refers to the functionality provided to a web server. Operating systems like UNIX combine a suite of programs with slick, graphical user interfaces, or GUIs, that provide users with an easily accessible learning environment as they discover all the cool things their computers can do.    
                </p>
                <img src="assets/images/overview/1-penguin.png" alt="UNIX Penguin" class="tutimg">
            </div>
            <div>
                <h2 id="UNIXMakeup">UNIX Makeup And Specifics</h2>
                <p>
                    To further understand the specifics of the UNIX environment, we can divide it into three distinct categories: <span class="text-bold">the kernel</span>, <span class="text-bold">the shell</span>, and <span class="text-bold">the programs</span>. The diagram below can be used to visualize how these three parts utilize each other to make up the UNIX environment. 
                </p>
                <img src="assets/images/overview/2-UNIX.png" alt="Breakdown of the UNIX environment: Kernel, Shell, and Programs" class="tutimg">
                <h3 id="kernel">The Kernel</h3>
                <p>
                    <span class="text-bold">The kernel</span> is at the core of the UNIX OS. The kernel provides many of the key components vital to the operating system, accomplishing this by interacting with a computer's, and or server’s, hardware. The main kernel tasks include but are not limited to: <span class="text-bold">process</span>, <span class="text-bold">device</span>, <span class="text-bold">network</span>, and <span class="text-bold">memory management</span>. In essence, the kernel coordinates how to divide system resources amongst all of a user’s processes. 
                </p>

                <h3 id="shell">The Shell</h3>
                <p>
                    <span class="text-bold">The shell</span> acts as a command line interface (CLI) between the kernel and user. It directly <span class="text-bold">interprets user requests</span> in a way that the kernel can then understand, thus <span class="text-bold">initiating the call and startup of your chosen program</span>. The shell is where users typically spend most of their time while using UNIX and is where the most user freedom is granted. Below is an example of a UNIX shell and is where all our commands will be interpreted:
                </p>
                <img src="assets/images/overview/3_cropped.png" alt="Empty UNIX Shell" class="tutimg">
                <h3 id="programs">The Programs</h3>
                <p>
                   While the shell does allow a tremendous amount of creative freedom, none of this can be granted without the proper use of <span class="text-bold">commands</span> and <span class="text-bold">utilities</span>. UNIX employs a multitude of case sensitive commands that allow a user to accomplish a variety of tasks. <span class="text-bold">The programs</span> in this case are the UNIX commands, written and executed from the shell designed to perform some task. We will spend the majority of our time looking at the syntax and functionality behind some of these commands as we get into the various tutorials!
                </p>
            </div>
            <div>
                <button class="multipleChoice nextButton" onclick="window.location.href='tutorials/tutorial1.php';">Go to Tutorial 1: Loading UNIX</button>
            </div>
<?php
    include $page . "assets/includes/footer.php";
?>