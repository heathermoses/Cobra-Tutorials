<?php
    $page = "../";
    include $page . "assets/includes/header.php";
?>
            <!-- Bryce Hofstrom/Group 3, ISTE-240, 2198-->
            <h1 id="section4">Command Line Cheat Sheet</h1>
            <p>
                Need to find a specific UNIX command? Feel free to use the Command Line Cheat Sheet tables to search for your commands! Each table will be organized via their respective tutorial and will provide you with the basics of each command covered! Let's get to searching!
            </p>

            <h2 id="tablesection1">Loading UNIX</h2>
            
            <h2 id="tablesection2">UNIX Structure</h2>
        
            <h2 id="tablesection3">Traversing UNIX</h2>
            <table>
                <tr class="text-bold-table">
                    <td>Command</td>
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
            
            <h2 id="tablesection6">Helpful Commands</h2>
<?php
    include $page . "assets/includes/footer.php";
?>