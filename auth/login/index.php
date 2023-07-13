<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Auth</title>
        <link rel="stylesheet" href="../../css/auth/main.css">
        <link rel="stylesheet" href="../../css/main.css">
    </head>

    <body>
    <form class="card m-top-1" method="post" action="../../api/authenticate.php">
        <div class="container justify center align center m-bottom-1">
            <h1>Painel de controle</h1>
        </div>
        <div class="form-control">
            <label for="login">
                <input type="text" name="login" placeholder="Login" id="login">
                <span id="span-nome">Login</span>
            </label>
        </div>
        <div class="form-control">
            <label for="password">
                <input type="password" name="password" placeholder="Password" id="password">
                <span id="span-sobrenome">Senha</span>
            </label>
        </div>
        <div class="form-control">
            <button class="button-theme-lightblue" onclick="submit_register()" type="submit">LOGIN</button>
        </div>
    </form>
    </body>
</html>