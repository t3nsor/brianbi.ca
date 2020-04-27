<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Link echo service (suppresses thumbnails)</title>
</head>
<body>
<p>Click to go to <a href="<?=htmlspecialchars($_GET['url'])?>"><?=
htmlspecialchars($_GET['url'])?></a></p>
<form action="<?=htmlspecialchars($_SERVER['SCRIPT_NAME'])?>" method="get">
<p>Enter a url here to generate a link like this one:
<input type="text" name="url"><input type="submit" value="Generate!"></p>
</form>
</body>
</html>
