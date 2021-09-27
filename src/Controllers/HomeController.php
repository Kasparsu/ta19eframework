<?php
namespace App\Controllers;

use App\Models\Post;
use PDO;
use PDOException;
class HomeController {
    public function index() {
        try {
            $conn = new PDO("sqlite:" . __DIR__ . '/../../db.sqlite');
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM posts");
            $stmt->execute();

            // set the resulting array to associative
            $stmt->setFetchMode(PDO::FETCH_CLASS, Post::class);
            $result = $stmt->fetchAll();
            var_dump($result[0]->getExcerpt());

        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}