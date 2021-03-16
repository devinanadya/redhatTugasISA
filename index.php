<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>
<?php
require_once("database.php");
?>
<body>

  <h2>Driver</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
    </tr>
    <?php
    $sql = "SELECT * FROM driver ORDER by name ASC";
    $result = $c->query($sql);
    
      while ($obj = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $obj['id'] . '</td>';
        echo '<td>' . $obj['name'] . '</td>';
      }
    } else {
      echo "Empty table.";
      die();
    }
    ?>
  </table>

</body>

</html>