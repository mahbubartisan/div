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
                background-color: #f8f9fa;
            }

            .card {
                border: none;
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
        </style>
    </head>

    <body>
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            @yield('content')
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
