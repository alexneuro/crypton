<?php
$email = $_POST['email'];
if (isset($email)) {
//    $mysqli = new mysqli("localhost", "root", "", "vasco_game");
    $mysqli = new mysqli("localhost", "antromdg_vasco", "5P?W*Z[A", "antromdg_vasco");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $res = $mysqli->query("SELECT * FROM equ-emails WHERE email = '" . $email . "'");
    $count = $res->num_rows;
    if ($count == 0)
    {
        $mysqli->query("INSERT INTO equ-emails(email, ip) VALUES ('" . $email . "', '" . $_SERVER['REMOTE_ADDR'] . "')");


        $to = 'alexneuro31@ya.ru';
        $subject = 'Crypton';
        $message = '' . $subject . "\r\n" . $_POST['email'];

        $headers = "From: user <$email>\r\n" .
            "MIME-Version: 1.0" . "\r\n" .
            "Content-type: text/html; charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, implode("\r\n", $headers)); //Отправка письма с помощью функции mail


//        $json = file_get_contents('emails.json');
//        $json = json_decode($json, true);
//        $json[] = $email;
//        $json = json_encode($json);
//        file_put_contents('emails.json', $json);
    }
}
?>

