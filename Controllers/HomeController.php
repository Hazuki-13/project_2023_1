<?php

namespace Controllers;

class HomeController extends Controller
{
    public function display(): void
    {
        $this-> render('home');
    }
}