<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Homepage - List of articles</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/assets/css/styles_php.css" rel="stylesheet" />
</head>

<body>

<?php include_once __DIR__."/../partials/main_menu.php"?>
<?php include_once __DIR__."/../partials/header.php"?>

<section class="list-php">
    <img class="list-img-php" src="/assets/img/php1.png" alt="css">
    <div class="list-php-our-text">
        <h2 class="list-title-php"> Definition and features of the PHP language</h2>
        <p class="list-text-php">PHP (/pi:. eɪtʃ. pi: / English PHP: Hypertext Preprocessor —
            "PHP: hypertext preprocessor"; originally PHP/FI (Personal Home Page / Form
            Interpreter), and later called Personal Home Page Tools[11] — "Tools for creating
            personal web pages") is a general-purpose scripting language[12], intensively used
            for developing web applications. Currently, it is supported by the vast majority of
            hosting providers and is one of the leaders among the languages used to create dynamic websites[13].
            The language and its interpreter (Zend Engine) are being developed by a group of enthusiasts as
            part of an open source project[14]. The project is distributed under its own license, which is incompatible
            with the GNU GPL.
        </p>
    </div>
</section>
<section class="list-php">
    <div class="list-php-our-text2">
        <p class="list-text-php2">DevPHP
            The pioneer in this category is the DevPHP-IDE studio, which used Kylix (Delphi) as the basis of the interface and php-cli for creating user programs.
            It included a code editor, several tools, and a visual preview of HTML pages.
            It was first introduced in 2002, now it has 3 stable versions, but development does not continue — it stopped due to the death of the main developer in a car accident.
            CodeGear Rad Studio (Extension)
            After DevPHP IDE appeared extension is a set of components for CodeGear Rad Studio 2009 on the basis of php4delphi with
            some improvements (web elements, inspector, debugger), the support for it lasted for four versions, the second of which will
            in paid extension Rad Studio 2010: was the ability to use scripts to set the style in web components, view the styles and web
            pages to build programs to run a local server, to build the software, as a standalone application and debug code. With the release
            of Delphi
        </p>
    </div>
    <img class="list-img-php" src="/assets/img/php2.jpg" alt="css">
</section>
<section class="list-php">
    <img class="list-img-php" src="/assets/img/php3.png" alt="css">
    <div class="list-php-our-text2">
        <p class="list-text-php2">DevelNext (DN)
            At the same time, the main developer of Developstudio began to create a "reincarnation" of the previous environment.
            He took the JavaFX graphics library as a basis, as a result, a completely new environment was released, with CSS support,
            but without full support for the Zend PHP library — the project was based on its own jPHP language. Its special feature is
            working on the JVM, a JIT compiler, unicode support, multithreading and an object-oriented standard library.
            In the 16th version, the Developnext environment received support for php 7, and in parallel with this, jPHP was expanded
            by an enthusiast for development under the Android OS platform.
            At the moment, the author and enthusiasts are working on the 2020 version (previously the 17th).
            PHPQt
            In 2015, Alexander Kazantsev began studying interface development algorithms and created the php_qml extension, which made it
            possible to use widgets from the QT library, but had support for only one platform — Windows.
            With this, the development of PHPQt began, the first versions did not pay much attention
        </p>
    </div>
</section>

<section class="pagination">
    <p class="pagination-num">1</p>
    <p class="pagination-num">2</p>
    <p class="pagination-num">3</p>
    <p class="pagination-num">4</p>
    <p class="pagination-num">5</p>
</section>
<?php include_once __DIR__.'/../partials/footer.php' ?>
</body>

</html>