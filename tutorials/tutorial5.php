<?php
    $page = "../";
    include $page . "assets/includes/header.php";
?>      
            <!-- Onye Okezie/Group 3, ISTE-240, 2198-->
            <title>UNIX and File Permissions</title>
            <h1 id="section4">Section 5: UNIX and File Permissions</h1>
            <p>
                Video will go here
            </p>
            <div class="callout-box">
                <p>
                    Feel confident about your knowledge already? Check your understanding and take the quiz for this tutorial!
                </p>
                <button class="multipleChoice" onclick="window.location.href='../quizzes/quiz5.php';">Go to Quiz 5: UNIX and File Permissions</button>
            </div>
			
			<p>
				In UNIX, security for users is paramount and ultimately, preventing data corruption and unsolicited access is successfully achieved through the use of UNIX’s ownership groups and permissions. 
				Making sure your web files have proper permissions and ownerships can make or break your website's accessibility to your designated audience. 
				Let's dive into the concept of file permissions to gain a better understanding of how we properly use permissions to our advantage!
			</p>
			
			<div>
				
				<h2 id="ownership">
					File Ownership 
				</h2>
				
				<p>
					Let's begin with the concept of ownership. Each and every file in UNIX is assigned three different ownership categories. 
					These include: <span class="text-bold">user</span>, <span class="text-bold">group</span>, and <span class="text-bold">other</span>. The <span class="text-bold">user</span> group simply represents the owner of the file. By default, whoever creates the file becomes the owner. 
					The user group is often denoted by a <span class="text-bold">(u)</span>. The category named <span class="text-bold">group</span> can hold multiple different types of users. 
					With groups, all users belonging to the same group will have similar permissions when attempting to access a file. 
					Instead of changing permissions for hundreds of individual users, adding them all to the same group and changing group permissions accordingly is an effective way to manage multiple user accounts. 
					The group category is usually denoted by a <span class="text-bold">(g)</span>. Lasty, users belonging to the <span class="text-bold">other</span> group are typically thought of as “everyone else” trying to access a file, meaning, they didn’t create the file in question nor do they belong to a group who could own the file. 
					The other group is often denoted using an <span class="text-bold">(o)</span>.
				</p>
				
				<h2 id="permissions">
					File Permissions
				</h2>
				
				<p>
					With the three ownership groups discussed above, being able to limit how these groups interact with files is where the concepts of permissions come into play. 
					For each ownership group, UNIX assigns three different types of permissions: <span class="text-bold">read</span>, <span class="text-bold">write</span> and <span class="text-bold">execute</span>. 
					<span class="text-bold">Read</span> permissions give the special authority to open, and thus read, a file. For a directory, this simply entails being able to list its contents. 
					<span class="text-bold">Write</span> authorizes the modification of a file. On directories, the removal, addition, and or renaming of a file is granted. 
					Lastly, having <span class="text-bold">execute</span> permissions refers to an ownership group being granted the ability to execute a file like a script or program. 
					Like ownership categories, file permissions are sometimes denoted by specific characters with <span class="text-bold">read</span> permissions being denoted by the <span class="text-bold">(r)</span> character, <span class="text-bold">write</span> permissions being denoted by the <span class="text-bold">(w)</span> character, and <span class="text-bold">execute</span> permissions being denoted by the <span class="text-bold">(x)</span> character. 
				</p>
				
				<h2>
					File Ownership and Permissions Simplified
				</h2>
				
				<img src="../assets/images/tutorial5/1.png" alt="File Ownership and Permissions" class="tutimg">
				
				<p>
					There are three ownership types: <span class="text-bold">user(u)</span>, <span class="text-bold">group(g)</span>, and <span class="text-bold">other(o)</span>. Each ownership type contains three permissions: <span class="text-bold">read(r)</span>, <span class="text-bold">write(w)</span>, and <span class="text-bold">execute(x)</span>. 
					Each file or directory in the UNIX filesystem is assigned all three ownership types, with each type containing fields for each file permission.
				</p>
				
			</div>
			
			<div>
				<h2 id="change">
					Remember ls -l?
				</h2>
				
				<p>
					You may be asking yourself how you actually see ownership and permissions on files and directories. 
					Well, do you remember the <span class="text-bold">ls -l</span> command? This command will show file permissions in the first column as well as a plethora of useful information to know about a file. 
					While the words read, write and execute aren’t explicitly shown, they are abbreviated with <span class="text-bold">(r)</span>, <span class="text-bold">(w)</span>, and <span class="text-bold">(x)</span> respectively. In addition, the special <span class="text-bold">d</span> character is shown at the beginning of a file’s permission list to differentiate between files and directories. 
					It’s also important to note that in some places, <span class="text-bold">a -</span> is shown. This suggests that there is no permission for that specific ownership group on a file. Let’s look at an example to demonstrate this.
				</p>
				
				<img src="../assets/images/tutorial5/2_cropped.png" alt="List Ownership and Permissions" class="tutimg">
				
				<p>
					As you can see, the above image lists the information for “file.txt”. Each colored box represents a different part of the files overall permissions.
				</p>
				
				<h3 id="chpermissions">
					Changing Permissions
				</h3>
				
				<p>
					Knowing all of this about permissions and ownership groups, being able to change certain permissions is a very important tool for UNIX users, ultimately giving them total control over who and what other users can do with their files. 
					In order to change file permissions, we can use the <span class="text-bold">chmod</span> command. The chmod command has the following syntax: <span class="text-bold">chmod <permissions_to_add> <filename></span>. 
					There are two ways to change file permissions: either through <span class="text-bold">absolute</span> or <span class="text-bold">symbolic</span> mode. In absolute mode, the permissions themselves are represented not by characters, but, by three digit, octal numbers. 
					The following cheat sheet can help you understand the values associated with specific permission types.
				</p>
				
				<img src="../assets/images/tutorial5/3.png" alt="Permission Types" class="tutimg">
				
				<p>
					Let's look at some examples of chmod commands using absolute mode!
				</p>
				
				<ul>
					<h4 class="text-bold">chmod 755 file.txt</h4>					
					<ol>Gives the user ownership group read, write, and execute permissions while both group and other ownership groups only get read and execute permissions for file.txt.</ol>
					
					<h4 class="text-bold">chmod 644 file.txt</h4>
					<ol>Gives the user ownership group read and write permissions while both group and other ownership groups only get read permissions for file.txt.</ol>
					
					<h4 class="text-bold">chmod 744 file.txt</h4>
					<ol>Gives the user ownership group read, write, and execute permissions while both group and other ownership groups only get read permissions for file.txt.</ol>
				</ul>
				
				<p>
					Contrastingly, with symbolic mode, you use mathematical symbols to modify file permissions. Using the <span class="text-bold">(+)</span> character adds a permission, using the <span class="text-bold">(-)</span> character removes a permission, and a <span class="text-bold">(=)</span> character sets permissions while overriding any earlier permissions. 
					To target specific ownership groups, you can use <span class="text-bold">(u)</span>, <span class="text-bold">(g)</span>, <span class="text-bold">(o)</span>, and <span class="text-bold">(a)</span> for user, group, other, and all respectively. 
				</p>
				
				<p>
					Let's look at some examples of chmod commands using symbolic mode!
				</p>
				
				<ul>
					<h4 class="text-bold">chmod u+rw file.txt</h4>
					<ol>Gives the user ownership group read and execute permissions for file.txt</ol>
					
					<h4 class="text-bold">chmod g-x file.txt</h4>
					<ol>Removes execute permissions from group for file.txt</ol>
					
					<h4 class="text-bold">chmod o=rwx file.txt</h4>
					<ol>Sets read, write, and execute permissions are assigned to others group for file.txt.</ol>
					
					<h4 class="text-bold">chmod a+rwx file.txt</h4>
					<ol>Adds read, write, and execute permissions to user, group and other ownership groups for file.txt.</ol>
				</ul>
				
				<h3 id="chowngrp">
					Changing Owner and Group
				</h3>
				
				<p>
					As an ending note, if you ever wanted to change the direct owner of a file or group for a file, <span class="text-bold">chown</span> and <span class="text-bold">chgrp</span> will do the job. 
					chown has the following syntax: <span class="text-bold">chown <new_user> <filename></span> where <span class="text-bold"><new_user></span> is the file's new owner. 
					chgrp has a similar syntax with: <span class="text-bold">chgrp <new_group> <filename></span> where <span class="text-bold"><new_group></span> is the file's new owner group. 
					In order to execute these commands, you may need to elevate your user privileges using the <span class="text-bold">sudo</span> command before the command call. 
					For example, <span class="text-bold">sudo chown root file.txt</span>. Let’s look at an example:
				</p>
				
				<img src="../assets/images/tutorial5/4_cropped.png" alt="Changing Owner and Group" class="tutimg">
				<p>
					From the above example, we can see that after executing the both chown and chgrp commands, “file.txt” has a new user owner and group owner “root”. 
					We have successfully changed the user and group owners for a file!
				</p>
			</div>

            <div>
                <button class="multipleChoice centerButton" onclick="window.location.href='../quizzes/quiz5.php';">Go to Quiz 5: UNIX and File Permissions</button>
            </div>
            <div>
                <button class="multipleChoice backButton" onclick="window.location.href='tutorial4.php';">Go to Tutorial 4: Manipulating UNIX Files and Directories</button>
                <button class="multipleChoice nextButton" onclick="window.location.href='tutorial6.php';">Go to Tutorial 6: Helpful Commands</button>
            </div>
<?php
    include $page . "/assets/includes/footer.php";
?>


