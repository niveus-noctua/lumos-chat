<?php

    function registerNewUser($nickname, $email, $pass) {
        $nickname = htmlspecialchars(mysqli_real_escape_string($nickname));
        $email = htmlspecialchars(mysqli_real_escape_string($email));
        $pass = htmlspecialchars(mysqli_real_escape_string($pass));

        $sql = "INSERT INTO users (`nickname`, `email`, `pass`)
                VALUES ('{$nickname}', '{$email}', '{$pass}')";

        $rs = mysqli_query($sql);

        if($rs) {
            $sql = "SELECT * FROM users WHERE (`nickname` = '{$nickname}' AND `email` = '{$email}' AND `pass` = '{$pass}') LIMIT 1";

            $rs = mysqli_query($sql);
            $rs = createSmartyRsArray($rs);

            if (isset($rs[0])) {
                $rs['success'] = 1;
            } else {
                $rs['success'] = 0;
            }
        } else {
            $rs['success'] = 0;
        }

        return $rs;
    }

    function checkRegisterParams($nickname, $email, $pass) {

        $res = null;

        if (!$nickname) {
            $res['success'] = false;
            $res['message'] = 'Поле nickname не заполнено';
        }

        if (!$email) {
            $res['success'] = false;
            $res['message'] = 'Поле email не заполнено';
        }

        if (!$pass) {
            $res['success'] = false;
            $res['message'] = 'Поле password не заполнено';
        }

        return $res;
    }

?>