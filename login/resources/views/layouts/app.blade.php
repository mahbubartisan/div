<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In Page</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="styles.css">


        <style>
            body {
                background-color: #f0f0f0;
            }

            .card {
                max-width: 400px;
                margin: 50px auto;
                background-color: #ffffff;
                border:none;
                border-radius: 5px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .card-title {
                font-weight: 400;
                color: #868585 font-size: 1.25rem;
            }

            .custom-btn {
                background-color: #1acd81;
                color: white;
                border: none;
                padding: 10px;
                font-size: 16px;
                font-weight: 500;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            .custom-btn:hover {
                background-color: #43e5a0;
                color: #ffffff;
            }

            .sign-text {
                color: #1acd81;
                font-size: 16px;
                font-weight: 400;
            }

            .remember {
                color: #1acd81;
                font-size: 16px;
                font-weight: 400;
            }

            .forgot {
                color: #4b4c4c;
                font-weight: 400
            }

            .form-container {
                max-width: 500px;
                margin: 50px auto;
                background-color: #ffffff;
                padding: 20px 30px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .form-header {
                text-align: center;
                margin-bottom: 20px;
            }

            .form-header h3 {
                color: #343a40;
            }

            .btn-primary {
                width: 100%;
                padding: 10px;
                font-size: 16px;
                background-color: #007bff;
                border-color: #007bff;
            }

            .btn-primary:hover {
                background-color: #0056b3;
                border-color: #004085;
            }
        </style>
    </head>

    <body>
        {{-- <div class="container d-flex justify-content-center align-items-center"> --}}
        <div class="justify-content-center align-items-center">
            @yield("content")
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
