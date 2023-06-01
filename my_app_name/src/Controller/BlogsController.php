<?php

namespace App\Controller;

class BlogsController extends AppController{


    public function home()
    {
        $this->viewBuilder()->setLayout('blog');
    }

    public function contato()
    {
        $this->viewBuilder()->setLayout('blog');
    }

    public function produto1()
    {
        $this->viewBuilder()->setLayout('blog');
    }

    public function produto2()
    {
        $this->viewBuilder()->setLayout('blog');
    }
}