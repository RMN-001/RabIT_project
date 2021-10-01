<!DOCTYPE html>
<html lang="hu">

<head>
<meta charset = "UTF-8">
<title>Advertisements</title>
<style type = "text/css">

    .title {
        color: black;
        font-size: 35px;
        font-style: bold;
        width: 70%;
        margin-left: 0%;
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
        height: auto;
        width: 100ex;
        line-height: 40px;
        text-align: center;
        padding-bottom: 15px;
    }

    .button {
        background-color: red;
        border: none;
        color: white;
        border-radius: 5px;
        display: inline-flex;
        font-size: 16px;
        padding: 10px 20px;
        transition-duration: 0.3s;
        margin-left: 3%;
    }

    .button:hover {
        color: white;
        background-color: black;
    }

    table {
        display: inline-table;
        width: 70%;
        border: solid 2px black;
        border-radius: 10px;
        background-color: white;
    }

    th:first-child {
        border-top-left-radius: 10px;
        color: white;
    }

    th:last-child {
        border-top-right-radius: 10px;
        color: white;
    }

    tr:nth-child(even) {
        background-color: pink;
    }

    thead {
        background-color: red;
        color: white;
    }

    tr td {
        font-weight: bolder;
    }

    .headerContainer {
        display: inline-flex;
        align-items: center;
        width: 100%;
    }

</style>
</head>

<body class = "body">
<div class = "container">
    <div class = "headerContainer">
        <button class = "button" onclick = "document.location = './'">Home</button>
        <h2 class = "title">Advertisements</h2>
    </div>
    <?php

    if ($result -> num_rows > 0) {
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Advertisement</th>";
        echo "<th>Username</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        
        mysqli_free_result($result);
    } else {
        echo "<p><em>No advertisments were found.</em></p>";
    }

    ?>
</div>
</body>

</html>