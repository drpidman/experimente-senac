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
$stmt = $db->prepare("DELETE FROM users WHERE email = :email_usuario");
if (!$stmt) {
    echo json_encode([
        "status" => "OK",
        "message" => "Erro ao preparar o estado do sql" . $db->lastErrorMsg()
    ]);
}

$stmt->bindParam(":email_usuario", $INPUT_EMAIL, SQLITE3_TEXT);


$res = $stmt->execute();
if ($res) {
    echo json_encode([
        "status" => "OK",
        "message" => "Usuario deletado"
    ]);
} else {
    echo json_encode([
        "status" => "OK",
        "message" => "Falha ao deletar o usuario:" . $db->lastErrorMsg()
    ]);
}
