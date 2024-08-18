<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
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
                    <!-- Heading for the forget password page -->
                    <h1 class="mb-4">Forget Password</h1>
                    <!-- Forget password form -->
                    <form action="dofor.php" method="post">
                        <!-- Username input field -->
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="un" class="form-control" required>
                            <?php
                            // Display error message if 'er' query parameter is set to 1
                            if (isset($_GET["er"]) && ($_GET["er"] == 1)) {
                                echo '<div class="text-danger mt-2">Wrong username</div>';
                            }
                            ?>
                        </div>
                        <!-- Email input field -->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="e" class="form-control" required>
                            <?php
                            // Display error message if 'er' query parameter is set to 0
                            if (isset($_GET["er"]) && ($_GET["er"] == 0)) {
                                echo '<div class="text-danger mt-2">Wrong email</div>';
                            }
                            ?>
                        </div>
                        <!-- New password input field -->
                        <div class="form-group">
                            <label for="password">New Password:</label>
                            <input type="password" id="password" name="p" class="form-control" required>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- Link to login page -->
                    <div class="mt-3">
                        Go to <a href="login.php">Login</a>
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
