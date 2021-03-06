<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <title>Cadastre-se</title>
</head>

<body>
    <div id="corpo">
        <div class="container-md col-6" id="principal">
            <form method="post" action="PHP/cadastrar.php" onsubmit="return ( verifica() )" name="frmEnvia">
                <h1>Cadastre-se</h1>
                <p>Nome</p>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe o seu nome...">
                <br>
                <p>E-mail</p>
                <input type="email" name="email" id="email" class="form-control" placeholder="Informe seu e-mail..." onblur="checarEmail ();"/>
                <br>
                <p>Usúario</p>
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Informe seu nome de usúario...">
                <br>
                <p>Senha</p>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Informe sua senha...">
                <br>
                <p>Confirme sua senha</p>
                <input type="password" id="confirmacao" class="form-control" placeholder="Confirme sua senha...">
                <br>
                <p>CPF</p>
                <input type="text" name="cpf" id="cpf" class="form-control" onkeypress="CPF()" placeholder="Informe seu CPF..." maxlength="14">
                <br>
                <p>Data de Nascimento</p>
                <input type="date" name="data" id="nascimento" class="form-control">
                <br>
                <p>Celular</p>
                <input type="text" name="celular" id="celular" class="form-control" onkeypress="Celular()" placeholder="Informe seu número de celular..." maxlength=" 14">
                <br>
                <!-- <div>
                    <label>CEP</label>
                    <input type="text" id="endereco" class="form-control" placeholder="Informe seu CEP...">
                    <label>Endereço</label>
                    <input type="text" id="enderecoReal" class="form-control" placeholder="Informe seu endereço...">
                    <br>
                    <label>Número</label>
                    <input type="text" id="numeroCasa" class="form-control" placeholder="Informe o número de sua casa...">
                    <br>
                </div> -->
                <h2>ENDEREÇO</h2>
                <div class="input-group mb-4">
                    <span class="input-group-text">CEP</span>
                    <input type="text" name="cep" class="form-control" placeholder="Informe o seu CEP...">
                    <span class="input-group-text">Rua</span>
                    <input type="text" name="endereco" class="form-control" placeholder="Informe seu endereço">
                </div>
                <div class="input-group mb-4">
                    <span class="input-group-text">Número</span>
                    <input type="text" name="ncasa" class="form-control" placeholder="Informe o seu número">
                    <span class="input-group-text">Complemento</span>
                    <input type="text" name="adicional" class="form-control" placeholder="Informação adicional...">
                </div>
                <input type="submit" class="btn btn-primary" onclick="verificar()">
            </form>
        </div>

    </div>
    <script src="controller.js"></script>
</body>

</html>