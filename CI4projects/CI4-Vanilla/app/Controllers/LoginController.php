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

        // Check database for a staff user with this email
        $staffModel = new StaffModel();
        $user = $staffModel->where('email', $email)->first(); // only filter by email

        // If a user is found, the password matches exactly, and their role is admin
        if($user && $user['password'] === $password && $user['role'] === 'admin') {
            $session = session(); // starts the sesh
            $session->set('adminFirstName', $user['first_name']); // store first name
            return redirect()->to('/adminProducts'); // go to the admin page with products (this will later be changed to the admin dashboard)
        } else {
            return redirect()->back()->with('error', 'Invalid login'); 
        }
        //Somthing is wrong as with incorrect creditentials are inputted theyre still logging in the user
    }



}
