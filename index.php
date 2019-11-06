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
    <div class="render-task"></div>




  </div>

  

</body>

</html>