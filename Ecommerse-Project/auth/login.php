<?php

 include '../db.php';

 if (isset($_POST['userEmail']) && isset($_POST['userPassword'])) {

    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    // AND password='$password'

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connection, $sql);

    // jodi thake =   mysqli_num_rows($result) = 1 
    // jodi na thake =   mysqli_num_rows($result) = 0


    if (mysqli_num_rows($result) > 0) {

        $user = mysqli_fetch_assoc($result);
        $userDbPASS = $user['password'];

        if (password_verify($password,$userDbPASS)) {
            header('Location:/index.php');
            exit();
        }
       
    }else {
        echo "<pre> Un authenticated <pre> ";
    }

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Your Brand</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .auth-bg {
            background-image: url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50">
    <div class="flex min-h-screen">
        <!-- Left Column - Image (hidden on mobile) -->
        <div class="hidden lg:block lg:w-1/2 auth-bg relative">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <div class="text-white px-12 text-center">
                    <h2 class="text-4xl font-bold mb-4">Welcome Back</h2>
                    <p class="text-xl mb-6">Don't have an account yet?</p>
                    <a href="#" class="btn btn-outline btn-accent">Create Account</a>
                </div>
            </div>
        </div>

        <!-- Right Column - Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6">
            <div class="w-full max-w-md">
                <div class="text-center mb-8">
                    <div class="flex justify-center mb-4">
                        <!-- Replace with your logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                        </svg>
                    </div>
                    <h1 class="text-3xl font-bold mb-2">Sign in to your account</h1>
                    <p class="text-gray-600">Enter your credentials to continue</p>
                </div>

                <div class="flex justify-center gap-4 mb-6 w-[300px] mx-auto">
                    <button class="btn btn-outline w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.545 10.239v3.821h5.445c-0.712 2.315-2.647 3.972-5.445 3.972-3.332 0-6.033-2.701-6.033-6.032s2.701-6.032 6.033-6.032c1.498 0 2.866 0.549 3.921 1.453l2.814-2.814c-1.786-1.667-4.175-2.682-6.735-2.682-5.522 0-10 4.477-10 10s4.478 10 10 10c8.396 0 10-7.524 10-10 0-0.61-0.056-1.229-0.155-1.835h-9.845z"/>
                        </svg>
                        Google
                    </button>
                    <button class="btn btn-outline w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                        </svg>
                        Facebook
                    </button>
                </div>

                <div class="divider">OR</div>

                <form class="space-y-4" method="POST" action="/auth/login.php">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email Address</span>
                        </label>
                        <input type="email" name="userEmail" placeholder="your@email.com" class="input input-bordered w-full" required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                            <a href="#" class="label-text-alt link link-primary">Forgot password?</a>
                        </label>
                        <input type="password" name="userPassword" placeholder="••••••••" class="input input-bordered w-full" required />
                    </div>

                    <div class="form-control">
                        <label class="label cursor-pointer justify-start gap-2">
                            <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
                            <span class="label-text">Remember me</span>
                        </label>
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>

                <div class="text-center mt-6">
                    <p>Don't have an account? <a href="/auth/signup.php" class="link link-primary">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>