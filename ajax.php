<?php
//Including Database configuration file.
require("connection.php");
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $query = "SELECT video_name FROM courses WHERE video_name LIKE '%$Name%' LIMIT 5";
//Query execution
$stmt = $conn->prepare($query);
$stmt->execute();
//Creating unordered list to display result.
   echo '

   ';
   //Fetching result from database.
   while ($result = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
       ?>
   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->
   <li onclick='fill("<?php echo $result['Name']; ?>")'>
   <a>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $result[0]['video_name']; ?>
   </li ></a>
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   <?php
}}
?>
