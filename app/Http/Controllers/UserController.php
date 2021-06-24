<?php


namespace App\Http\Controllers;



use Illuminate\Http\Request;

class UserController
{
    public function dangki()
    {
        return view('user.dangki');
    }

    public function xulidangki(Request $request)
    {
        $firstName = $request->get('firstname');
        $lastName = $request->get('lastname');
        $country = $request->get('country');
        return sprintf('welcome to admin page %s, firstname %s, country %s', $firstName, $lastName, $country);
    }

    public function login(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        return sprintf('welcome to admin page %s, email %s, password %s', $name, $email, $password);
    }

    public function getUserDetail($id)
    {
        return 'hello path' . $id;
    }

    public function dangkikhachhang()
    {
        return view('user.dangkikhachhang');
    }

    public function showInformation(Request $request)
    {
        $fullName = $request->get('fullName');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $identityCard = $request->get('identityCard');
//        return sprintf('Successful registration of your information is: fullName %s, email %s, phone %s, address %s, identityCard %s',
//            $fullName, $email, $phone, $address, $identityCard);
        return view('user.detail_account')
            ->with('fullName',$fullName)
            ->with('email',$email)
            ->with('phone',$phone)
            ->with('address',$address)
            ->with('idCard',$identityCard);
    }
}
