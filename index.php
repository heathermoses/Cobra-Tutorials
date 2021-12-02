<!-- Heather Moses/Group 3, ISTE-240, 2198-->
<!-- header -->
<?php
    $page = "./";
    include $page . "assets/includes/header.php";
?>

<title>Cobra Tutorials</title>
<!-- body -->
<!-- image source (royalty free): https://unsplash.com/photos/IgUR1iX0mqM -->
<img id ="largeHome" src="assets/images/home/large-home.jpg" alt="People working together at a computer" height="478" width="1000"/>
<h1>
    Cobra Tutorials
</h1>
<p id="introText">
    Welcome to Cobra Tutorials! We are an educational website that offers comprehensive, self-contained UNIX tutorials for web development.
    Our tutorials cover topics such as the history of UNIX, how to move around in UNIX, file permissions, and more!
    We welcome learners of all levels, from beginning-level students to teacher assistants to professors.
    We also welcome all types of learners and provide material for visual, auditory, and hands-on learners. 
    For visual learners, we have text-based tutorials that cover each topic of UNIX.
    For auditory learners, we have videos that correspond to each text-based tutorial.
    And lastly, for hands-on learners, we have quizzes to check your knowledge.
    Learn more about our website and get started below!
</p>

<div class="home-wrapper">
    <div class="visual">
        <!-- credit: https://www.flaticon.com/free-icon/witness_2210317?term=eye&page=1&position=16&page=1&position=16&related_id=2210317&origin=search# -->
        <img class="center" src="assets/images/home/eye.png" alt="Eye" height="50" width="50"/>
        <h3 class="center-text">Tutorials</h3>
        <p class="center-text">
            Are you a visual learner? Do you like to read and follow tutorials at your own pace?
            Then check out our text-based tutorials! Begin the first tutorial below.
        </p>
        <button class="multipleChoice" onclick="window.location.href='tutorials/tutorial1.php';">Go to Tutorial 1: Loading UNIX</button>
    </div>
    <div class="audio">
        <!-- credit: https://www.flaticon.com/premium-icon/headphones_527989?term=headphones&page=1&position=1&page=1&position=1&related_id=527989&origin=search# -->
        <img class="center" src="assets/images/home/headphones.png" alt="Headphones" height="50" width="50"/>
        <h3 class="center-text">Videos</h3>
        <p class="center-text">
            Are you a auditory learner? Do you prefer listening over reading or hands-on learning?
            Then check out our video tutorials! Visit our videos page below.
        </p>
        <button class="multipleChoice" onclick="window.location.href='videos.php';">Go to Videos</button>
    </div>
    <div class="quiz">
        <!-- credit: https://www.flaticon.com/free-icon/check-mark_64484?term=checkmark&page=1&position=1&page=1&position=1&related_id=64484&origin=search# -->
        <img class="center" src="assets/images/home/checkmark.png" alt="Check mark" height="50" width="50"/>
        <h3 class="center-text">Quizzes</h3>
        <p class="center-text">
            Are you already familiar with UNIX? Do you simply want to check your knowledge?
            Then check out our quizzes! Begin the first quiz below.
        </p>
        <button class="multipleChoice" onclick="window.location.href='quizzes/quiz1.php';">Go to Quiz 1: Loading UNIX</button>
    </div>
</div>

<!-- footer -->
<?php
    include $page . "/assets/includes/footer.php";
?>