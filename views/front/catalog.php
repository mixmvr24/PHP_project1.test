<?php
/**
 * @var $connection mysqli
 */
$sql = "SELECT * FROM products";
$res = mysqli_query($connection, $sql);
$products = mysqli_fetch_all($res, MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Homepage - List of articles</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/assets/css/styles_php.css" rel="stylesheet"/>
</head>

<body>

<?php include_once __DIR__ . "/../partials/main_menu.php" ?>
<?php include_once __DIR__ . "/../partials/header.php" ?>
<div class="container">
    <h2>Каталог товаров</h2>
</div>
<div class="container">
<?php foreach ($products as $product):?>
    <div class="product-item">
        <?php
        $image = !empty($product['image'])?$product['image']: 'https://lh3.googleusercontent.com/proxy/t_CzDqCfDdNUcAdiFYbmfSFZwGDo-FbNrah_14phmB1ITnPj-N6txYDbPEYOLxT9HOT8boazjyDdZdJA3_tJ_9Qimi2n4w';
        ?>
        <img src="<?=$image?>" alt="<?=$product['name']?>">
        <div class="product-list">
            <h3><a href="/product?id=<?=$product['id']?>"><?=$product['name']?></a></h3>
            <span class="price"><?=$product['price']?></span>
            <span class="button">В корзину</span>
        </div>
    </div>
<?php endforeach; ?>

</div>


<section class="pagination">
    <p class="pagination-num">1</p>
    <p class="pagination-num">2</p>
    <p class="pagination-num">3</p>
    <p class="pagination-num">4</p>
    <p class="pagination-num">5</p>
</section>
<?php include_once __DIR__ . '/../partials/footer.php' ?>
</body>

</html>