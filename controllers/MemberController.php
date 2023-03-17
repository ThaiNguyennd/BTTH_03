<?php
include("services/MemberService.php");
class MemberController {
    public function index() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = Process_login($username, $password);

            if ($user) {
                include 'views/admin/admin.twig';
                exit;
            } else {
                $message = 'Tên đăng nhập hoặc mật khẩu không đúng';
            }
        }

        include("views/admin/admin.twig");
    }

}