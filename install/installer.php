<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>2Twenty Installer Script</title>
        <link rel="stylesheet" href="css/installer.css">
    </head>

    <body>

        <div class='container'>
            <div class='c-inner'>
                <h1 class='header'>Incredibly Reasonable Installer Script (IRIS)</h1>
                <p class='regular'>
                    Hello! If you've found yourself here, it's because you haven't installed the program properly or at all.<br/>
                    <b>Note</b>: If you haven't, don't forget to delete the <code>/install</code> directory!
                </p>
                <hr/>
                <p class='regular'>
                    This is a very simple install script. There's only one step necessary!<br/>
                    Here, all you have to do is set up an administrator account and specify your MySQL server's hostname + login.<br/>
                    The rest of the leg work will be handled for you. Make sure it's secure!
                    <br/><b>Note</b>: The database name and tables are pre-determined. MySQL is <i>required</i>.
                </p>
                <form method="POST" action="src/db_setup.php">

                    <h2 class='header'>Set up MySQL access</h2>
                    <label for='hostname'>Database hostname</label>
                    <input type='text' name='sql_hostname' placeholder='my.database.net:1433'>
                    <label for='hostname'>SQL username</label>
                    <input type='text' name='sql_username' placeholder='SQL username here'>
                    <label for='hostname'>SQL password</label>
                    <input type='password' name='sql_password' placeholder='SQL password here'>

                    <h2 class='header'>Set up admin account</h2>
                    <label for='username'>Username</label>
                    <input type='text' name='username' placeholder='Administrator username here'>
                    <label for='password'>Password</label>
                    <input type='password' name='password' placeholder='Administrator password here'>

                    <input type='submit'>
                </form>
            </div>
        </div>

    </body>

</html>
