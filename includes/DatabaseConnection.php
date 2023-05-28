<?php
$pdo = new PDO('mysql:host=localhost;dbname=artists;port=33061;charset=utf8', 'artistsuser', 'administrador123');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);