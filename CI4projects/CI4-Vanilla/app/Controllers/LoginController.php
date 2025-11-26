<?php

namespace App\Controllers;
use App\Models\StaffModel;
use App\Models\CustomerModel;

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
        $isStaff = $this->request->getPost('isStaff');

        if ($isStaff) {
            $staffModel = new \App\Models\StaffModel();
            $admin = $staffModel->where('email', $email)->first();

            if ($admin && $password === $admin['password']) {

                session()->set([
                    'userFirstName' => $admin['first_name'],
                    'userType' => 'staff',
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/adminProducts'); 
            } else {
                return redirect()->back()->with('error', 'Invalid staff login');
            }
        } else {
            $customerModel = new \App\Models\CustomerModel();
            $customer = $customerModel->where('custEmail', $email)->first();

            if ($customer && password_verify($password, $customer['custPassword'])) {
                session()->set([
                    'userFirstName' => $customer['custFirstName'],
                    'userType' => 'customer',
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/MainPage'); 
            } else {
                return redirect()->back()->with('error', 'Invalid customer login');
            }
        }

    }



    public function logout()
    {
        session()->destroy();
        return redirect()->to('/MainPage');
    }
}
