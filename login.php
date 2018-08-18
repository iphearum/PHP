<?php
    // function to connect and execute the query
    function findvalue($query)
    {
        $connect = mysqli_connect("localhost", "phearum", "123", "mydb");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
    /*// conditon for search the value of data
    if(isset($_POST['search']))
    {
        $tabsearch = $_POST['tabsearch'];
        $query = "SELECT * FROM users WHERE CONCAT('id', 'name', 'email', 'password') LIKE '%".$tabsearch."%'";
        $search_result = findvalue($query);
        
    }
     else {
        $query = "SELECT * FROM users";
        $search_result = findvalue($query);
    }
     //$query = "SELECT * FROM users";*/
    $query = "SELECT * FROM users";
    $search_result = findvalue($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SEARCH</title>
        <link rel="stylesheet" type="text/php" href="display.php">
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <form action="login.php" method="post">
            <!-- <input type="text" name="tabsearch" placeholder="Search"><br><br>
            <input type="submit" name="search" value="find"><br><br> -->
            
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
    </body>
</html>