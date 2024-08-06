<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function register()
    {
       
        $session = session();
        $role =  $session->get('user');
        /*print_r($role['role']);
        die;*/
         if ($role) {           
            return redirect()->to('/dashboard');
        }
        return view('auth/register');
    }

    public function attemptRegister()
    {
        $users = new UserModel();


        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'role' => 'user'
        ];

        if ($users->save($data)) {
            return redirect()->to('/login');
        } else {
            return redirect()->back()->with('error', 'Registration failed.');
        }
    }

    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $users = new UserModel();
        $user = $users->where('email', $this->request->getPost('email'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->set('user', $user);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Login failed.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
