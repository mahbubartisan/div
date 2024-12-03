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
                font-weight: bold;
                font-size: 1.25rem;
            }

            .custom-btn {
                background-color: #28a745;
                color: white;
                border: none;
                padding: 10px;
                font-size: 16px;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            .custom-btn:hover {
                background-color: #218838;
            }

            .fab {
                font-size: 1.2rem;
            }

            .fab:hover {
                transform: scale(1.1);
                transition: transform 0.2s ease-in-out;
            }

            .fas {
                font-size: 1.5rem;
                color: #28a745;
            }
        </style>
    </head>

    <body>
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="card shadow-sm" style="width: 350px; border-radius: 15px;">
                <div class="card-img-top">
                    <img src="https://via.placeholder.com/350x150" alt="Top Image" class="w-100 rounded-top"
                        style="height: 150px; object-fit: cover;">
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title mb-0 d-flex align-items-center">
                            <i class="fas fa-user-circle me-2" style="color: #28a745;"></i> Sign In
                        </h5>
                        <div class="d-flex">
                            <a href="#" class="text-decoration-none me-2">
                                <i class="fab fa-facebook-f text-primary"></i>
                            </a>
                            <a href="#" class="text-decoration-none">
                                <i class="fab fa-twitter text-info"></i>
                            </a>
                        </div>
                    </div>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <input type="checkbox" id="rememberMe">
                                <label for="rememberMe" class="form-check-label">Remember Me</label>
                            </div>
                            <a href="#" class="text-decoration-none">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn custom-btn w-100">Sign In</button>
                    </form>
                    <div class="text-center mt-3">
                        <p class="mb-1">Not a member? <a href="#" class="text-decoration-none">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
