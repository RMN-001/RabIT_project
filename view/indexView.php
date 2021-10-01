<!DOCTYPE html>
<html lang = "hu">

<head>
<meta charset = "UTF-8">
<title>Dashboard</title>
<style type = "text/css">

    .title {
        color: black;
        font-size: 40px;
        font-style: bold;
        margin-left: 0%;
    }
    
    .button {
        background-color: red;
        border: none;
        color: #ffffff;
        border-radius: 5px;
        display: inline-flex;
        font-size: 26px;
        padding: 10px 20px;
        transition-duration: 0.3s;
    }

    .button:hover {
        color: white;
        background-color: black;
    }

    .body {
        background-color: red;
        justify-content: center;
        display: flex;
        padding-top: 100px;
    }

    .container {
        background-color: white;
        border: 3px solid black;
        border-radius: 12px;
        height: 50ex;
        width: 90ex;
        line-height: 70px;
        text-align: center;
    }

</style>
</head>

<body class = "body">
<div class = "container">
    <h1 class = "title">Databases</h1>
    <button class = "button" onclick="document.location = 'index.php?param=users'">Users</button></br>
    <button class="button" onclick = "document.location='index.php?param=advertisements'">Advertisements</button>
</div>
</body>
</html>