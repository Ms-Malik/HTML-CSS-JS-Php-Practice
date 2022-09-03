<head>
    <title>Thank You</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
    <h1>Thank You</h1>
    <p>Thank you for registering. Here is the information you submitted:</p>
    <?php
        $webs="";
        $ssign="";
        if ( isset( $_POST["ws"] )) 
        {
            foreach($_POST["ws"] as $web)
            {
                $webs.=$web." , ";
            }
        }
        if(isset($_POST["sign"]))
        {
            foreach($_POST["sign"] as $signon)
            {
                $ssign.=$signon." , ";
            }
        }
        // // $pattern=^([0-9]+)(?=.*[@#$%*][A-Za-z]){10,}$;
        // if(isset($_POST["pasword"]))
        // {
        //     $pass=$_POST["pasword"];
        //     if(preg_match($pattern,$pass)==1)
        //     {
                
        //     }
        // }
    ?>
     <dl>
        <!-- access by name -->
      <dt>UserName</dt><dd><?php echo $_POST["username"]?></dd>
      <dt>Password</dt><dd><?php echo $_POST["pasword"]?></dd>
      <dt>City of Employement</dt><dd><?php echo $_POST["coe"]?></dd>
      <!-- Read from the tag value -->
      <dt>Please specify your role:</dt><dd><?php echo $_POST["role"]?></dd>
    </dl>
    Web Server:
    <ul>
        <li><?php echo $webs ?></li>
    </ul></br>
    Selected Sign-on:
    <ul>
        <li><?php echo $ssign ?></li>
    </ul></br>
    </body>

