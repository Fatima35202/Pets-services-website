<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
                    <!-- Heading for the signup page -->
                    <h1 class="mb-4">Signup</h1>
                    <!-- Signup form -->
                    <form action="dosign.php" method="post">
                        <!-- Username input field -->
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="un" class="form-control" required>
                        </div>
                        <!-- Email input field -->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="e" class="form-control" required>
                        </div>
                        <!-- Password input field -->
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="p" class="form-control" required>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary">Signup</button>
                    </form>
                    <!-- Link to login page if the user already has an account -->
                    <div class="mt-3">
                        If you already have an account then: <a href="login.php">Login</a>
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
