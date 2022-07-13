<?php

namespace src\Controller;

use App\AbstractController;

class LikeController extends AbstractController {

    public function index()
    {
        $this->render('like.php');
    }
}