<?php
// Bật hiển thị lỗi
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Require các Controller cần thiết
require_once 'app/controllers/HocPhanController.php';
require_once 'app/controllers/SinhVienController.php';
require_once 'app/controllers/DangKyController.php';
require_once 'app/controllers/DangNhapController.php';

// Lấy request từ URL
$request = $_GET['url'] ?? 'Sinhvien/index';  // Nếu không có action mặc định là 'Sinhvien/index'

// Xử lý controller và action
$segments = explode('/', $request);

// Xác định Controller và Action
$controllerName = ucfirst($segments[0]) . 'Controller';  // SinhvienController, HocPhanController, v.v.
$action = $segments[1] ?? 'index';  // Mặc định gọi action "index"
$param = $segments[2] ?? null;  // Nếu có tham số thứ 3 (ví dụ MaHocPhan)

// Kiểm tra Controller tồn tại không
if (file_exists("app/controllers/$controllerName.php")) {
    require_once "app/controllers/$controllerName.php";

    if (class_exists($controllerName)) {
        $controller = new $controllerName();

        // Kiểm tra Action tồn tại không
        if (method_exists($controller, $action)) {
            if ($param) {
                $controller->$action($param);
            } else {
                $controller->$action();
            }
        } else {
            echo "Lỗi 404: Phương thức không tồn tại.";
        }
    } else {
        echo "Lỗi 404: Controller không tồn tại.";
    }
} else {
    echo "Lỗi 404: Không tìm thấy trang.";
}
?>
