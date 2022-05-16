<?php

    try {
        $conn = new PDO('mysql:host=localhost;dbname=alunoDB','root','');
    } catch (PDOException $e) {
        $e->getMessage();
    }   