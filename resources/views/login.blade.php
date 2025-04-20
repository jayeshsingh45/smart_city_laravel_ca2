<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart City - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .city-bg {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 200px;
            background-image: url('https://cdn.pixabay.com/photo/2017/10/10/07/48/skyline-2836397_1280.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.2;
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="city-bg"></div>
    <div class="login-container">
        <h2 class="text-center mb-4">Smart City Management</h2>
        <div id="login-error" class="alert alert-danger d-none" role="alert">
            Invalid username or password!
        </div>
        <form id="login-form">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            if (username === 'user1' && password === 'pass1') {
                localStorage.setItem('smartcity_loggedin', 'true');
                window.location.href = '/dashboard';
            } else {
                document.getElementById('login-error').classList.remove('d-none');
            }
        });

        // Check if user is already logged in
        if (localStorage.getItem('smartcity_loggedin') === 'true') {
            window.location.href = '/dashboard';
        }
    </script>
</body>
</html> 