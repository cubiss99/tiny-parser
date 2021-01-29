<?php
if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Crawler</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .form {
        width: 400px;
        margin: 0 auto;
        position: relative;
        top: 200px;
    }

    .form label {
        margin-right: 20px;
    }
</style>

<body>
    <div class="form">
        <h1 style="text-align:center">Crawl Article</h1>
        <form method="post">

            <input type="text" name="parserUrl" placeholder="VnExpress" size="40" />
            <input type="hidden" name="type" value="VnExpress" />
            <button type="submit">Crawl</button>
        </form>
        <br>
        <form method="post">
            <input type="text" name="parserUrl" placeholder="Dân trí" size="40" />
            <input type="hidden" name="type" value="Dantri" />
            <button type="submit">Crawl</button>

        </form>
        <br>
        <form method="post">
            <input type="text" name="parserUrl" placeholder="Vietnamnet" size="40" />
            <input type="hidden" name="type" value="Vietnamnet" />
            <button type="submit">Crawl</button>

        </form>
        <a href="index.php/crawler/list" style="display:block;margin-top:20px">Xem danh sách</a>
    </div>
</body>

</html>