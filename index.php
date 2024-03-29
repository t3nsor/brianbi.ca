<?php
include('router.php');
if (!empty($_GET['__internal_path'])) {
    $path = $_GET['__internal_path'];
} else {
    $path = 'about';
}
$router = new Router();
$route = $router->match($path);
if (!$route) {
    header('HTTP/1.0 404 Not Found');
    die('Page not found');
}
$script = $route[0];
$params = $route[1];
if (!in_array($script, scandir('pages'))) {
    header('HTTP/1.0 500 Internal Server Error');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="keywords" content="Brian Bi">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Brian Bi</title>
<link rel="stylesheet" type="text/css" href="/css/template.css">
</head>
<body>
<header><span class="title"><a href="/">Brian Bi</a></span></header>
<div class="t1">
<nav>
<ul>
<li><a href="/about">about</a></li>
<li><a href="/code">code</a></li>
<li><a href="/math">math</a></li>
<li><a href="/physics">physics</a></li>
<li><a href="/resume">résumé</a></li>
</ul>
</nav>
<main>
<?php include("pages/$script"); ?>
</main>
</div>
<footer>
<a href="http://validator.w3.org/check?uri=referer"><img
src="/images/html5.png" alt="Valid HTML5"/></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img
src="/images/css3.png" alt="Valid CSS3"/></a>
<a href="https://github.com/t3nsor/brianbi.ca"><img
src="/images/git.png" alt="Website source repository"/></a>
<p style="margin: 0.25em 0">The views expressed here are solely those of the
author in his private capacity and do not in any way represent the views of his
employer.</p>
</footer>
</body>
</html>
