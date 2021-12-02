<?php $pagename = $actual_link = "$_SERVER[REQUEST_URI]"; //ex: /~csb3946/240/groupprojexp/quizzes/quiz1.php ?>
<!DOCTYPE html>
<html lang="en" <?php if(strstr($pagename, 'about') != false) { echo 'class="aboutus-main"'; }?> >
    <head>
        <meta charset="utf-8"/>
        <link rel = "stylesheet" type="text/css" href="<?php echo $page ?>assets/css/style.css" />
        <?php
            if(strstr($pagename, 'quiz') != false) { //if quiz exists in $pagename give it js
                echo '<script src="../assets/js/script.js"></script>';
            }
            if(strstr($pagename, 'about') != false) { //if about exists in $pagename give it about stylesheet
                echo '<link rel = "stylesheet" type="text/css" href="./assets/css/aboutus-style.css" />';
            }
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body <?php if(strstr($pagename, 'about') != false) { echo 'class="box-sizing-body"'; }?>>
        <header>
            <!--logo-->
            <div>
                <a href="<?php echo $page ?>index.php"> <!--direct to homepage-->
                    <img src="<?php echo $page ?>assets/images/logovert.png" alt="Cobra Tutorials Logo" class="logo">
                    <img src="<?php echo $page ?>assets/images/logohorizlq.png" alt="Cobra Tutorials Logo" class="logolq">
                </a>
            </div>
            <img src="<?php echo $page ?>assets/images/hamburger.png" alt="Cobra Tutorials Logo" class="hamburgericon">
            <!--nav-->
            <nav class="navbar">
                <a href="<?php echo $page ?>overview.php">Overview of UNIX</a>
                <div class="dropdown">
                    <button class="dropbtn">Tutorials
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="<?php echo $page ?>tutorials/tutorial1.php">Loading UNIX</a>
                        <a href="<?php echo $page ?>tutorials/tutorial2.php">UNIX Structure</a>
                        <a href="<?php echo $page ?>tutorials/tutorial3.php">Traversing UNIX</a>
                        <a href="<?php echo $page ?>tutorials/tutorial4.php">Manipulating UNIX Files and Directories</a>
                        <a href="<?php echo $page ?>tutorials/tutorial5.php">UNIX and File Permissions</a>
                        <a href="<?php echo $page ?>tutorials/tutorial6.php">Helpful Commands</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Quizzes
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="<?php echo $page ?>quizzes/quiz1.php">Loading UNIX</a>
                        <a href="<?php echo $page ?>quizzes/quiz2.php">UNIX Structure</a>
                        <a href="<?php echo $page ?>quizzes/quiz3.php">Traversing UNIX</a>
                        <a href="<?php echo $page ?>quizzes/quiz4.php">Manipulating UNIX Files and Directories</a>
                        <a href="<?php echo $page ?>quizzes/quiz5.php">UNIX and File Permissions</a>
                        <a href="<?php echo $page ?>quizzes/quiz6.php">Helpful Commands</a>
                    </div>
                </div>
                <a href="<?php echo $page ?>cheatsheet.php">Cheat Sheet</a>
                <a href="<?php echo $page ?>videos.php">Videos</a>
            </nav>
        </header> <!-- need to insert images and add paragraphs as fig captions maybe-->
        <div id="content">