<?php

    $id = $_GET['id'];
    deleteClient($id);
    header("Location:?page=listClient");