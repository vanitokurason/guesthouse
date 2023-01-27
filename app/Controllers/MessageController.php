<?php

namespace App\Controllers;

use Core\Controller;
use Core\Page;

class MessageController extends Controller
{
    public function create(): Page
    {
        $this->title = 'Create message';
        $content = '';
        return $this->render('sendForm', $content);
    }
}
