<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-5">
    <h2>Xác nhận xóa sinh viên</h2>
    <p>Bạn có chắc chắn muốn xóa sinh viên <?= $sinhVien['HoTen'] ?> không?</p>
    <form action="index.php?action=delete&MaSV=<?= $sinhVien['MaSV'] ?>" method="POST">
        <button type="submit" class="btn btn-danger">Xóa</button>
        <a href="index.php" class="btn btn-secondary">Hủy</a>
    </form>
</div>

<?php include 'app/views/shares/footer.php'; ?>
