<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Flatair test</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="../../style/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../../style/main.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


        <!-- Font Awesome JS -->
        <script defer src="../../js/solid.js"></script>
        <script defer src="../../js/fontawesome.js"></script>
    </head>

    <body>
        <div class="wrapper">
            <?php
                include("../../navbar.php");
            ?>

            <!-- Page Content Holder -->
            <div id="content" class="bg-light">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <h3 id="page-title">Help center</h3>
                        <p>Come here if you need help</p>
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        
                    </div>
                </nav>
                
                <div class="p-3 mb-3 bg-white rounded">
                    Page to build
                </div>
            </div>
        </div>
        <?php
            include("../../modal/login.php");
        ?>
        
        <script src="../../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../../js/popper.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/main.js"></script>
    </body>

</html>