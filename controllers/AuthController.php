<?php

include_once "../classes/core/Controller.php";
include_once "../models/UserModel.php";
include_once "AdminController.php";
include_once "RegisterUserController.php";
include_once "../utils/Email.php";

class AuthController extends Controller
{

    public function login($request, $response)
    {
        if ($request->isPost()) {
            $loginUser = new UserModel();
            $loginUser->loadData($request->getBody());
            $result = $loginUser->findOne();
            $verifyPassword = password_verify($loginUser->user_password, $result[0]['user_password']);
            if ($verifyPassword) {
                App::$APP->session->set('user', $result[0]['id']);
                return $response->redirect('/utrance-railway/home');
            }

            return 'invalid username or password';
        }
        return $this->render('login');

    }

    public function logout($request, $response)
    {
        App::$APP->user = null;
        App::$APP->session->remove('user');
        return $response->redirect('/utrance-railway/home');
    }

    public function register($request, $response)
    {

        $registerModel = new UserModel();
        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());
            $registrationState = $registerModel->register();
            if ($registrationState === 'success') {
                return $this->login($request, $response);
            } else {
                $registerSetValue = $registerModel->registerSetValue($registrationState); //Ashika

            }
            return $this->render('register', $registerSetValue); //Ashika
            //  return $this->render('register', $registrationState);
        }
        return $this->render('register');

    }

    public function getMyProfile($request)
    {
        if ($request->isPost()) {

            //from
            return 'success';
        }

        $role = App::$APP->activeUser()['role'];

        if (!$this->isLoggedIn()) {
            return 'You are not logged in!';
        }

        if ($role === 'admin') {
            $admin = new AdminController();
            return $admin->adminSettings($request);
        }
        if ($role === 'user') {
            $regUser = new RegisterUserController();
            return $regUser->registeredUserSettings($request);
        }
        return 'hacker';

    }

    public function forgotPassword($request, $response)
    {

        if($request->isPost()) {
            
            // 1) get user based on POSTed email
            $userForgotPassword = new UserModel();
            $userForgotPassword->loadData($request->getBody());
            $user = $userForgotPassword->findOne();
            
            if(!$user) {
                return 'There is no user with that email address.';
                // return $response->setStatusCode('404');
            }
            
            // 2) Generate the random reset token
            $resetToken = $userForgotPassword->createPasswordResetToken();
            
            // 3) Send it to user's email
            // $resetURL = 
            return '';
        }

        return $this->render('forgotPassword');

    }

    public function resetPassword()
    {
        // reset password
    }

    public function updatePassword()
    {
        // updates the password
    }

    public function restrictTo($role)
    { // asindu
        if (App::$APP->activeUser()['role'] === $role) {
            return true;
        }

        return false;
    }

    public function isLoggedIn()
    { // asindu
        if (App::$APP->user) {
            return true;
        }

        return false;

    }

    public function protect()
    {
        // protect the route
    }
}
