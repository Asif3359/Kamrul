<?php   
    
    if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) ) {
        # code...
        $first_name = $_POST['first_name']; // value of first_name;
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        echo "<pre>";
        echo "Password Hash: $password_hash\n";
        echo "</pre>";


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Your Website</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-auth {
            background-image: url('https://img.freepik.com/free-vector/thank-you-lettering-with-curls_1262-6964.jpg?t=st=1746640159~exp=1746643759~hmac=0534ebbbef3d56caff10b6f0e05bdd7ebbf4216d23890bab6ec0fff4e13b1a5c&w=900');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50">
    <div class="flex min-h-screen">
        <!-- Left Column - Image (hidden on mobile) -->
        <div class="hidden lg:block lg:w-1/2 bg-auth relative">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <div class="text-white px-12 text-center">
                    <h2 class="text-4xl font-bold mb-4">Join Our Community</h2>
                    <p class="text-xl">Already have an account?</p>
                    <a href="#" class="btn btn-outline btn-accent mt-6">Sign In</a>
                </div>
            </div>
        </div>

        <!-- Right Column - Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6">
            <div class="w-full max-w-md">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold mb-2">Create Account</h1>
                    <p class="text-gray-600">Fill in the form below to get started</p>
                </div>

                <div class="flex justify-center gap-4 mb-6">
                    <button class="btn btn-outline w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                        </svg>
                        Facebook
                    </button>
                    <button class="btn btn-outline w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        GitHub
                    </button>
                </div>

                <div class="divider">OR</div>

                <form method="POST" action="/auth/signup.php" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">First Name</span>
                            </label>
                            <input type="text" name="first_name" placeholder="John" class="input input-bordered w-full" required />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Last Name</span>
                            </label>
                            <input type="text" name="last_name" placeholder="Doe" class="input input-bordered w-full" required />
                        </div>
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" placeholder="your@email.com" class="input input-bordered w-full" required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="••••••••" class="input input-bordered w-full" required  />
                        <label class="label">
                            <span class="label-text-alt">Minimum 8 characters</span>
                        </label>
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </div>
                </form>

                <div class="text-center mt-6">
                    <p class="text-gray-600">By signing up, you agree to our <a href="#" class="link link-primary">Terms</a> and <a href="#" class="link link-primary">Privacy Policy</a></p>
                    <p class="mt-4">Already have an account? <a href="/auth/login.php" class="link link-primary">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>