<?php
include "header.php";
?>
<style type="text/css">
    .form-control{
          border-radius: 15px;
        background-color: #09988E;
        padding: 50px;
    }
        .form-control1{
        border-radius: 15px;
        background-color: #8A8A09;
        padding: 50px;
    }
    .card-title{
        font-family: Honey;
        font-size: 40px;
        color: white;
    }
    .btn-outline-success{
        background-color: green;
         font-size: 16px;
        color: white;
    }
    .btn-outline-warning{
        background-color: red;
         font-size: 16px;
        color: white;
    }
    h1{
        color:#540B29;
    }
</style>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><a href="home.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
           Dashboard</a>
         </div>
    </div>
    <!--End-breadcrumbs-->
    <!--Action boxes-->
    <div class="container-fluid">
        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;" align="center">
            <h1>BACK-UP | RESTORE DATABASE</h1>
            <form class="form-control">
                <form class="form-backup" action="execute/backupDatabase.php" method="POST">
                        <div class="card m-2" style="width: 18rem;">
                            <div class="card-body">
                            <h4 class="card-title">BACK-UP DATABASE</h4>
                            <br>
                            <button class="btn btn-outline-success mt-5"><span class="mdi mdi-download"></span> BACK-UP NOW</button>
                            
                            </div>
                        </div>
                    </form>
                </form>
                <br>
                <form class="form-control1">
                    <form class="form-restore" action="execute/restoreDatabase.php" method="POST">
                        <div class="card m-2" style="width: 18rem;">
                            <div class="card-body">
                            <h4 class="card-title">RESTORE DATABASE</h4>
                            <input type="file" name="file" required>
                            <br>
                            <button class="btn btn-outline-warning mt-5"><span class="mdi mdi-restore"></span> RESTORE</button>
                            </div>
                        </div>
                    </form>
                </form>
                </div>
            </div>
</div>






<?php
include "footer.php"
?>
