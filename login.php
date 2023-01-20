<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela De Login</title>
    <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));

        }
    div{
        background-color: rgba 0, 0, 0, 0, 0.8;
        position:  absolute;
        top: 50%;
        left: 50%; 
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
        color: white;
    }
    .inputSubmit{
        background-color: dodgerblue;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: white;
    }
    input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    }
     
    .inputSubmit:hover{
        background-color: deepskyblue;
        cursor: pointer;

    }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="home.php" method="POST">
            <input type="email" name="Email" placeholder="Email">
            <br><br>
            <input type="password" name="Senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>