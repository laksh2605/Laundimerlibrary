<HTML>
    <head>
        <title>Laundimer Library</title>
        <link rel="stylesheet" href="header.css">
        <style>
            .signupform{
                text-align:center;
                font-size:18px;
                margin-top: 40;
            }
        </style>
    </head>
    <body>
      <?php require 'navbar.php'; ?>
        <div>
            <div class="signupform">
                <form action="addadminsql.php" method="POST">
                    Fore Name: <input type="text" name="forename"/></br></br>
                    Sure Name: <input type="text" name="surname"/></br></br>
                    User Name: <input type="text" name="username"/></br></br>
                    Password: <input type="password" name="password"/></br></br>
                    Email Address: <input type="text" name="email"/></br></br>
                    DOB: <input type="text"  name="dob"/></br></br>
                    User Role: <input type="text"  name="userRole"/></br></br>
                    <input type="submit" value="Sign Up"/>
                </form>
            </div>
        </div>
    </body>
</HTML>