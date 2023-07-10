<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...your-sha512-here..." crossorigin="anonymous" />
    <script src="script.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .form-text {
            color: blue;
            font-size: 14px;
        }

        .email-error,
        .otp-error {
            display: block;
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        .btn {
            display: inline-block;
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn.email-submit {
            background-color: #2196f3;
        }
    </style>
</head>
<body>

    <div class="container email-container">
        <h2>Enter Email</h2>
        <form action="<?php echo base_url("processEmail")?>" class="form email-form" method="post">
            <input type="email" name="email" id="email" placeholder="Enter your school email address" required>
            <small id="emailHelp" class="form-text"><i class="fas fa-info-circle"></i> Please enter a valid school email address ending with .edu</small>
            <span class="email-error"></span>
             <button type="submit" class="btn email-submit">Send OTP</button>
        </form>
    </div>

    <div class="container otp-container">
        <h2>Enter OTP</h2>
        <form action="login.php" class="form otp-form">
            <input type="number" name="otp" id="otp" placeholder="Enter OTP