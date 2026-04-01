<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function login()
    {
        helper(['form']);
        $session = session();

        if ($this->request->getMethod() === 'post') {

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $model = new UserModel();
            $user = $model->where('useremail', $email)->first();

            if ($user) {
                // ❗ TANPA HASH
                if ($password == $user['userpassword']) {

                    $session->set([
                        'user_id' => $user['id'],
                        'user_name' => $user['username'],
                        'logged_in' => true
                    ]);

                    return redirect()->to('/admin/artikel');
                } else {
                    $session->setFlashdata('flash_msg', 'Password salah!');
                }
            } else {
                $session->setFlashdata('flash_msg', 'Email tidak ditemukan!');
            }

            return redirect()->to('/user/login');
        }

        return view('user/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/user/login');
    }
}