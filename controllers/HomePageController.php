<?php

    class HomePageController
    {

        public function __construct()
        {
            $valieble= null;
        }

        public function index()
        {
            require 'views/dashboard_up.php';
            require 'views/home.php';
            require 'views/dashboard_down.php';
        }
    }