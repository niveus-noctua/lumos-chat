<?php

    include_once '../models/UserModel.php';

    function registerAction() {
        if (isset($_REQUEST['nickname'])) {
            $nickname = $_REQUEST['nickname'];
        } else {
            $nickname = null;
        }

        if (isset($_REQUEST['email'])) {
            $email = trim($_REQUEST['nickname']);
        } else {
            $email = null;
        }

        if (isset($_REQUEST['pass'])) {
            $pass = $_REQUEST['nickname'];
        } else {
            $pass = null;
        }

        $resData = checkRegisterParams($nickname, $email, $pass);

        if (!$resData && checkUserNickname($nickname)) {
            $resData['success'] = false;
            $resData['message'] = "Никнейм {$nickname} уже занят";
        }

        if (!$resData && checkUserEmail($email)) {
            $resData['success'] = false;
            $resData['message'] = "Пользователь с таким адресом ({$nickname}) уже существует";
        }

        if (!$resData) {
            $passMD5 = md5($pass);

            $userData = registerNewUser($nickname, $email, $passMD5);

            if ($userData['success']) {
                $resData['success'] = true;
                $resData['message'] = 'Пользователь успешно зарегистрирован';

                $userData = $userData[0];
                $resData['userName'] = $userData['nickname'];
                $resData['userEmail'] = $userData['email'];
                $_SESSION['user'] = $userData;
                $_SESSION['user']['displayName'] = $userData['nickname'];
            } else {
                $resData['success'] = false;
                $resData['message'] = 'Регистрация не удалась';
            }
        }

        echo json_encode($resData);

    }

?>
