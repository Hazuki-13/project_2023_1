<?php

namespace Controllers;

class GalleryController extends Controller
{
    public function grid(): void
    {
        $this -> render('gallery');
    }
}