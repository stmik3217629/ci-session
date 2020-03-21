<html>

<head>
</head>

<body>
    Sign In

    <pre>
Username: admin
Password: admin123
    </pre>

    <form action="" method="post">
        <table>
            <?php if ($error): ?>
            <tr>
                <td>Error</td>
                <td></td>
                <td><?php print $error ?></td>
            </tr>
            <?php endif ?>
            </tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" /></td>
            </tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="action" value="SignIn" /></td>
            </tr>
        </table>
    </form>
</body>
</html>