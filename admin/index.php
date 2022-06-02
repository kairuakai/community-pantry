<?php
    include('includes/header.php');
    include("../connection.php");
    $con = connection();

?>
  <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Total Users
                                        
                                        <?php 
                                           
                                            $dash_register_query = "SELECT * FROM userregister";
                                            $dash_register_query_run = mysqli_query($con,$dash_register_query);
                                            if($user_total = mysqli_num_rows($dash_register_query_run)){
                                                echo '<h4 class="mb-0">'.$user_total.'</h4>';
                                            }
                                            else{
                                                echo '<h4 class="mb-0">0</h4>';
                                            }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="view-register.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Sender
                                    <?php 
                                           
                                           $dash_register_query = "SELECT * FROM sender_info";
                                           $dash_register_query_run = mysqli_query($con,$dash_register_query);
                                           if($user_total = mysqli_num_rows($dash_register_query_run)){
                                               echo '<h4 class="mb-0">'.$user_total.'</h4>';
                                           }
                                           else{
                                               echo '<h4 class="mb-0">0</h4>';
                                           }
                                       ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="view-sender.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Receiver
                                    <?php 
                                           
                                           $dash_register_query = "SELECT * FROM receiver_info";
                                           $dash_register_query_run = mysqli_query($con,$dash_register_query);
                                           if($user_total = mysqli_num_rows($dash_register_query_run)){
                                               echo '<h4 class="mb-0">'.$user_total.'</h4>';
                                           }
                                           else{
                                               echo '<h4 class="mb-0">0</h4>';
                                           }
                                       ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="view-receiver.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Distribute
                                    <?php 
                                           
                                           $dash_register_query = "SELECT * FROM approve_list";
                                           $dash_register_query_run = mysqli_query($con,$dash_register_query);
                                           if($user_total = mysqli_num_rows($dash_register_query_run)){
                                               echo '<h4 class="mb-0">'.$user_total.'</h4>';
                                           }
                                           else{
                                               echo '<h4 class="mb-0">0</h4>';
                                           }
                                       ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="approve.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>

       <!-- Get total request in Can Goods -->
        <?php
            $sql = "SELECT COUNT(*) AS Total FROM approve_list WHERE can='R-can'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $output = $row['Total'];
            }
        ?>
    <!-- Get total request in Noodles -->
        <?php
            $sql = "SELECT COUNT(*) AS Total FROM approve_list WHERE noodles='R-noodles'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $output1 = $row['Total'];
            }
        ?>

        <!-- Get total request in Drinks -->
        <?php
            $sql = "SELECT COUNT(*) AS Total FROM approve_list WHERE drinks='R-drinks'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $output2 = $row['Total'];
            }
        ?>

        <!-- Get total request in Rice -->
        <?php
            $sql = "SELECT COUNT(*) AS Total FROM approve_list WHERE rice='R-rice'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $output3 = $row['Total'];
            }
        ?>

         <!-- Get total request in Baby Food -->
         <?php
            $sql = "SELECT COUNT(*) AS Total FROM approve_list WHERE babyfood='R-bfoods'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $output4 = $row['Total'];
            }
        ?>

         <!-- Get total request in Baby Snacks -->
         <?php
            $sql = "SELECT COUNT(*) AS Total FROM approve_list WHERE snacks='R-snacks'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $output5 = $row['Total'];
            }
        ?>
         <!-- Get total request in House Hold Goods -->
         <?php
            $sql = "SELECT COUNT(*) AS Total FROM approve_list WHERE householdgoods='R-household'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $output6 = $row['Total'];
            }
        ?>

         <!-- Get total request in Hygiene -->
         <?php
            $sql = "SELECT COUNT(*) AS Total FROM approve_list WHERE hygiene='R-hygiene'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $output7 = $row['Total'];
            }
        ?>








        <!-- Get total send in Can Goods -->
        <?php
            $sql = "SELECT COUNT(*) AS Total FROM sender_info WHERE can='S-can'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $sender = $row['Total'];
            }
        ?>
    <!-- Get total send in Noodles -->
        <?php
            $sql = "SELECT COUNT(*) AS Total FROM sender_info WHERE noodles='S-noodles'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $sender1 = $row['Total'];
            }
        ?>

        <!-- Get total send in Drinks -->
        <?php
            $sql = "SELECT COUNT(*) AS Total FROM sender_info WHERE drinks='S-drinks'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $sender2 = $row['Total'];
            }
        ?>

        <!-- Get total send in Rice -->
        <?php
            $sql = "SELECT COUNT(*) AS Total FROM sender_info WHERE rice='S-rice'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $sender3 = $row['Total'];
            }
        ?>

         <!-- Get total send in Baby Food -->
         <?php
            $sql = "SELECT COUNT(*) AS Total FROM sender_info WHERE babyfood='S-bfoods'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $sender4 = $row['Total'];
            }
        ?>

         <!-- Get total send in Baby Snacks -->
         <?php
            $sql = "SELECT COUNT(*) AS Total FROM sender_info WHERE snacks='S-snacks'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $sender5 = $row['Total'];
            }
        ?>
         <!-- Get total send in House Hold Goods -->
         <?php
            $sql = "SELECT COUNT(*) AS Total FROM sender_info WHERE householdgoods='S-household'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $sender6 = $row['Total'];
            }
        ?>

         <!-- Get total send in Hygiene -->
         <?php
            $sql = "SELECT COUNT(*) AS Total FROM sender_info WHERE hygiene='S-hygiene'";
            $sql_result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($sql_result)){
                $sender7 = $row['Total'];
            }
        ?>




    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        // var data = google.visualization.arrayToDataTable([
        //   ['Task', 'Hours per Day'],
        //   ['Work',     11],
        //   ['Eat',      2],
        //   ['Commute',  2],
        //   ['Watch TV', 2],
        //   ['Sleep',    7]
        // ]);

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Can',     <?php echo $output;?>],
          ['Noodles', <?php echo $output1;?>],
          ['Drinks', <?php echo $output2;?>],
          ['Rice', <?php echo $output3;?>],
          ['Babyfood', <?php echo $output4;?>],
          ['Snacks', <?php echo $output5;?>],
          ['House Hold Goods', <?php echo $output6;?>],
          ['Hygiene', <?php echo $output7;?>],
        ]);
        var data1 = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Can',     <?php echo $sender;?>],
          ['Noodles', <?php echo $sender1;?>],
          ['Drinks', <?php echo $sender2;?>],
          ['Rice', <?php echo $sender3;?>],
          ['Babyfood', <?php echo $sender4;?>],
          ['Snacks', <?php echo $sender5;?>],
          ['House Hold Goods', <?php echo $sender6;?>],
          ['Hygiene', <?php echo $sender7;?>],
        ]);

        var options = {
          title: 'Most Request Item in Community Pantry',
          legend: 'center',
        };
        var options1 = {
          title: 'Most Send Item in Community Pantry ',
          pieHole: 0.4,

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        var chart1 = new google.visualization.PieChart(document.getElementById('donutchart'));

        chart.draw(data, options);
        chart1.draw(data1, options1);
       
      }
    </script>
    <style>
        body{
            overflow-x: hidden;
        }
    </style>


  <div id="piechart" style="width: 900px; height: 500px; position:relative; left:80vh; z-index:2;"></div>
  <div id="donutchart" style="width: 900px; height: 500px; bottom:500px; right:80px;  position:relative; z-index:1;"></div>

<?php
  include('includes/footer.php');
  include('includes/scripts.php');
?>