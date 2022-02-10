<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receive List</title>
    <link rel="stylesheet" href="./css/dblist.css">
</head>
<body>
    
<h2>Receiver List</h2>

<div>
    <table>
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
             include("connection.php");
             $con = connection();
             $query = "SELECT * FROM receiver_info";
             $retval = mysqli_query($con,$query);

             if(mysqli_num_rows($retval)>0){

                while($row = mysqli_fetch_assoc($retval)){
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


                }

             }
             else{
                 echo "0 result";
             }

       ?>
    </table>
</div>

</body>
</html>