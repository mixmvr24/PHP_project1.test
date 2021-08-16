<?php
$id = $_GET['id'];
$sql =  "SELECT * FROM products WHERE id = $id";
$res = mysqli_query($connection, $sql);
$product = mysqli_fetch_assoc($res);

debug($product);


if (!empty($_POST)) {

    $data = $_POST;
    $data['price'] = (int) $data['price'];

    $allowedTypes = ['image/jpeg', 'image/png'];
    if (in_array($_FILES['image2']['type'] ?? null, $allowedTypes)) {
        $image = rand(1, 1000).$_FILES['image2']['name'];
        $to = __DIR__ . '/../../assets/img/' . $image;
        move_uploaded_file($_FILES['image2']['tmp_name'], $to);
        $data['image'] = '/assets/img/' . $image;
    }
    $data['image'] = $data['image'] ?? null;

    // update sql
    $sql = "UPDATE products SET name = '{$data['name']}', price = '{$data['price']}', image = '{$data['image']}' WHERE id = ".$_GET['id'];
    $res = mysqli_query($connection, $sql);
}

?>

<div class="container-fluid">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Название товара</label>
            <input type="text" class="form-control" name="name" value="<?=$product['name']?>">
        </div>
        <div class="form-group">
            <label>Цена товара</label>
            <input type="text" class="form-control" name="price"  value="<?=$product['price']?>">
        </div>
        <div class="form-group">
            <label>Картинка товара</label>
            <input type="file" class="form-control" name="image2"  value="">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
