<?php
try 
{		
$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 100);
$email = substr(htmlspecialchars(trim($_POST['email'])), 0, 30);
$text = substr(htmlspecialchars(trim($_POST['text'])), 0, 1500);

$message = "Имя: $name\ \nEmail: $email\nТекст: $text\n";
$subj = "Форма обратной связи с сайта pssm-spb.ru";
$to = "info@pssm-spb.ru"; 
$from="admin@pssm-spb.ru";
$headers = "From: $from\nReply-To: $from\n";

if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
	$secret = '6LdqUx0UAAAAAOKS5KnHbxkQrmUyF56ngb2kXL1m';
	$ip = $_SERVER['REMOTE_ADDR'];
	$response = $_POST['g-recaptcha-response'];
	$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
	$arr = json_decode($rsp, TRUE);
	if($arr['success']){
		
		if (!mail($to, $subj, $message, $headers)){
			throw new RuntimeException('Ваше сообщение не отправлено.');
			}
			throw new RuntimeException('Ваше сообщение отправлено.');
		} 
	}
}


catch (RuntimeException $e) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title></title>
	<link href="css/normalize.css" rel="stylesheet"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' rel='stylesheet' type='text/css'/>	
    <link href="css/style.css" rel="stylesheet"/>	
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">			
					<h2 class="text-center" style="color: #fff"><strong><?echo $e->getMessage();}?></strong></h2>
                </div>
            </div>
        </div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            setTimeout('location.replace("/contact.html")', 2300);
        </script>

    </body>
</html>