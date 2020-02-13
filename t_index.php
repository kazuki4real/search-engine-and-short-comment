<?php 

require 'database.php';

    $sql = 'SELECT count(*) from article';
    $stmt = $db->query($sql);
    $rowCount = $stmt->fetchColumn();

    $sql = 'SELECT * from article order by id desc';
    $stmt = $db->query($sql);
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>