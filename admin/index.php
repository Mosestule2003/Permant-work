
<?php include('partials/menu.php'); ?>

<!-- body-content -->
<div class="page-one-container move">
 <h1 class="page-one-header-text">Dashboard</h1><br>
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
                <br><br>
                <div class="content-one">
                <div class="nested one">
                <div class="nested-container">
                <div class="content-one-desc">
                <!-- <div class="col-4 text-center"> -->
                    <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM tbl_category";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>

                    <h1><?php echo $count; ?></h1>
                    <br />
                    Categories
                </div>
                </div>
                </div>

                <div class="nested one">
                <div class="nested-container">
                <div class="content-one-desc">

                    <?php 
                        //Sql Query 
                        $sql2 = "SELECT * FROM tbl_food";
                        //Execute Query
                        $res2 = mysqli_query($conn, $sql2);
                        //Count Rows
                        $count2 = mysqli_num_rows($res2);
                    ?>

                    <h1><?php echo $count2; ?></h1>
                    <br />
                    Foods
                    </div>
                    </div>
                    </div>

                    <div class="nested one">
                    <div class="nested-container">
                    <div class="content-one-desc">
                    
                    <?php 
                        //Sql Query 
                        $sql3 = "SELECT * FROM tbl_order";
                        //Execute Query
                        $res3 = mysqli_query($conn, $sql3);
                        //Count Rows
                        $count3 = mysqli_num_rows($res3);
                    ?>

                    <h1><?php echo $count3; ?></h1>
                    <br />
                    Total Orders
                    </div>
                    </div>
                    </div>

                    <div class="nested one">
                    <div class="nested-container">
                    <div class="content-one-desc">
                    
                    <?php 
                        //Creat SQL Query to Get Total Revenue Generated
                        //Aggregate Function in SQL
                        $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

                        //Execute the Query
                        $res4 = mysqli_query($conn, $sql4);

                        //Get the VAlue
                        $row4 = mysqli_fetch_assoc($res4);
                        
                        //GEt the Total REvenue
                        $total_revenue = $row4['Total'];

                    ?>

                    <h1>$<?php echo $total_revenue; ?></h1>
                    <br />
                    Revenue Generated
                </div>
                </div>
                    </div>

                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Main Content Setion Ends -->

<?php include('partials/footer.php') ?>