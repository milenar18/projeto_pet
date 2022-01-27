<html>
<head>
    <title>Projeto Pet</title>
 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
</head>
<body>
 
<div class="container">
 
    <h1>Cadastro do Pet</h1>
 
    <hr/>
 
      
    <form action="{{route('Cadastrar_pets')}}" method="POST">
      
 
      <div class="form-group">
        <label for="nome">Nome do Tutor:</label>
        <input type="text" id="nome_tutor" name="nome_tutor" class="form-control" placeholder="Nome do Tutor">
      </div>
 
      <div class="form-group">
        <label for="email">Endereço do Tutor:</label>
        <input type="text" id="end_tutor" name="end_tutor" class="form-control" placeholder="Endereço do Tutor">
      </div>

      <div class="form-group">
        <label for="email">Telefone do Tutor:</label>
        <input type="text" id="tel_tutor" name="tel_tutor" class="form-control" placeholder="Telefone do Tutor">
      </div>

      <div class="form-group">
        <label for="email">Idade do Animal:</label>
        <input type="text" id="idade_animal" name="idade_animal" class="form-control" placeholder="Idade do Animal">
      </div>

      <div class="form-group">
        <label for="email">Peso do Animal:</label>
        <input type="text" id="peso_animal" name="peso_animal" class="form-control" placeholder="Peso do Animal">
      </div>

      <div class="form-group">
        <label for="email">Raça do Animal:</label>
        <input type="text" id="raca" name="raca" class="form-control" placeholder="Raça do Animal">
      </div>
 
      <button type="submit" class="btn btn-default">Enviar</button>
 
    </form>
 
</div>
 
</body>
</html>
