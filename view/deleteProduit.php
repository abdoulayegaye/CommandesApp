<?php

    $id = $_GET['id'];
    deleteProduit($id);
    header("Location:?page=listProduit");