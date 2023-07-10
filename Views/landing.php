<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link rel="stylesheet" href="landing.css">-->
  <title>Voters Website</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    
    .landing {
      background-image: url("https://img.freepik.com/free-vector/international-day-democracy_23-2148608691.jpg?w=740&t=st=1687235339~exp=1687235939~hmac=b8939fcd4918cded7eb42e28f0f948496645392bc727a19793f2d4f1dfbcf14d");
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }
    
    .heading {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 2rem;
      color: #000;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .btn-started {
      padding: 1rem 2.5rem;
      font-size: 1.5rem;
      background-color: #007bff;
      color: #000;
      border: none;
      border-radius: 0.25rem;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }
    
    .btn-started:hover {
      background-color: #0056b3;
    }
    @media (max-width: 768px) {
      .landing {
        background-size: contain;
      }
    }
  </style>
</head>

<body>
  <section class="landing">
    <h1 class="heading">WELCOME! YOUR VOTE IS YOUR VOICE!</h1>
    <a href="http://localhost:8080/login2" class="btn btn-started">Get Started</a>
  </section>
</body>

</html>