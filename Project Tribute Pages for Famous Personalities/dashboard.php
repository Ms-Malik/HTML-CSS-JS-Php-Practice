<?php
session_start();
if(isset($_POST["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="adminlogin.php";
        </script>
        <?php
}
include "header.php";
include "connection.php";
?>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="dashboard"><a href="dashboard.php" class="tip-bottom"><i class="icon-home"></i>
            Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">

            <div class="card" style="width:18rem; border-style: solid; border-width:1px; border-radius:10px; float:left">
            <div class="card-body">
                <h3 class="card-title text-center">Total Personalities in Army</h3>
                <h1 class="card-text text-center">
                    <?php
                    $count=0;                                       
                    $res=mysqli_query($link,"select * from army ");
                    $count=mysqli_num_rows($res);
                    echo $count;
                    ?>
                    </h1>
                </div>
            </div>

        </div>

    </div>
</div>

<!--end-main-container-part-->

<?php
include "footer.php";
?>