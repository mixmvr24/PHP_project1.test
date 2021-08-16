<?php
$menu = [
    '/' => 'Home',
    '/blog' => 'Блог',
    '/catalog' => 'Каталог',
];
?>

<navigation class="nav">
    <div class="nav-block">
        <navigation-logo class="nav-logo">
            <a class="nav-logo-text" href="/">My Shop</a>
        </navigation-logo>
        <navigation-link class="nav-link">
            <?php foreach ($menu as $link => $item): ?>
                <a class="nav-link1" href="<?= $link ?>"><?= $item ?></a>
            <?php endforeach; ?>
            <?php if (isset($_SESSION['name'])): ?>
                <a class="nav-link1" href="/logout">Выйти</a>
            <?php else: ?>
                <a class="nav-link1" href="/login">Войти</a>
            <?php endif; ?>
        </navigation-link>
    </div>
    <navigation-button>
        <button class="nav-button">&#128722;&nbsp;Cart</button>
    </navigation-button>
</navigation>
