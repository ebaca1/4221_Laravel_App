<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <main>
            <div class="color-tan">
                <div class="center">
                    <div class="header">
                        <h1>(╯°□°)╯︵ ┻━┻</h1>
                        <h2>Table Flippers Inc</h1>
                        <h1>┬─┬ノ( º _ ºノ)<h1>
                    </div>
                </div>
            </div>

            <img src="/images/FREEIPAD.png" id="freeIpad" alt="CLICK FOR FREE IPAD" width="925" height="300" />

            <div class='login'>
                <p>Login to start flipping tables!</p>
            </div>
            
            
            <div id="backEpic">
                <div id="centerBox">
                    <form action='/user/login' method='POST'>
                        <div class="dontFeelLikeLabel">
                            <p>Username: </p>
                        </div>
                        
                        <div>
                            <input class='userButton' type='text' name='username' id='username' />
                        </div>
                        
                        <div class="dontFeelLikeLabel">
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
            </div>

            <img src="/images/Epic2008.png" id="freeIpad" alt="CLICK TO WIN!!!" width="925" height="300" />

            <footer class="footer">
                <p id="item1">&copy; UNCC Computing & Informatics 2022 : Joe, Shruti, Eric  </p>
                <p>Group 3: The TableFlippers</p>
                <p id="item2">ITSC 4221: Secure Programming and Penetration Testing</p>
            </footer>
        </main>
    </body>
</html>
