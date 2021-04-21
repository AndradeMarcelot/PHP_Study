<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
   
    <title>Controle de Vacinas</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="row">
                <div class="col-1"><a href="#">H' Dor</a></div>
                <div class="col">
                    <p>Bem vindo, Marcelo (Admnistrator)</p>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-1">
                <nav class="nav flex-column">
                  <a class="nav-link active" href="#">Cadastro</a>
                  <a class="nav-link" href="#">Vacinas</a>
                  <a class="nav-link" href="#">Link</a>
                  <a class="nav-link disabled" href="#">Disabled</a>
                </nav>
            </div>
            <div class="col">
                <h1>Cadastro de clientes</h1>
                <form class="row g3">
                    <div class="col-auto">
                        <label for="inputClientName" class="visually-hidden">Nome</label>
                        <input type="text" class="form-control form-control-sm" id="inputClientName" name="buscarCliente" placeholder="Nome ou CPF"/>
                    </div>
                    
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary btn-sm mb-2">Buscar</button>
                    </div>    
                </form>
                <div class="float-end">
                    <a href="#"> Cadastrar Clientes</a>
                </div>
                
                <section>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">CPF</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Nascimento</th>
                                <th scope="col">Idade</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Endereço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>123.456.789-11</td>
                                <td>Marcelo Andrade</td>
                                <td>01/01/1990</td>
                                <td>30</td>
                                <td>(21)98888-1111</td>
                                <td>marcelo@gmail.com</td>
                                <td>Rua das Árvores, 334 </td>
                            </tr>
                            <tr>
                                <td>123.456.789-11</td>
                                <td>Marcelo Andrade</td>
                                <td>01/01/1990</td>
                                <td>30</td>
                                <td>(21)98888-1111</td>
                                <td>marcelo@gmail.com</td>
                                <td>Rua das Árvores, 334 </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        
        <footer>
            
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>