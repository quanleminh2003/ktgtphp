<?php
require_once 'app/config/database.php';

class HocPhan {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    // Lấy tất cả học phần
    public function getAll() {
        $query = "SELECT * FROM HocPhan";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy thông tin học phần theo mã học phần
    public function getByMaHP($maHP) {
        $query = "SELECT * FROM HocPhan WHERE MaHP = :MaHP";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':MaHP', $maHP);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Thêm học phần mới
    public function add($maHP, $tenHP, $soTinChi) {
        $query = "INSERT INTO HocPhan (MaHP, TenHP, SoTinChi) 
                  VALUES (:MaHP, :TenHP, :SoTinChi)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':MaHP', $maHP);
        $stmt->bindParam(':TenHP', $tenHP);
        $stmt->bindParam(':SoTinChi', $soTinChi);
        return $stmt->execute();
    }
}
?>
