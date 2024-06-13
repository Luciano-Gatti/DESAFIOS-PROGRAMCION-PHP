<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form action="/login.php" method="post">
            <div>
                <label for="username"> Username: </label>
                <input
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                />
            </div>
            <div>
                <label for="password"> Password: </label>
                <input                        
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    type="password"
                />
            </div>
            <input type="submit" value="Sign in">
        </form>

        <?php if(isset($permissions) && is_array($permissions) && in_array("edit_profile", $permissions)) { ?>
            <!-- Mostrar el botón de edición del perfil -->
            <button>Edit Profile</button>
        <?php } ?>
    </body>
</html>