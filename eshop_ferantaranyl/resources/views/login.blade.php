<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferantaranyl</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #222;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
        }

        h1 {
            font-size: 3rem;
            color: #ff4757;
            text-transform: uppercase;
            margin: 0.5em 0;
            animation: fadeIn 2s ease-in-out;
        }

        h2 {
            font-size: 1.5rem;
            color: #1e90ff;
            margin: 0.5em 0;
            font-style: italic;
            animation: fadeIn 2s 1s ease-in-out; /* Delay animation */
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Login form styling */
        .login-container {
            margin-top: 20px;
            width: 100%;
            max-width: 350px;
            background-color: #333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .login-container h3 {
            color: #fff;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #ccc;
            text-align: left;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #444;
            border-radius: 4px;
            background-color: #555;
            color: #fff;
            box-sizing: border-box;
        }

        .input-group input::placeholder {
            color: #999;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #ff4757;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #e8413b;
        }

        .signup-link {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .signup-link a {
            color: #1e90ff;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>BAKA!!!</h1>
    <h2>King Crimson > King Crimson Requiem</h2>

    <div class="login-container">
        <h3>Login</h3>
        <form action="your-login-endpoint" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Login</button>
            <p class="signup-link">Don't have an account? <a href="#">Sign up</a></p>
        </form>
    </div>

</body>
</html>
