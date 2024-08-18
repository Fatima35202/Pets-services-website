<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Main container for the form -->
    <div class="container">
        <!-- Row for centering the form -->
        <div class="row justify-content-center">
            <!-- Column to set the form width -->
            <div class="col-md-6">
                <!-- Centered content with margin at the top -->
                <div class="text-center mt-5">
                    <!-- Heading for the login page -->
                    <h1 class="mb-4">Login</h1>
                    <!-- Login form -->
                    <form action="dologin.php" method="post">
                        <!-- Email input field -->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="e" class="form-control" required>
                            <?php
                            // Display error message if 'er' query parameter is set to 1 (wrong email)
                            if (isset($_GET["er"]) && $_GET["er"] == 1) {
                                echo '<div class="text-danger mt-2">Wrong Email</div>';
                            }
                            ?>
                        </div>
                        <!-- Password input field -->
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="p" class="form-control" required>
                            <?php
                            // Display error message if 'er' query parameter is set to 0 (wrong password)
                            if (isset($_GET["er"]) && $_GET["er"] == 0) {
                                echo '<div class="text-danger mt-2">Wrong Password</div>';
                            }
                            ?>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <!-- Link to the signup page -->
                    <div class="mt-3">
                        If you don't have an account then: <a href="signup.php">Signup</a>
                    </div>
                    <!-- Link to the forget password page -->
                    <div class="mt-2">
                        <a href="forget.php">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies for additional functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
