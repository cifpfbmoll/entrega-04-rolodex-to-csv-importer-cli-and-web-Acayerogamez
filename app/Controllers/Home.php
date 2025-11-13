<?php

namespace App\Controllers;

class Home extends BaseController
{
<<<<<<< HEAD
    public function index(): string
    {
        return view('welcome_message');
=======
    public function index()
    {
        // Redirect to contacts page
        return redirect()->to('/contacts');
>>>>>>> 65ca98b76f2c1281e66f6b1d1780d44488968174
    }
}
