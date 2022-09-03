<head>
    <title>Thank You</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
    <h1>Thank You</h1>
    <p>Thank you for registering. Here is the information you submitted:</p>
    <?php
        
    ?>
     <dl>
        <!-- access by name -->
    if(isset($_POST["cnic"])
    if (isset($_POST['cnic']) && !empty($_POST['cnic'])) {
    if (preg_match('/^([0-9]{5})[\-]([0-9]{7})[\-]([0-9]{1})+/', $_POST['cnic'])) {
         $cnic = clearInput($_POST['cnic']);
     } else {
         <label>error</label>;
     }
 } else {
    $cnic_error = '<p class="text-danger">Field is not to be empty.</p>';
 }
      <dt>Your CNIC:</dt><dd><?php echo $_POST["cnic"]?></dd>
      <dt>Your Name:</dt><dd><?php echo $_POST["name"]?></dd>
      <dt>Phone Num:</dt><dd><?php echo $_POST["mnumb"]?></dd>
      <!-- Read from the tag value -->
      <dt>Gender:</dt><dd><?php echo $_POST["gender"]?></dd>
      <dt>Your Country:</dt><dd><?php echo $_POST["country"]?></dd>
      <dt>Vacanation Status:</dt><dd><?php echo $_POST["Vacc"]?></dd>
    </dl>
    </body>

