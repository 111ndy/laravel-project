<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Landing Page</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      font-family: Arial, sans-serif;
    }

    h1 {
      font-size: 3rem;
      color: white;
      margin: 0 0 20px 0;
    }

    img {
      width: 250px;
      height: auto;
    }
  </style>
</head>
<body>
  <h1>Selamat Datang!</h1>
  <img src="{{ asset('yatta.gif') }}" alt="Welcome Animation">
</body>
</html>
