<?php
declare(strict_types=1);
require_once '../src/libraries/Controller.php';

class Pages extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = [
            'title' => 'Home page',
            'name' => 'Adrian'
        ];
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $this->view('pages/about');
    }
}