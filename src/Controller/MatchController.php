<?php

namespace src\Controller;

use App\AbstractController;

class MatchController extends AbstractController {

    public function index()
    {
        $this->render('match.php');
    }
}