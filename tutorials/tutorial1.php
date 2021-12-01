<?php
    $page = "../";
    include $page . "assets/includes/header.php";
?>      
            <!-- Ritvik Pandillapally/Group 3, ISTE-240, 2198-->
            <title>Loading UNIX</title>
            <h1 id="section1">Section 1: Loading UNIX</h1>
            <div class="callout-box">
                <p>
                    Feel confident about your knowledge already? Check your understanding and take the quiz for this tutorial!
                </p>
                <button class="multipleChoice" onclick="window.location.href='../quizzes/quiz1.php';">Go to Quiz 1: Loading UNIX</button>
            </div>
            <p>Now that we have a basic understanding of what UNIX is, we need to touch upon how we can access UNIX in the first place! Our main way of connecting to a UNIX system will be through SSH and SFTP. This will be how we upload and manage our newly created html, css, and javascript files. What exactly is SSH and SFTP anyway?</p>
            <div>
                <h2 id="loadingSSH">Loading UNIX Using SSH</h2>
                <p>SSH stands for Secure Shell. As the name suggests, SSH utilization allows a user to create a secure terminal connection between their computer and typically, a remote server. It is this remote server that will host and display your websites! We will go over how to establish a SSH connection on both Mac and Windows systems.</p>
            </div>
            <div>
                <h2 id="macSSH">Mac and SSH</h2>
                <p>On a Mac system, opening the built-in <span class="text-bold">terminal</span> application is your first step. Here, we will be able to enter the necessary command to establish a SSH connection. Below is what the terminal application should look like:</p>
                <img src="../assets/images/tutorial1/image5.png" alt="Mac and SSH" class="tutimg">
                <p>Inside the newly opened terminal, we need to type in the following command with the following syntax: <span class="text-bold">ssh username@server_name</span>. In our case, <span class="text-bold">username</span> is the account name native to the server you are trying to connect to and <span class="text-bold">server_name</span> is either the name of the server you wish to connect to or its ip address. For this example, we will be connecting to the server banjo@rit.edu which is based upon a UNIX file structure. After entering in your user credentials, your terminal should look something like: </p>
                <img src="../assets/images/tutorial1/image4.png" alt="Mac and SSH" class="tutimg">
                <p>After pressing the <span class="text-bold">enter</span> key, assuming a server exists and your user credentials are proper, you will be greeted with a message and a password field. Upon entering your user password, congratulations! You have successfully established an SSH connection with banjo@rit.edu! </p>
                <img src="../assets/images/tutorial1/image6.png" alt="Mac and SSH" class="tutimg">
                <p>As an ending note, whenever you wish to end your SSH connection, simply enter <span class="text-bold">exit</span> into your terminal. This will successfully kill the SSH connection.</p>
                <img src="../assets/images/tutorial1/image3.png" alt="Mac and SSH" class="tutimg">
            </div>
            <div>
                <h2 id="winSSH">Windows and SSH</h2>
                <p>On a Windows system, there is a somewhat greater level of freedom when choosing the application to open an SSH connection with. The <span class="text-bold">Command Prompt</span>, <span class="text-bold">PuTTY</span>, and <span class="text-bold">PowerShell</span> applications all allow a user to establish such an SSH connetion. Below is what each application looks like respectively:</p>
                <img src="../assets/images/tutorial1/image5win.png" alt="Windows and SSH" class="tutimg">
                <br/>
                <img src="../assets/images/tutorial1/image5putty.png" alt="Windows and SSH" class="tutimg">
                <br/>
                <img src="../assets/images/tutorial1/image5power.png" alt="Windows and SSH" class="tutimg">
                <p>Each and every option above will allow you to establish an SSH connection; however, for the sake of this instruction, we will be using the <span class="text-bold">Command Prompt</span> windows application. To begin, in a newly opened shell, we need to type in the following command with the following syntax: <span class="text-bold">ssh username@server_name</span>. In our case, <span class="text-bold">username</span> is the account name native to the server you are trying to connect to and <span class="text-bold">server_name</span> is either the name of the server you wish to connect to or its ip address. For this example, we will be connecting to the server banjo@rit.edu which is based upon a UNIX file structure. After entering in your user credentials, your terminal should look something like: </p>
                <img src="../assets/images/tutorial1/image4win.png" alt="Windows and SSH" class="tutimg">
                <p>After pressing the <span class="text-bold">enter</span> key, assuming a server exists and your user credentials are proper, you will be greeted with a message and a password field. Upon entering your user password, congratulations! You have successfully established an SSH connection with banjo@rit.edu! </p>
                <img src="../assets/images/tutorial1/image6win.png" alt="Windows and SSH" class="tutimg">
                <p>To conclude, whenever you wish to end your SSH connection, simply enter <span class="text-bold">exit</span> into your terminal. This will successfully kill the SSH connection.</p>
                <img src="../assets/images/tutorial1/image3win.png" alt="Windows and SSH" class="tutimg">
            </div>
            <div>
                <h2 id="loadingSFTP">Loading UNIX Using SFTP</h2>
                <p>SFTP stands for Secure File Transfer Protocol and is a service that uses SSH to provide a secure transfer between computers. Because it relies on SSH, SFTP clients perform virtually the same tasks as SSH connections; however, SFTP clients usually have some form of user interface associated with them. Clients like <span class="text-bold">Fetch</span> and <span class="text-bold">FileZilla</span> are two great examples of SFTP clients!</p>
            </div>
            <div>
                <h2 id="establishSFTP">Establishing SFTP With FileZilla</h2>
                <p>As mentioned earlier, <span class="text-bold">FileZilla</span> is an SFTP client, allowing a user to establish a secure connection with a remote server. Here, we will illustrate how to connect to the <span class="text-bold">banjo.rit.edu</span> server using FileZilla. </p>
                <img src="../assets/images/tutorial1/image7.png" alt="Windows and SFTP" class="tutimg">
                <p>Above is the FileZilla user interface. Unlike the terminal application earlier, FileZilla gives the user a pleasant user interface to work with. At the top of the FileZilla application, you may notice the <span class="text-bold">“Host”, “Username”, “Password”, and “Port”</span> fields. In order to establish a connection, we need to fill in the proper information into these fields. The host field is the server you are trying to connect to with the username attached at the front. In our case, this is very similar to what we typed to establish a terminal SSH connection: <span class="text-bold"><username>@banjo.rit.edu</span>. The username field is the username you are trying to connect to the server with. It is the same username from the host field. The password field is the password associated with the username in the username field. Lastly, is the port field. By default, when establishing an SSH connection, the SSH protocol uses TCP port 22. Without getting too much into unnecessary detail, remember that we must establish our SSH connection on port 22. At this point, the fields should look something like this:</p>
                <img src="../assets/images/tutorial1/image1.png" alt="Windows and SFTP" class="tutimg">
                <p>Upon pressing the <span class="text-bold">“Quickconnect”</span> button, you should see the FileZilla application change the right hand portion of its interface to accommodate for the newly established SSH connection.</p>
                <img src="../assets/images/tutorial1/image2.png" alt="Windows and SFTP" class="tutimg">
                <p>If the contents of your FileZilla application has changed, congratulations! You have successfully established an SSH connection through an SFTP application! As an ending note, if you ever need to end your SSH connection, you can always press the server icon with a red “x” in the navigation bar of the FileZilla client.</p>
                <p>Being able to connect to a remote server via a SSH connection is a massive step to managing the upload and management of your websites. In the next tutorial, we will learn just how important understanding the UNIX file structure is while you are structuring your webpages!</p>
            </div>
            <div>
                <button class="multipleChoice centerButton" onclick="window.location.href='../quizzes/quiz1.php';">Go to Quiz 1: Loading UNIX</button>
            </div>
            <div>
                <button class="multipleChoice nextButton" onclick="window.location.href='tutorial2.php';">Go to Tutorial 2: UNIX Structure</button>
            </div>
<?php
    include $page . "/assets/includes/footer.php";
?>


