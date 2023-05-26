<?php

    class HomeController
    {

        public function __construct()
        {
            $valieble= null;
        }

        public function index()
        {
            require 'views/dashboard_up.php';
            require 'views/dashboard_down.php';
        }
    }