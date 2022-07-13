<?php

namespace src\Controller;

use App\AbstractController;

class SearchController extends AbstractController {

    public function index()
    {
        $this->render('search.php');
    }
}