<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="css/cliente.css">
</head>
<body>

    <nav>
        <div class="navbar">

            <div class="nav-links">
            <a href="/cliente">Cliente</a>
            </div>
         <div>
    </nav>
    
<section>
<div class="Content">
    <div class="box">
        <form action="/cliente" method="post">
            @csrf

            <fieldset>
                <legend><b>Cadastro de Cliente</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="txNomeCliente" id="nome" class="inputUser" required>
                    <label class="labelInput">Primeiro Nome</label>
                </div>
                <br>
                <br>

                <div class="inputBox">
                    <input type="text" name="txSobrenome" id="sobrenome" class="inputUser" required >
                    <label class="labelInput">Sobrenome</label>
                </div>
                <br>
                <br>


                <button onclick id="submit">Salvar</button>

            </fieldset>
        </form>
    </div>
</div>
</section>

<div class="foreach" >
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Primeiro Nome</th>
            <th>Sobrenome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cliente as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->primeiroNome}}</td>
                <td>{{ $c->sobrenome }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>  
 
</body>
</html>