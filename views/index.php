<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Home page <?=$myName?>
    <?php if(!isset($_SESSION['isLoggedIn'])): ?>
        <form action="/login?username=kaspar&password=123456" method="POST">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="submit">
        </form> 
    <?php else: ?>
        <a href="/logout">logout</a>
    <?php endif; ?>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
    </form> 

    <ul>
        <?php for($i=0;$i<10;$i++): ?>
        <li> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, iusto?</li>
        <?php endfor; ?>
    </ul>
</body>
</html>