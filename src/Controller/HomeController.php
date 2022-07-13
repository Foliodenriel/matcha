<?php

namespace src\Controller;

use App\AbstractController;

class HomeController extends AbstractController {

    public function index()
    {
        // $id = 1;
        // $conn = $this->dbmanager()->getConn();

        // $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
        // $stmt->bindParam(':id', $id);
        // $stmt->execute();
        // $res = $stmt->fetchAll();

        // var_dump($res);

        $this->render('index.php', [
            'test' => 'Ok',
        ]);
    }

    public function test()
    {
        echo('Working');
    }
}