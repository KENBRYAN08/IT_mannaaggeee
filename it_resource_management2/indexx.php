<!DOCTYPE html>
<html>
<head>
    <title>IT Resource Management</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px:
            text-align: left;
        }
    </style>
</head>
<body>

<h2>IT Resource Management of PHINMA Union College</h2>


<h3>Resources</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Resource Name</th>
        <th>Type</th>
        <th>Specification</th>
        <th>Status</th>
        <th>Allocated To</th>
        <th>Date Allocated</th>
    </tr>
    <?php

    $conn = new mysqli('localhost', 'root', '', 'it_resource_management');
    
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
}


   $result = $conn->query("SELECT * FROM resources");
   while ($row = $result->fetch_assoc()) {
       echo "<tr> 
           <td>{$row['id']}</td>
           <td>{$row['resource_name']}</td>
           <td>{$row['type']}</td>
           <td>{$row['specification']}</td>
           <td>{$row['status']}</td>
           <td>{$row['allocated_to']}</td>
           <td>{$row['date_allocated']}</td>
           <td>
             </td>
        </tr>";
}

   $conn->close();
   ?>
</table>
<br>
<a href="index.php">Go to admin</a>


</body>
</html>