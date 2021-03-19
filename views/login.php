<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <?php 
			require ROOT.'/controllers/AuthorizationController.php';

			if (isset($_POST['submit'])) 
			{
				$controller = new AuthorizationController();
				$controller->actionAuthorize($_POST);
			}
        ?>
        <form method="POST" action="">
            User name <input type="text" name="name">
            Password <input type="password" name="password">
            <input type="submit" value="Login">
        </form>
    </body>
</html>