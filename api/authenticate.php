<?php
session_start();

$db = new SQLite3("../db/user.sqlite3");

$LOGIN = filter_input(INPUT_POST, "login", FILTER_SANITIZE_STRING);
$PASSWORD = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$stmt = $db->prepare(
    "SELECT  login, password from admins WHERE login = :login"
);

if (!$stmt) {
    echo json_encode(["status"=>"err: " . $db->lastErrorMsg() ]);
    return;
}

$stmt->bindParam(":login", $LOGIN, SQLITE3_TEXT);
$res = $stmt->execute();

if ($res) {
    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
        $password = password_verify($PASSWORD, $row['password']);
        if (!$password) {
            echo json_encode(["status"=> "Senha invalida!"]);
            return;
        }

        $username = $row['login'];
        $_SESSION['user'] = (string)$username;

        header("Location: ../_svlogs/registros/");
    }
} else {
    echo json_encode(["status"=> "err:" . $db->lastErrorMsg() ]);
}
