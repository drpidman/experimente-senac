<?php
// Em caso de erro em que o banco de dados esta como apenas 'readonly',
// configurar as permissões do usuario do sistema na pasta db/ e no aqruivo sqlite3

// caminho para o banco de dados
$db = new SQLite3('../db/user.sqlite3');

// valores obtidos do fetch->POST
$USERNAME           = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$USER_SURNAME       = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$USER_INSTAGRAM     = filter_input(INPUT_POST, 'instagram', FILTER_SANITIZE_STRING);
$USER_TELEPHONE     = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$USER_MAIL          = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

// complementos de string
$USER_COMPLETE_NAME = $USERNAME . " " . $USER_SURNAME;

$USER_PASSWORD      = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// inserir os dados e previnir um possivel SQL INJECTION
$stmt = $db->prepare(
    "INSERT INTO users(username, instagram, telefone, email, password) VALUES(:username, :instagram, :telefone, :email, :password)"
);

// atribuir os valores aos parametros definidos no statment
$stmt->bindParam(':username', $USER_COMPLETE_NAME, SQLITE3_TEXT);
$stmt->bindParam(':instagram', $USER_INSTAGRAM, SQLITE3_TEXT);
$stmt->bindParam(':telefone', $USER_TELEPHONE, SQLITE3_TEXT);
$stmt->bindParam(':email', $USER_MAIL, SQLITE3_TEXT);
$stmt->bindParam(':password', $USER_PASSWORD, SQLITE3_TEXT);

// executar e validar
$res = $stmt->execute();
if ($res) {
    echo json_encode(['status'=>'ok']);
} else {
    // retornar a ultima mensagem de erro do sqlite3
    echo json_encode(['status'=>'err' . $db->lastErrorMsg() ]);
}
