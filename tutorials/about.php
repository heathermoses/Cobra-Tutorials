<!-- referred from https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_about_page -->
<!-- Ritvik Pandillapally/Group 3, ISTE-240, 2198-->
<?php
    $page = "../";
    include $page . "assets/includes/aboutus-header.php";
?>     
                <h1><span class="color-black">About Us Page</span></h1>
                <br/><h4>Learn More Behind the team at Cobra Tutorials!</h4>
              </div>
            <h2 id="section4">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img class="aboutus-img" src="../assets/images/aboutus/team1.jpeg" alt="Heather">
      <div class="container">
        <h2>Heather Moses</h2>
        <p class="aboutus-title">Team Leader</p>
        <p>I am a sophomore and am majoring in Software Engineering.</p>
        <p>hlm8500@rit.edu</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img class="aboutus-img" src="../assets/images/aboutus/team2.jpeg" alt="Bryce">
      <div class="container">
        <h2>Bryce Hofstrom</h2>
        <p class="aboutus-title">Content Creator/Strategist</p>
        <p>I am a sophomore and am majoring in Computing and Information Technologies.</p>
        <p>bgh3077@rit.edu</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img class="aboutus-img" src="../assets/images/aboutus/team3.jpeg" alt="Chris">
      <div class="container">
        <h2>Chris Bo</h2>
        <p class="aboutus-title">Graphic Designer</p>
        <p>I am a sophomore and am majoring in Computing and Information Technologies.</p>
        <p>csb3946@rit.edu</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="column">
      <div class="card">
        <img class="aboutus-img" src="../assets/images/aboutus/team4.jpeg" alt="Akira">
        <div class="container">
          <h2>Akira Kovacsics</h2>
          <p class="aboutus-title">Interaction Designer</p>
          <p>I am a sophomore and am majoring in Human Centered Computing.</p>
          <p>rik8091@rit.edu</p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
          <div>
        <img class="aboutus-img" src="../assets/images/aboutus/team5.png" alt="Ritvik">
    </div>
        <div class="container">
          <h2>Ritvik Pa</h2>
          <p class="aboutus-title">Information Architect</p>
          <p>I am a junior and am majoring in Computing and Information Technologies.</p>
          <p>rp4931@rit.edu</p>
        </div>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
        <img class="aboutus-img" src="../assets/images/aboutus/team6.jpeg" alt="Onye">
        <div class="container">
          <h2>Onye Okenzie</h2>
          <p class="aboutus-title">Interaction Designer</p>
          <p>I am a sophomore and am majoring in Computing and Information Technologies.</p>
          <p>ojo5312@rit.edu</p>
        </div>
      </div>
    </div>
  </div>
  <?php
    include $page . "/assets/includes/footer.php";
?>
