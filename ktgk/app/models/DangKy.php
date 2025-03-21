<?php
require_once 'app/config/database.php';

class DangKy {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    // Lấy tất cả đăng ký
    public function getAll() {
        $query = "SELECT * FROM DangKy";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Thêm đăng ký mới
    public function add($maSV, $ngayDK) {
        $query = "INSERT INTO DangKy (MaSV, NgayDK) VALUES (:MaSV, :NgayDK)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':MaSV', $maSV);
        $stmt->bindParam(':NgayDK', $ngayDK);
        return $stmt->execute();
    }
}
?>
