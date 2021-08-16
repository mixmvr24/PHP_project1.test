<?php
$id = $_GET['id'];
$sql =  "SELECT * FROM article WHERE id = $id";
$res = mysqli_query($connection, $sql);
$article = mysqli_fetch_assoc($res);

debug($articl);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "UPDATE article SET name = '{$_POST['name']}', content = '{$_POST['content']}'  WHERE id = ".$_GET['id'];
    $res = mysqli_query($connection, $sql);
}

?>

<div class="container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Тема статьи</label>
            <input type="text" class="form-control" name="name" value="<?=$article['name']?>">
        </div>
        <div class="form-group">
            <label>Контент</label>
            <textarea type="text" class="form-control" name="content"><?=$article['content']?></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>