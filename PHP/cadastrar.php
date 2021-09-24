<?php
    include('conexao.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $data = $_POST['data'];
    $celular = $_POST['celular'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $ncasa = $_POST['ncasa'];
    $adicional = $_POST['adicional'];

    $cadastramento = "INSERT INTO usuario(nome, email, usuario, senha, cpf, datanas, celular, cep, rua, numero, complemento) 
    VALUES('$nome', '$email', '$usuario', '$senha', '$cpf', '$data', '$celular', '$cep', '$endereco', '$ncasa', '$adicional')";

    if(mysqli_query($connect, $cadastramento)){
        echo "<h1>Novo Cadastro Realizado</h1></br>";
    }else{
        echo "ERROR: " . $cadastramento . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>