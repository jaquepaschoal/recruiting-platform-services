<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="./assets/css/normalize/normalize.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/main.min.css">
  <link rel="shortcut icon" href="//c.fastcdn.co/u/945855fc/7076173-0-favicon.png" type="image/ico">
  <script src="./assets/js/jquery.min.js"></script>

  <title>Cadastro</title>
</head>
<body class="home">
  <div class="home-box">
    <div class="home-box-img">
      <img src="./assets/images/coffee.svg" alt="Logo Smart Coffe">
    </div>
    <form data-js="form-home" class="home-box-form">
      <div class="home-box-form-name">
        <label>Nome Completo</label>
        <input type="text" data-js="name" required>
      </div>
      <div class="home-box-form-email">
        <label>Email</label>
        <input type="email" data-js="email" required="required" title="exemplo: exemplo@alboom.com" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$">
      </div>
      <div class="home-box-form-button">
        <a href="/"><input type="submit" value="CADASTRAR"/></a>
      </div>
    </form>
  </div>
  <script src="./assets/js/home/min/main.min.js"></script>
</body>
</html>