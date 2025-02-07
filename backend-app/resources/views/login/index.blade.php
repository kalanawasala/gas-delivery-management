<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPG Sri Lanka - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f7d44a, #f8a427);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 100%;
            max-width: 450px;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            background: linear-gradient(135deg, #f7d44a, #f8a427);
            padding: 2rem;
            color: white;
            text-align: center;
        }

        .login-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .login-body {
            padding: 2rem;
        }

        .form-floating {
            margin-bottom: 1rem;
        }

        .form-control:focus {
            border-color: #f8a427;
            box-shadow: 0 0 0 0.25rem rgba(248, 164, 39, 0.25);
        }

        .btn-login {
            background: linear-gradient(135deg, #f7d44a, #f8a427);
            border: none;
            padding: 0.8rem;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(248, 164, 39, 0.3);
        }

        .social-login {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: transform 0.3s ease;
        }

        .social-btn:hover {
            transform: scale(1.1);
        }

        .fb-btn { background: #3b5998; }
        .google-btn { background: #db4437; }
        .twitter-btn { background: #1da1f2; }

        .form-check-input:checked {
            background-color: #f8a427;
            border-color: #f8a427;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <i class="fas fa-user-circle login-icon"></i>
            <h2>Welcome Back</h2>
            <p>Login to your account</p>
        </div>
        <div class="login-body">
            <form>
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                    <label for="email"><i class="fas fa-envelope me-2"></i>Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password"><i class="fas fa-lock me-2"></i>Password</label>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-none">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-login w-100">Login</button>
                
                <div class="social-login">
                    <a href="#" class="social-btn fb-btn"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-btn google-btn"><i class="fab fa-google"></i></a>
                    <a href="#" class="social-btn twitter-btn"><i class="fab fa-twitter"></i></a>
                </div>
                
                <div class="text-center mt-3">
                    <p>Don't have an account? <a href="register.html" class="text-decoration-none">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>