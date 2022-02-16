<?php
    require 'config.php';

    if (!empty($_SESSION["id"])){
        $id = $_SESSION["id"];
        $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
        
    }else{
        header("Location: login.php");
    }



    if(isset($_POST["submit"])){
        $task = $_POST['task'];
        mysqli_query($conn, "INSERT INTO tb_task value ('','$task')");
        header('Location: index.php');
    }
    $tasks = mysqli_query($conn, "SELECT * FROM tb_task");
    // delate task
    if (isset($_GET['del_task'])){
        $id = $_GET['del_task'];
        mysqli_query($conn, "DELETE FROM tb_task WHERE id= $id");
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Index</title>
</head>
<body>
    <div class="todo">
        <h1>Welcome <?php echo $row["name"]; ?></h1>
        <form action="index.php" method="post">
            <input type="text" name = "task" placeholder="Enter a task" require>
            <button class="btn_add" type="submit" name="submit">Add Task</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th style="width: 80px;">STT</th>
                    <th style="width: 400px;">Task</th>
                    <th style="width: 120px;" >Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=1; while ($row=mysqli_fetch_array($tasks)){ ?>
                <tr> 
                    <td><?php echo $i; ?></td>
                    <td class="task"><?php echo $row['task']; ?></td>
                    <td class="delete">
                        <a href="index.php?del_task=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php $i++;} ?>

            </tbody>
        </table>
        <div class="div_linkLogout">
            <a class="link_logout" href="logout.php"> Logout</a>

        </div>
    </div>
</body>
</html>