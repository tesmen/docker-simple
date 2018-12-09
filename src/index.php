<?php
$pdo = new PDO('pgsql:host=postgres;port=5432;dbname=project;user=root;password=password');
$pdo = new PDO('mysql:host=mysql;port=5432;dbname=project;user=root;password=password');

echo "Hello, World!";