<?php
require_once 'app/models/HocPhan.php';
require_once 'app/models/SinhVien.php';

class HocPhanController {

    private $hocPhanModel;

    public function __construct() {
        // Khởi tạo model HocPhan
        $this->hocPhanModel = new HocPhan();
    }

    // Hiển thị danh sách học phần
    public function index() {
        // Lấy tất cả học phần từ model
        $hocPhanList = $this->hocPhanModel->getAll();
        require_once 'app/views/hocphan/index.php';  // Gọi view để hiển thị danh sách học phần
    }

    // Đăng ký học phần
    public function dangky($maHocPhan) {
        if (!isset($_SESSION['MaSV'])) {
            // Nếu sinh viên chưa đăng nhập, chuyển hướng đến trang đăng nhập
            header('Location: index.php?action=login');
            exit();
        }

        $maSV = $_SESSION['MaSV'];  // Lấy Mã Sinh Viên từ session

        // Gọi phương thức model để thực hiện đăng ký học phần cho sinh viên
        $result = $this->hocPhanModel->register($maSV, $maHocPhan);

        if ($result) {
            // Nếu đăng ký thành công, quay lại trang danh sách học phần
            header('Location: index.php?action=hocphan');
        } else {
            // Nếu không thành công, hiển thị lỗi hoặc thông báo
            echo "Đăng ký học phần không thành công!";
        }
    }

    // Hiển thị chi tiết học phần (nếu cần)
    public function detail($maHocPhan) {
        // Lấy thông tin chi tiết học phần
        $hocPhan = $this->hocPhanModel->getByMaHocPhan($maHocPhan);
        require_once 'app/views/hocphan/detail.php';  // Gọi view để hiển thị chi tiết học phần
    }
}
?>
