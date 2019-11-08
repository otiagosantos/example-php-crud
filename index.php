<?php include_once 'php_action/db_connect.php' ?>

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
    <h1 class="title-page">Task Manager</h1>

    <!-- Formulário Adicionar Task -->
    <div class="add-task">
      <form action="php_action/create.php" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" />

        <label for="priority">Priority</label>
        <input type="text" name="priority" id="priority" />

        <button type="submit" name="btn-add" class="btn">Adicionar</button>
      </form>
    </div>

    <!-- LISTA DE TASKS -->
    <div class="render-task">
      <ul>
        <?php
          $sql = "SELECT * FROM task";
          $result = mysqli_query($connect, $sql);

          while($data = mysqli_fetch_array($result)){
            echo "<li>";
              echo "<h3>"."$data[title]"."</h3>";
              echo "<span>Priority: ". "$data[priority] "."</span>";
              echo "<a href='edit.php?id=$data[id]'>Edit</a>";
              echo "<a href='php_action/delete.php?id=$data[id]'> Delete</a>";
            echo "</li>";
          }
        ?>
      </ul>
    </div>
  </div>
</body>

</html>