<?php
    include_once 'DB/connection.php';
    include_once 'modelDB/produitsDB.php';
    include_once 'modelDB/clientsDB.php';
    include_once 'modelDB/commandesDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Commandes App | Index</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php 
        include_once 'layout/header.php'; 
        $page = isset($_GET['page']) ? $_GET['page'] : '';
        $page .= '.php'; // $page = $page . '.php';
        $pages = scandir('view');
        if(in_array($page, $pages))
            include_once 'view/'.$page;
        else
            include_once 'error.php'; 
        include_once 'layout/footer.php'; 
    ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>