<?php
    include('includes/header.php');

?>
  <div class="container-fluid px-4">
            <h1 class="mt-4">Report</h1>
            <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item active">Dashboard</li>
                  <li class="breadcrumb-item ">Receiver</li>
            </ol>

            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Receiver Report</h4>
                    </div>
                    <div class="card-body">
    <div class="table-responsive">

              
     <table class="table table-bordered">
     <tr>
            <th>ID</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Number of family</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Street</th>
            <th>Baranggay</th>
            <th>Can</th>
            <th>Noodles</th>
            <th>Drinks</th>
            <th>Rice</th>
            <th>Babyfood</th>
            <th>Snacks</th>
            <th>Householdgoods</th>
            <th>Hygiene</th>
        </tr>

        <?php
             include("../connection.php");
             $con = connection();
            


             $query = "SELECT * FROM receiver_info";
             $retval = mysqli_query($con,$query);

             if(mysqli_num_rows($retval)>0){

                while($row = mysqli_fetch_array($retval)){
                    echo "<tr>";
                    echo "<td>". $row['ID']. "</td>";
                    echo "<td>". $row['lastname']. "</td>";
                    echo "<td>". $row['firstname']. "</td>";
                    echo "<td>". $row['middlename']. "</td>";
                    echo "<td>". $row['numberoffamily']. "</td>";
                    echo "<td>". $row['contact']. "</td>";
                    echo "<td>". $row['email']. "</td>";
                    echo "<td>". $row['street']. "</td>";
                    echo "<td>". $row['baranggay']. "</td>";
                    echo "<td>". $row['can']. "</td>";
                    echo "<td>". $row['noodles']. "</td>";
                    echo "<td>". $row['drinks']. "</td>";
                    echo "<td>". $row['rice']. "</td>";
                    echo "<td>". $row['babyfood']. "</td>";
                    echo "<td>". $row['snacks']. "</td>";
                    echo "<td>". $row['householdgoods']. "</td>";
                    echo "<td>". $row['hygiene']. "</td>";
                    // echo "<td> <button type ='button' class='btn btn-success'>Approve</button> </td>";

                    // echo "<td><button type ='button' class='btn btn-danger'>Reject</button>  </td>";
                    ?>
                    <td>
                    <form action='receiver-apr.php' method='POST'>
                          <input type="hidden" name="id" value="<?php echo $row['ID']?>">
                          <input type="submit" name="approve" class="btn btn-success" value="Approve">
                        <!-- <button type ='submit' class='btn btn-danger' name='reject' value='<?php $row['ID']; ?>'>Reject</button>  -->
                     </form>
                     </td>

                     <td>
                      <form action='receive-rej.php' method='POST'>
                          <input type="hidden" name="id" value="<?php echo $row['ID']?>">
                          <input type="submit" name="reject" class="btn btn-danger" value="Reject">
                        <!-- <button type ='submit' class='btn btn-danger' name='reject' value='<?php $row['ID']; ?>'>Reject</button>  -->
                     </form>
                     </td>
                    <?php
             
            

                }

             }
             else{
                 echo "0 result";
             }
             
       ?>

       
        <!-- <form action='receiver-apr.php' method='POST'>
         <button type ='submit' class='btn btn-danger' name='reject' value='<?php $row['ID']; ?>'>Reject</button> 
        </form> -->
    </table>
    </div>     

   
                    </div>
                </div>
                <br>
                    <div class="text-center">
                       <button onclick="window.print()" class="btn btn-primary">Print</button>
                      </div>
            </div>

            </div>
            <div style="padding-bottom: 200px;"></div>


<?php
  include('includes/footer.php');
  include('includes/scripts.php');
?>