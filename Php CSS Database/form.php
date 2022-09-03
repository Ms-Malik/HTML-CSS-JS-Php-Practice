<html>
<head>
    <title> Novell Services Login</title>
    <link href="common.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <form action="process_registration_multi.php" method="post">
    <div style="width: 30em;">
    <label for="username">UserName</label>
    <input type="text" name="username" id="username" value="">
    <label for="passwrd">Password</label>
    <input type="password" name="pasword" id="passwrd" value="">
    <label for="cofe">City of Employement</label>
    <input type="text" name="coe" id="cofe" value="hello">
    <label for="ws">Web Server</label>
    <select name="ws[]" id="ws" size="2" multiple="multiple" placeholder="__Choose a Server__">
        <option value="apache">Apache</option>
        <option value="tomcat">TomCat</option>
        <option value="iis">IIS</option>
        <option value="nginx">Nginx</option>
    </select>
    <label for="psur">Please specify your role:</label>
    <input type="radio" name="role" id="psur" value="A">Admin
    <input type="radio" name="role" id="psur" value="E">Engineer
    <input type="radio" name="role" id="psur" value="M">Manager
    <input type="radio" name="role" id="psur" value="G">Guest
    <label for="ss">Single Sign-on to the following:</label>
    <input type="checkbox" name="sign" id="ss" value="M">Mail
    <input type="checkbox" name="sign" id="ss" value="P">Payroll
    <input type="checkbox" name="sign" id="ss" value="S">Self-Service
    <input type="submit" name="submitButton" id="submitButton" value="Login" />
    <input type="reset" name="resetButton" id="resetButton" value="Reset Form" style="margin-right: 20px;" />
</form>
</body>
</html>
