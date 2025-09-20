<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
      <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <?php 
                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                    ?>
                      <form action="handelers/edit-task.php?id=<?php echo $id; ?>" method="POST" class="form border p-2 my-5">
                          <input type="text" name="title" class="form-control my-3 border border-success" placeholder="new edit todo">
                          <input type="submit" value="Edit" class="form-control btn btn-primary my-3 " placeholder="edit todo">
                      </form>
                    <?php
                    } else {
                        echo '<div class="alert alert-danger">Task ID is missing!</div>';
                    }
                    ?>
          </div>
      </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>