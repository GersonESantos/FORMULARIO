<?php
    if(isset($_POST['submit']))
    {
        print_r ($_POST['codigo']);
        print_r ($_POST['descricao']);
        print_r ($_POST['preco']);
        print_r ($_POST['categoria']);
        include_once('config.php');
        $codigo    = $_POST['codigo'];
        $descricao = $_POST['descricao'];
        $preco     = $_POST['preco'];
        $categoria = $_POST['categoria'];
        $result = mysqli_query($conexao, "INSERT INTO produtos(codigo,descricao,preco,categoria) 
            VALUES ('$codigo','$descricao','$preco','$categoria')"); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0 , 0, 0.5);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 5px;
        }
        .inputBox{
            position: relative;
        }   
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15p;
            width: 100%;
            letter-spacing: 2px;
        } 
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput
        {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71)); 
            width: 100%;
            border: none;
            padding: 10px;
            color: white;
            font-size: 15p;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195))
        }
    </style>
</head>
<body>

<a href="home.php">Voltar</a>
    <div class="box">
        <form action="pro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro De Produtos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="codigo" id="codigo" class="inputUser" required>
                    <label for="codigo" class="labelInput">Codigo</label>    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" required>
                    <label for="descricao" class="labelInput">Descricao</label>    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="preco" id="preco" class="inputUser" required>
                    <label for="preco" class="labelInput">Preço</label>    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="categoria" id="categoria" class="inputUser" required>
                    <label for="categoria" class="labelInput">Categoria</label>    
                </div>  
                <br><br> 
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>

    </div>
    
</body>
</html>