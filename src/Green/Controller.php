<?php
namespace Green;

class Controller extends Green
{

    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
}