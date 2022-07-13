<?php

namespace src\Controller;

use App\AbstractController;

class NotificationController extends AbstractController {

    public function index()
    {
        $this->render('notification.php');
    }
}