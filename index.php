<?php
require_once 'vendor/autoload.php';

// B1: Bắt giá trị controller và action
$controller = isset($_GET['controller'])?   $_GET['controller']:'home';
$action     = isset($_GET['action'])?       $_GET['action']:'index';

// B2: Chuẩn hóa tên trước khi gọi
$controller = ucfirst($controller);
$controller .= 'Controller';
$controllerPath = 'controllers/'.$controller.'.php';

// B3. Để gọi nó Controller
if(!file_exists($controllerPath)){
    die('Lỗi! Controller này không tồn tại');
}
require_once($controllerPath);
// B4. Tạo đối tượng và gọi hàm của Controller
$myObj = new $controller();  //controller=home > new HomeController()
$myObj->$action(); //action=index > index()
?>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/sendemail/Utils/MyEmailServer.php';
require $_SERVER['DOCUMENT_ROOT'].'/sendemail/Utils/EmailSender.php';
require 'vendor/autoload.php';


$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("","Nguyễn văn Thái");
