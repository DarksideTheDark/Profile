<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="css/minimal.css">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(0, 0, 0), rgb(17, 54, 71));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 10px;
            color: #ffff;
            text-align: center;
        }
        input{
            padding: 10px;
            margin-top: 10px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="test.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <ul class="login-ut">
                        <li class="margin-top-8-margin-button-8">
                            <span class="text1">
                                Esqueceu sua
                            </span>
                            <a href="#" class="text2">
                                senha?
                            </a>
                        </li>
		    <br>
                        <li>
                            <span class="text1">
                                Não tem uma conta?
                            </span>
                            <a href="formulario.php" class="text2">
                                Criar
                            </a>
                        </li>
                    </ul>
        </form>
    </div>
</body>
</html>
