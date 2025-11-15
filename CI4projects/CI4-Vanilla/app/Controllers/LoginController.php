<?php

namespace App\Controllers;
use App\Models\StaffModel;

class LoginController extends BaseController
{
    public function index2()
    {      
        return view('templates/header')
             . view('loginform');
    }

     public function authenticate()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $staffModel = new StaffModel();
        $user = $staffModel->where('email', $email)->first();

        if ($user && $user['password'] === $password && $user['role'] === 'admin') {
            session()->set('adminFirstName', $user['first_name']);
            return redirect()->to('/adminProducts');
        } else {
            return redirect()->back()->with('error', 'Invalid login');
        }
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/MainPage');
    }   



}
