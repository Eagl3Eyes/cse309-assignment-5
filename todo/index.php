<!DOCTYPE html>
<html lang="en">

<head>
  <title>Assignment 4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

  <div class="container my-5">

    <h2>To Do List</h2>

    <div class="row">
      <div class="col-sm-12">
        <?php
        include("database.php");
        include("deletetodo.php");
        include("todoform.php");
        include("todolist.php");
        ?>

      </div>
    </div>

</body>

</html>