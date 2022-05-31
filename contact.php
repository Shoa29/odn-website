<head>
	<title>ODN - Oceans Diginett</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="images/logoodn.png" type="image/gif" sizes="24x24">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/contact.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
$servername = "localhost";
$database = "u334027775_odn";
$username = "u334027775_odn_shoa";
$password = "ODNsuccess140421";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      echo 'error';
  }
  

      if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $contact = $_POST['phone'];
      $message = $_POST['message'];
      $service = $_POST['service']
    $sql = mysqli_query($conn, "INSERT INTO queries (name, service, email, contact, message) VALUES ('$name','$service', '$email', '$contact', '$message')")or die(mysqli_error());
  
     echo "Message sent successfully.";

     $to = "oceans.diginett@gmail.com";
      $subject = "Quotation By Client";
      $msg = 'You have received received the following query:- ';
    $msg.='Name= '. $name;
    $msg.=' email id = '. $email;
    $msg.=' contact = '. $contact;
    $msg.=' service = '. $service;
    $msg.=' Message  = '. $message;
    $msg.='Have a good day may god bless you shoa and may all your endeavours and hardwork pay off!';   
    $msg.='Thanks,';
    $msg.='Contact.php';
    $msg = wordwrap($msg,150);
    $headers = "From: Oceans Diginett";
    mail($to, $subject, $msg, $headers);
    header('Location: contact.php');
}
mysqli_close($conn);
?>


  <div class="container modal-content">
    <form method="post" action="contact.php">
      <p>Drop A Message!</p>
      <input type="text" name="name" id="name" placeholder="What shall we call you?"><br>
      <input type="text" name="phone" id="phone" placeholder="Can we get your phone number?"><br>
      <input type="email" name="email" id="email" placeholder="What's your email id?" required><br>
      <select data-placeholder="Choose our Service" name="service" id="service">
        <option label="Choose Service">Choose a Service</option>
        <option value="web">Web Development</option>
        <option value="ai">Data Science/ML</option>
        <option value="app">App Development</option>
        <option value="ux">UX/UI Design</option>
        <option value="web3">Blockchain (Web 3)</option>
        <option value="support">Technical Support</option>
        <option value="other">Other</option>
        </select><br>
      <textarea placeholder="How can we help you?*" rows="6" id="message" name="message" required></textarea><br>
      <input type="submit" value="Send"><br>
    </form>
  
    <div class="drops">
      <div class="drop drop-1"></div>
      <div class="drop drop-2"></div>
      <div class="drop drop-3"></div>
      <div class="drop drop-4"></div>
      <div class="drop drop-5"></div>
    </div>
  </div>
  <script src="js/script.js"></script>
</body>