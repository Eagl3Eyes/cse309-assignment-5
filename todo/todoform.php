<?php
         include("createtodo.php");
         include("edittodo.php");
         include("updatetodo.php");

        $editTask = editTaskById();
        $createTask = createTask();

        if(isset($_GET['edit-task'])) {
            $createTask = updateTaskById();

        }

?>
  <form method="post">    
    <p class="text-danger">
        <?php 
         echo $createTask['success']??'';
         echo $createTask['taskMsg']??''; 
         ?>
    </p>
 
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Add Your Task Here" name="task" value="<?php echo $editTask['task']??''; ?>">
      <button type="submit" class="btn btn-primary" name="<?php echo count($editTask)?'update':'add'; ?>"><?php echo count($editTask)?'update':'add'; ?></button>
    </div>

  </form>