<?php
    include('includes/header.php');

?>
  <div class="container-fluid px-4">
            <h1 class="mt-4">Users</h1>
            <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item active">Dashboard</li>
                  <li class="breadcrumb-item ">User</li>
            </ol>

            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Registered User</h4>
                    </div>
                    <div class="card-body">
                        
     <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Roles</th>
                 
                </tr>

                <?php
                    include("../connection.php");
                    $con = connection();
                    $query = "SELECT * FROM userregister";
                    $retval = mysqli_query($con,$query);

                    if(mysqli_num_rows($retval)>0){

                        while($row = mysqli_fetch_assoc($retval)){
                            echo "<tr>";
                            echo "<td>". $row['ID']. "</td>";
                            echo "<td>". $row['regUser']. "</td>";
                            echo "<td>". $row['regPass']. "</td>";
                            ?>
                            <td>
                                <?php 
                                       if($row['role'] == 1){
                                        echo 'Admin';
                                    }
                                    elseif($row['role']== 0){
                                        echo 'User';
                                    }
                                ?>
                            </td>

                           <?php
                         
                           

                        }

                    }
                    else{
                        echo "0 result";
                    }

            ?>
    </table>

                    </div>
                </div>
                <br>
                <div class="text-center">
                       <button onclick="window.print()" class="btn btn-primary">Print</button>
                 </div>
            </div>

            </div>
<?php
  include('includes/footer.php');
  include('includes/scripts.php');
?>