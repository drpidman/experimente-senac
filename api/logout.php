<?php
$INPUT_EMAIL = $_POST["email"];

$db = new SQLite3("../db/user.sqlite3");

if (!$INPUT_EMAIL) {
    echo json_encode([
        "message" => "Email não fornecido"
    ]);
    return;
}

// stmt signfica statement
$stmt = $db->prepare("DELETE users WHERE email = :email_usuario");
$stmt->bindParam(":email_usuario", $INPUT_EMAIL, SQLITE3_TEXT);


$res = $stmt->execute();
if ($res) {
    echo json_encode([
        "status" => "OK",
        "message" => "Usuario"
    ]);
} else {
    echo json_encode([
        "status" => "OK",
        "message" => "Falha ao deletar o usuario:" . $db->lastErrorMsg()
    ]);
}
