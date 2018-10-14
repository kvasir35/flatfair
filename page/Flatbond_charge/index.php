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
        <script src="../../js/solid.js"></script>
        <script src="../../js/fontawesome.js"></script>
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

                        <h3 id="page-title">Submit charges</h3>
                        <p>Please enter each individual claim. If you are experiented any issue use web chat</p>
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </nav>
                
                <?php
                if(isset($_GET['hiddenDocument']))
                {
                ?>
                <span id="alertDiv"></span>
                
                <div class="p-3 mb-3 bg-white rounded">
                    <h4>Claim manager</h4>
                    <button href="#" data-toggle="modal" data-target="#popUpAddClaim">+ Add claim</button>
                </div>
                
                <table class="table table-striped" id="tableClaim">
                    <thead>
                        <tr>
                          <th scope="col">Categorie</th>
                          <th scope="col">Description</th>
                          <th scope="col">Ammount</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                    </thead>
                </table>
                <?php
                }
                else
                {
                    echo "<span id='alertDiv'><div class='alert alert-danger' role='alert' id='alertSuccess'>You need to add the documents first : <a href='../Flatbond_document/index.php'>Documents</a></div></span>";
                }
                ?>
            </div>
        </div>
        <?php
            include("../../modal/login.php");
            include("../../modal/addClaim.php");
        ?>
        
        <script src="../../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../../js/popper.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/main.js"></script>
        <script src="script.js"></script>
    </body>
</html>