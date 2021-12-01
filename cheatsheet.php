<?php
    $page = "./";
    include $page . "assets/includes/header.php";
?>
            <!-- Bryce Hofstrom/Group 3, ISTE-240, 2198-->
            <title>Command Line Cheat Sheet</title>
            <h1 id="section4">Command Line Cheat Sheet</h1>
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
                    <td><a href="tutorial1.php#loadingSSH">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>SFTP</td>
                    <td>SFTP stands for Secure File Transfer Protocol and is a service that uses SSH to provide a secure transfer between computers. SFTP clients perform virtually the same tasks as an SSH connection but SFTP clients usually have some graphical interface associated with them.</td>
                    <td><a href="tutorial1.php#loadingSFTP">Click For More Information...</a></td>
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
                    <td><a href="tutorial2.php#fileStructure">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>Process</td>
                    <td>An instance of a currently executing or running program.</td>
                    <td><a href="tutorial2.php#processes">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>File</td>
                    <td>A collection of data that takes up physical space on a PC.</td>
                    <td><a href="tutorial2.php#files">Click For More Information...</a></td>
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
                    <td><a href="tutorial3.php#ls">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>ls -a</td>
                    <td>The list command with the added -a or --all option. Will list the contents of your current working directory including hidden files.</td>
                    <td><a href="tutorial3.php#lsa">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>ls -l</td>
                    <td>The list command with the added -l or --long option. Will list the contents of your current working directory while also displaying additional information about each file including: file permissions, type, owner, owner’s group, size in bytes, last modified date and time, and filename.</td>
                    <td><a href="tutorial3.php#lsl">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>ls -la</td>
                    <td>The list command with the added -l and -a optons. Will list the contents of your current working directory while also displaying hidden files and additional file information for each file present.</td>
                    <td><a href="tutorial3.php#lsla">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>mkdir</td>
                    <td>The make directory command allows a user to make new directories and or subdirectories.</td>
                    <td><a href="tutorial3.php#mkdir">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cd</td>
                    <td>The change directory command allows a user to change their current working directory. This is representative of a user position in the UNIX file tree.</td>
                    <td><a href="tutorial3.php#cd">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cd .</td>
                    <td>The . in the cd . command is representative of your current working directory. As such, the cd . command will move a user to their current working directory.</td>
                    <td><a href="tutorial3.php#cdDot">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cd ..</td>
                    <td>The .. in the cd .. command is representative of the parent directory of your current working directory. As such, the cd .. command will move a user to their parent directory or the directory directly above the current working directory.</td>
                    <td><a href="tutorial3.php#cdDotDot">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cd ~</td>
                    <td>The ~ in the cd ~ command is representative of the users home directory. As such, the cd ~ command will move a user to their home directory.</td>
                    <td><a href="tutorial3.php#cdTilde">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cd /</td>
                    <td>The / in the cd / command is representative of the users root directory. As such, the cd / command will move a user to the root directory of the UNIX file system.</td>
                    <td><a href="tutorial3.php#cdSlash">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>pwd</td>
                    <td>The print working directory command displays the location of the current working directory strating from the root of the UNIX file tree.</td>
                    <td><a href="tutorial3.php#pathways">Click For More Information...</a></td>
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
                    <td><a href="tutorial4.php#move">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>cp</td>
                    <td>The cp of copy command allows a user to take the contents of a file or directory and duplicate it to another file.</td>
                    <td><a href="tutorial4.php#copy">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>rm</td>
                    <td>The remove or rm command allows a user to select files and certain directories and remove them from the UNIX file tree.</td>
                    <td><a href="tutorial4.php#removeFiles">Click For More Information...</a></td>
                </tr>
                <tr>
                    <td>rmdir</td>
                    <td>The rmdir or remove directory command allows a user to remove a directory with no subdirectories contained within.</td>
                    <td><a href="tutorial4.php#removeDir">Click For More Information...</a></td>
                </tr>
                
                
            </table>
            <h2 id="tablesection5">UNIX and File Permissions</h2>
            <h2 id="tablesection6">Helpful Commands</h2>
<?php
    include $page . "assets/includes/footer.php";
?>