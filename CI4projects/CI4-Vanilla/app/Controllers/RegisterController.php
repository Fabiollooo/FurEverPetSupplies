<?php

namespace App\Controllers;
use App\Models\CustomerModel;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('templates/header') 
             . view('loginform'); 
    }




    public function create()
    {
        $firstName = $this->request->getPost('custFirstName');
        $lastName = $this->request->getPost('custLastName');
        $email = $this->request->getPost('custEmail');
        $city = $this->request->getPost('custCity');
        $country = $this->request->getPost('custCountry');
        $phone = $this->request->getPost('custPhone');
        $address = $this->request->getPost('custAddressLine1');
        $postalCode = $this->request->getPost('custPostalCode');

        $password = $this->request->getPost('custPassword');

        $customerModel = new CustomerModel();

       
        $existingUser = $customerModel->where('custEmail', $email)->first();
        if ($existingUser) {
            return view('loginform', ['message' => 'Email already registered']);
        }

        
        $inserted = $customerModel->insert([
            'custFirstName'      => $firstName,
            'custLastName'       => $lastName,
            'custEmail'          => $email,
            'custCity'           => $city,
            'custCountry'        => $country,
            'custPhone'          => $phone,
            'custAddressLine1'   => $address,
            'custPostalCode'     => $postalCode,
            'custPassword'       => password_hash($password, PASSWORD_DEFAULT)
        ]);



        if ($inserted) {
            return redirect()->to('/login')->with('message', 'Successfully registered! Please log in.');
        } else {
            return redirect()->to('/login')->with('message', 'Failed to register. Try again.');
        }

    }
}
