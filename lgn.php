<html lang="en">
<head>
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com"crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="11.css">
    <script defer src="lgnfile.js"></script>
</head>
<body>
    <div class="container">
        <form id="form" action="#" method="" >
            <h1> Login form</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text">
             <div class="error"></div>
            </div>
          
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password" name="password" type="password">
                <div class="error"></div>
            </div>
            <!--<button type="submit" name="SignUp" >Sign Up</button> -->
            
          <div class="type">  <input type="submit" name="SignUp"  value="SignUp">  </div>
        </form>
    </div>
</body>
</html>
