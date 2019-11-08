<?php 
  include_once 'php_action/db_connect.php';

  if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect, $_GET['id']);
    
    $sql = "SELECT * FROM task WHERE id = '$id'";

    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($result);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <div class="task-container">
    <h1 class="title-page">Task Manager - EDIT YOUR TASK</h1>

    <!-- Formulário editar Task -->
    <div class="edit-task">
      <form action="php_action/update.php" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?php echo $data['title']; ?>" />

        <label for="priority">Priority</label>
        <input type="text" name="priority" id="priority" value="<?php echo $data['priority']; ?>" />

        <button type="submit" name="btn-edit" class="btn">Edit</button>

        <input type="hidden" name="id" value="<?php echo $data['id'];?>"/>
      </form>
    </div>
  </div>
</body>

</html>