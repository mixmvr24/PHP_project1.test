<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Homepage - List of articles</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/assets/css/styles_blog.css" rel="stylesheet" />
</head>

<body>

<?php include_once __DIR__.'/../partials/main_menu.php'?>
<?php include_once __DIR__.'/../partials/header.php'?>

    <section class="list">
        <a href="./index_php.html">
            <img class="list-img" src="/assets/img/css.jpg" alt="css">
        </a>
        <a href="./index_php.html">
            <h2 class="list-title">CSS Basics</h2>
        </a>
        <p class="list-text">CSS (Cascading Style Sheets) — style sheet language,
            which allows you to attach a style (for example, fonts and color) to
            structured documents (for example, HTML documents and XML applications).
        </p>
        <a href="#">Read</a>
    </section>
    <section class="list">
        <a href="./index_php.html">
            <img class="list-img" src="/assets/img/html.jpg" alt="css">
        </a>
        <a href="./index_php.html">
            <h2 class="list-title">What is HTML really?</h2>
        </a>
        <p class="list-text">HTML (Hypertext Markup Language) is the code that is used
            to structure and display a web page and its content. For example, content
            can be structured within multiple paragraphs, bulleted lists, or using images
            and data tables. As the name suggests, this article will give you a basic
            understanding of HTML and its functions.
        </p>
        <a href="#">Read</a>
    </section>
    <section class="list">
        <a href="./index_php.html">
            <img class="list-img" src="/assets/img/JS.png" alt="css">
        </a>
        <a href="./index_php.html">
            <h2 class="list-title">Modern JavaScript Tutorial</h2>
        </a>
        <p class="list-text">JavaScript® (often just JS) is a lightweight, interpreted or
            JIT-compiled, object-oriented language with first-class functions. It is most
            widely used as a scripting language for web pages, but it is also used in other
            software products, for example, node.js or Apache CouchDB. JavaScript is a
            prototype-oriented, multi-paradigm language with dynamic typing that supports
            object-oriented, imperative and declarative (for example, functional programming)
            programming styles. Learn more about JavaScript.
        </p>
        <a href="#">Read</a>
    </section>
    <section class="list">
        <a href="./index_php.html">
            <img class="list-img" src="/assets/img/php.jpg" alt="css">
        </a>
        <a href="./index_php.html">
            <h2 class="list-title"> Definition and features of the PHP language</h2>
        </a>
        <p class="list-text">PHP (/pi:. eɪtʃ. pi: / English PHP: Hypertext Preprocessor —
            "PHP: hypertext preprocessor"; originally PHP/FI (Personal Home Page / Form
            Interpreter), and later called Personal Home Page Tools[11] — "Tools for creating
            personal web pages") is a general-purpose scripting language[12], intensively used
            for developing web applications. Currently, it is supported by the vast majority of
            hosting providers and is one of the leaders among the languages used to create dynamic websites[13].
            The language and its interpreter (Zend Engine) are being developed by a group of enthusiasts as
            part of an open source project[14]. The project is distributed under its own license, which is incompatible
            with the GNU GPL.
        </p>
        <a href="#">Read</a>
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