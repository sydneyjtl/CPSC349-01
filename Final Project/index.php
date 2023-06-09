<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <?php echo "Hello";?>
        
        <ul>
            <li class="left"><a class="active" href="index.php">HOME</a></li>
            <li class="left"><a href="./collection.html">COLLECTION</a></li>
            <li class="left"><a href="./upload.html">UPLOAD</a></li>
            <li class="right">
                <div class="nav-links">
                    <button onclick="document.getElementById('login').style.display='block'">LOGIN</button>
                </div>
            </li>
            <li class="right">
                <div class="nav-links">
                    <button onclick="document.getElementById('signup').style.display='block'">SIGN UP</button>
                </div>
            </li>
        </ul>

        <div style = "padding:30px;text-align: center;">
            <h1>WELCOME TO TRADING CARD COLLECTION SITE</h1>
            <img src="images/cards.jpeg" alt="Cards" style="float:center;width:800px;">
        </div>

        <div id="login" class="modal">
            <form class="modal-content animate" action="/login_page.php" method="post">
                <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
                <div class="container">
                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <label for="password"><b>Password</b></label>
                    <input type="text" placeholder="Enter Password" name="password" required>
                    <button type="submit" class="loginbtn">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember">Remember me
                    </label>
                </div>
                
                <div class="container" style="background-color: #f1f1f1">
                    <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="password">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
        <script>
            var modal = document.getElementById('login')
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none"
                }
            }
        </script>
    </body>
</html>