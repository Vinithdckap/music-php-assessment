<head>
    <title>Login form</title>
    <style>
        body{
            font-style: italic;
            overflow-x: hidden;
        }

        .login-form {
            width: 360px;
            height: 362px;
            margin: auto;
            border-radius: 18px;
            float: right;
            position: relative;
            right: 78px;
            top: 159px;
            background-color: #d7d7d7;

        }

        h1 {
            text-align: center;
            padding-top: 15px;
        }

        h4 {
            text-align: center;
        }

        form {
            width: 300px;
            margin-left: 20px;
        }

        form label {
            display: flex;
            margin-top: 20px;
            font-size: 18px;
        }

        form input {
            width: 100%;
            padding: 7px;
            border: none;
            border-radius: 6px;
            outline: none;
        }
        a {
            text-decoration: none;
        }
        .btn{
            width: 302px;
            height: 35px;
            margin-top: 37px;
            border: none;
            background:#344a72;
            color: white;
            font-size: 18px;
            border-radius: 6px;
        }
        p {
            text-align: center;
            padding-top: 20px;
            font-size: 15px;
        }
        p {
            text-align: center;
            color: black;
            font-size: 15px;
            position: relative;
            bottom: 79px;
            font-weight: 600;
        }
        p.link {
            position: relative;
            top: 441px;
            left: 586px;
            font-size: 17px;
        }
    </style>
</head>
<body>
<div class="login-form">
    <h1>Login</h1>
    <form action="/login" method="post" enctype="multipart/form-data">
        <label>Email</label>
        <input type="email" placeholder="" name="email"/>
        <label>Password</label>
        <input type="password" placeholder="" name="password"/>
        <button class="btn" name="submit">Submit</button class="btn" name="submit">
    </form>
</div>
<p class="link">
    Not have an account?  <a href="#">Sign Up Here</a>
</p>
</body>

</html>