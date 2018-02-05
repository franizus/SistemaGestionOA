<?php
    ## connect to database with pdo
    $pdo = new PDO('sqlite:db/sistemaoa.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
