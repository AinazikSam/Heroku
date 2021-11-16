<html>

<head>

    <title>Login page</title>
    <link rel="stylesheet" href="login.css">
</head>
<script type="text/javascript">
    function display(form) {
        if (form.username.value == "Ainazik") {
            if (form.password.value == "12345") {
                location = "ainazik.php"
            } else {
                alert("Invalid Password")
            }
        } else {
            alert("Invalid Username")
        }
    }
</script>

<body>
    <div class="login-box">
        <h1>Login</h1>
    </div>
    <form>
        <input type="text" placeholder="Username" name="username" /><br><br>
        <input type="password" placeholder="Password" name="password" /><br><br>
        <input type="button" value="Sign in" onClick="display(this.form)" />

    </form>

</body>

</html>
</html>
