<?php
namespace App\Controllers;

class auth extends BaseController
{
    public function index()
    {
        return view('auth');
    }

    public function processEmail()
    {
        $email = $this->request->getPost('email');
        echo $email;
         $e_mail = \Config\Services::email();

         $e_mail->setFrom('aelection269@gmail.com', 'PickMe');
         $e_mail->setTo($email);
         $e_mail->setSubject('ACOUNT ACTIVATION');
         $e_mail->setMessage('Hello ' . $email . ',' . 'This is your password: 150602');

         // Send email
         if ($e_mail->send()) {
            echo "email sent";
         } else {
             echo "emailNotSent";
         }

         return redirect()->to('login');
     }
}

