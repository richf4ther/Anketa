<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="refresh" content="3; url=../index.html">
	<title>Спасибо!</title>
	<meta name="generator">
	<script type="text/javascript">
		setTimeout('location.replace("/")', 3000);
	</script>
</head>
<body>
    <h3>Спасибо! Ваши данные приняты</h3>
    <p>Вы вернетесь на сайт через 3 секунды</p>
    <style>
        body {
            text-align: center;
        }
        h1 {
            margin-top: 200px;
        }
    </style>
<?php 
$selectedExperience  = 'Нет опыта';
if(isset($_POST['experience']) && is_array($_POST['experience']) && count($_POST['experience']) > 0){
    $selectedExperience = implode(', ', $_POST['experience']);
};

$to      = 'hello@cosmosoc.com';

$subject = 'Кто то заполнил анкету'; 

$message = '
        Имя: '.$_POST['name'].' 
        Год рождения: '.$_POST['year'].'
        Место проживания: '.$_POST['address'].'
        Skype: '.$_POST['skype'].'
        E-mail: '.$_POST['email'].'
        Опыт: '.$selectedExperience.'
        Уровень JS: '.$_POST['rangeSlider'].'
        О себе: '.$_POST['comment'].'
';

$headers  = "MIME-Version: 1.0";
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers = "From: <hello@cosmosoc.com>" . "\r\n";

mail($to, $subject, $message, $headers); 

?>
</body>
</html>