<?php 

$name = $_POST['name'];
$phone = $_POST['phone-number'];
$email = $_POST['email'];
$name = $_POST['name'];
$token = "5175198594:AAFDz41-lhcvAezsZctSJPCwW_meIduCLOw";
$chat_id = "-741391332";

$message = $_POST['msg'];

$arr = array(
    'Имя пользователья: ' => $name,
    'Телефон: ' => $phone,
    'Email: ' => $email,

    'Сообщения пользователья: ' => $message,
);

foreach($arr as $key => $value) {
    $txt .= "<b>" . $key . "<b>" . $value . "%0A";
};


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    echo '<h1 class="success">Сообщение отправлено!</h1>';
}
else{
    echo "Error";
}

?>

/* https://api.telegram.org/bot5175198594:AAFDz41-lhcvAezsZctSJPCwW_meIduCLOw/getupdates */