<nav id="sidebar">
    <div class="sidebar-header">
        <img src="../../img/logo3.png"/>
    </div>

    <ul class="list-unstyled components">
        
        <?php
        if(isset($_COOKIE["user"]))
        {

            echo "<span class='userNavBar'>";
            echo "<p>Connect as <span>".$_COOKIE["user"]."</span></p>";
            echo "<center><a href='#' id='disconnect'>Sign out</a></center>";
            echo "</span>";
        }
        else
        {
        ?>
            <li>
                <a href="#login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="glyphicon glyphicon-user"></span>Login / Sign up</a>
                
                <ul class="collapse list-unstyled" id="login">
                    <li>
                        <a href="#" data-toggle="modal" data-target="#popUpLogin">Login</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#popUpSignUp">Sign Up</a>
                    </li>
                </ul>
            </li>
        <?php
        }
        ?>
        <div class="line"></div>
        <p>Main</p>
        <li id="flatbondsPage">
            <a href="#flatbonds" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="glyphicon glyphicon-home"></span>Flatbonds</a>
            <ul class="collapse list-unstyled" id="flatbonds">
                <li>
                    <a href="../Flatbond_document/index.php">Documents</a>
                </li>
                <li>
                    <a href="../Flatbond_charge/index.php">Charges</a>
                </li>
            </ul>
        </li>
        <li id="settingsPage">
            <a href="../Settings/index.php"><span class="glyphicon glyphicon-cog"></span>Settings</a>
        </li>
        <li id="organisationPage">
            <a href="../Organisation/index.php"><span class="glyphicon glyphicon-asterisk"></span>Organisation</a>
        </li >
         <div class="line"></div>
        <p>Help</p>
        <li id="documentCenterPage"> 
            <a href="../DocumentCenter/index.php"><span class="glyphicon glyphicon-download-alt"></span>Document center</a>
        </li>
        <li id="helpCenterPage">
            <a href="../HelpCenter/index.php"><span class="glyphicon glyphicon-question-sign"></span>Help center</a>
        </li>
    </ul>
</nav>