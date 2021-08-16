<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $sql = "INSERT INTO article (name, content) VALUES ('{$_POST['name']}', '{$_POST['content']}')";
    $res = mysqli_query($connection, $sql);
}

?>

<div class="container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Тема статьи</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Контент</label>
            <textarea class="form-control" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
