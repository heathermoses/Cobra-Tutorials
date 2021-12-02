<?php
    $page = "./";
    include $page . "assets/includes/header.php";
?>
            <!-- Bryce Hofstrom/Group 3, ISTE-240, 2198-->
            <title>Command Line Cheat Sheet</title>
            <h1 id="clcs">Command Line Cheat Sheet</h1>
            <p>
                Need to find a specific UNIX concept or command? Feel free to use the below Cheat Sheet tables to search for your commands! Each table will be organized via their respective tutorial and will provide you with the basic concepts and commands found in each tutorial section. Let's get to searching!
            </p>

            <h2 id="tablesection1">Loading UNIX</h2>
            <table>
                <tr class="text-bold-table">
                    <td>Concept or Command</td>
                    <td>Description</td>
                    <td>Section Link</td>
                </tr>
                <tr>
                    <td>SSH</td>
                    <td>SSH stands for Secure Shell which is a protocol allowing a user to create a secure terminal connection between their PC and a remote server.</td>
                    <td><a href="tutorials/tutorial1.php#loadingSSH">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>SFTP</td>
                    <td>SFTP stands for Secure File Transfer Protocol and is a service that uses SSH to provide a secure transfer between computers. SFTP clients perform virtually the same tasks as an SSH connection but SFTP clients usually have some graphical interface associated with them.</td>
                    <td><a href="tutorials/tutorial1.php#loadingSFTP">Click For More Information...</a></td>
                </tr>
            </table>

            <h2 id="tablesection2">UNIX Structure</h2>
            <table>
                <tr class="text-bold-table">
                    <td>Concept or Command</td>
                    <td>Description</td>
                    <td>Section Link</td>
                </tr>
                <tr>
                    <td>UNIX File System</td>
                    <td>The UNIX file system revolves around a strict hierarchical structure. With the root at the top, the file structure is almost like a tree, stemming off in millions of directions, each with their own branches and pathways.</td>
                    <td><a href="tutorials/tutorial2.php#fileStructure">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>Process</td>
                    <td>An instance of a currently executing or running program.</td>
                    <td><a href="tutorials/tutorial2.php#processes">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>File</td>
                    <td>A collection of data that takes up physical space on a PC.</td>
                    <td><a href="tutorials/tutorial2.php#files">Click For More Information...</a></td>
                </tr>
            </table>
        
            <h2 id="tablesection3">Traversing UNIX</h2>
            <table>
                <tr class="text-bold-table">
                    <td>Concept or Command</td>
                    <td>Description</td>
                    <td>Section Link</td>
                </tr>
                <tr>
                    <td>ls</td>
                    <td>Known as the list command, ls will list the contents of the current working directory.</td>
                    <td><a href="tutorials/tutorial3.php#ls">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>ls -a</td>
                    <td>The list command with the added -a or --all option. Will list the contents of your current working directory including hidden files.</td>
                    <td><a href="tutorials/tutorial3.php#lsa">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>ls -l</td>
                    <td>The list command with the added -l or --long option. Will list the contents of your current working directory while also displaying additional information about each file including: file permissions, type, owner, owner’s group, size in bytes, last modified date and time, and filename.</td>
                    <td><a href="tutorials/tutorial3.php#lsl">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>ls -la</td>
                    <td>The list command with the added -l and -a optons. Will list the contents of your current working directory while also displaying hidden files and additional file information for each file present.</td>
                    <td><a href="tutorials/tutorial3.php#lsla">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>mkdir</td>
                    <td>The make directory command allows a user to make new directories and or subdirectories.</td>
                    <td><a href="tutorials/tutorial3.php#mkdir">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cd</td>
                    <td>The change directory command allows a user to change their current working directory. This is representative of a user position in the UNIX file tree.</td>
                    <td><a href="tutorials/tutorial3.php#cd">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cd .</td>
                    <td>The . in the cd . command is representative of your current working directory. As such, the cd . command will move a user to their current working directory.</td>
                    <td><a href="tutorials/tutorial3.php#cdDot">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cd ..</td>
                    <td>The .. in the cd .. command is representative of the parent directory of your current working directory. As such, the cd .. command will move a user to their parent directory or the directory directly above the current working directory.</td>
                    <td><a href="tutorials/tutorial3.php#cdDotDot">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cd ~</td>
                    <td>The ~ in the cd ~ command is representative of the users home directory. As such, the cd ~ command will move a user to their home directory.</td>
                    <td><a href="tutorials/tutorial3.php#cdTilde">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cd /</td>
                    <td>The / in the cd / command is representative of the users root directory. As such, the cd / command will move a user to the root directory of the UNIX file system.</td>
                    <td><a href="tutorials/tutorial3.php#cdSlash">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>pwd</td>
                    <td>The print working directory command displays the location of the current working directory strating from the root of the UNIX file tree.</td>
                    <td><a href="tutorials/tutorial3.php#pathways">Click For More Information...</a></td>
                </tr>
            </table>

            <h2 id="tablesection4">Manipulating UNIX Files and Directories</h2>
            <table>
                <tr class="text-bold-table">
                    <td>Concept or Command</td>
                    <td>Description</td>
                    <td>Section Link</td>
                </tr>
                <tr>
                    <td>mv</td>
                    <td>The mv or move command allows a user to move files or directories from one location to another in the UNIX file system. Additionally, the move command can be used as a way to rename such files while keeping contents intact.</td>
                    <td><a href="tutorials/tutorial4.php#move">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cp</td>
                    <td>The cp of copy command allows a user to take the contents of a file or directory and duplicate it to another file.</td>
                    <td><a href="tutorials/tutorial4.php#copy">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>rm</td>
                    <td>The remove or rm command allows a user to select files and certain directories and remove them from the UNIX file tree.</td>
                    <td><a href="tutorials/tutorial4.php#removeFiles">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>rmdir</td>
                    <td>The rmdir or remove directory command allows a user to remove a directory with no subdirectories contained within.</td>
                    <td><a href="tutorials/tutorial4.php#removeDir">Click For More Information...</a></td>
                </tr>
            </table>
            <h2 id="tablesection5">UNIX and File Permissions</h2>
            <table>
                <tr class="text-bold-table">
                    <td>Concept or Command</td>
                    <td>Description</td>
                    <td>Section Link</td>
                </tr>
                <tr>
                    <td>File Ownership</td>
                    <td>Every file or directory in UNIX is assigned three ownership categories: user, group, and other.</td>
                    <td><a href="tutorials/tutorial5.php#ownership">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>File Permissions</td>
                    <td>Each ownership group for a file or directory is assigned three permission types: read, write, and execute.</td>
                    <td><a href="tutorials/tutorial5.php#permissions">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>chmod</td>
                    <td>The chmod or change mod command is used to change a file's permissions. There are two ways to change permissions: either through absolute or symbolic modes.</td>
                    <td><a href="tutorials/tutorial5.php#chpermissions">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>chown</td>
                    <td>The chown or change ownership command is used to change a file's owner.</td>
                    <td><a href="tutorials/tutorial5.php#chowngrp">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>chgrp</td>
                    <td>The chgrp or change group command is used to change a file's ownership group.</td>
                    <td><a href="tutorials/tutorial5.php#chowngrp">Click For More Information...</a></td>
                </tr>
                
            </table>
            <h2 id="tablesection6">Helpful Commands</h2>
            <table>
                <tr class="text-bold-table">
                    <td>Concept or Command</td>
                    <td>Description</td>
                    <td>Section Link</td>
                </tr>
                <tr>
                    <td>Clear</td>
                    <td>Clear can easily remove the outputs of previous commands, thus cleaning your terminal of any commands.</td>
                    <td><a href="tutorials/tutorial6.php#clear">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>Arrow Keys Shortcut</td>
                    <td>Pressing up on the arrow key button when given a command prompt will quickly cycle through commands you’ve already used.</td>
                    <td><a href="tutorials/tutorial6.php#arrowKey">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>Tab Autocomplete</td>
                    <td>Using the Tab key when given a command prompt allows UNIX toautomatically suggest completed command options.</td>
                    <td><a href="tutorials/tutorial6.php#tab">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>Touch</td>
                    <td>The touch command can be used to create an empty file.</td>
                    <td><a href="tutorials/tutorial6.php#touch">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>Cat</td>
                    <td>The cat, or concatenate command, allows a user tolook inside files and read any data to standard terminal output.</td>
                    <td><a href="tutorials/tutorial6.php#cat">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>Nano</td>
                    <td>Nano is a UNIX text editor.</td>
                    <td><a href="tutorials/tutorial6.php#nano">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>Vim</td>
                    <td>Vim is a UNIX text editor.</td>
                    <td><a href="tutorials/tutorial6.php#vim">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>Man</td>
                    <td>The manual or man command displays information regarding the functionality and purpose of a UNIX command.</td>
                    <td><a href="tutorials/tutorial6.php#man">Click For More Information...</a></td>
                </tr>
                
            </table>
<?php
    include $page . "assets/includes/footer.php";
?>