<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <main>
            <div class="header">
                <img src="/images/fleep.jpg" alt="TableFlipping is our passion"  />
            </div>

            <div class='login'>
                <p> Login to Your Account</p>
            </div>
        
            <div id="centerBox">
                <form action='/user/login' method='POST'>
                    <div class='userText'>
                        <p>Username: </p>
                    </div>
                    
                    <div>
                        <input class='userButton' type='text' name='username' id='username' />
                    </div>
                    
                    <div class='passText'>
                        <p>Password: </p>
                    </div>
                    
                    <div>
                        <input class='passButton' type='password' name='password' id='password' />
                    </div>
                    <br>
                    <br>
                    
                    <div>
                        <input class='submitButton' type='submit' />
                    </div>
                    
                    <div class='extraText'>
                        <p>Don't have an account? Register <a href="/user/register">HERE</a></p>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>
