<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet">
  <title>403 Forbidden Route</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    body {
      background: #233142;
    }
    .whistle {
      width: 40%;
      margin: 100px auto; /* Center horizontally */
      display: block; /* Make sure image behaves like a block element */
    }
    h1 {
      margin-top: -100px;
      margin-bottom: 20px;
      color: #facf5a;
      text-align: center;
      font-family: 'Raleway';
      font-size: 90px;
      font-weight: 800;
    }
    h2 {
      color: #455d7a;
      text-align: center;
      font-family: 'Raleway';
      font-size: 30px;
      text-transform: uppercase;
    }
  </style>
</head>
<body>
  <img src="{{asset('images/403.jpg')}}" alt="403 image" class="whistle"/>
  <h1>403</h1>
  <h2>Mag kuri-kuri pajud ka hawa diri!!</h2>
</body>
</html>
