<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-5">
    <h2>Danh Sách Học Phần</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>MaHocPhan</th>
                <th>TenHocPhan</th>
                <th>Số Tín Chỉ</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hocPhanList as $hocPhan): ?>
            <tr>
                <td><?= $hocPhan['MaHocPhan'] ?></td>
                <td><?= $hocPhan['TenHocPhan'] ?></td>
                <td><?= $hocPhan['SoTinChi'] ?></td>
                <td>
                    <a href="index.php?action=dangky&MaHocPhan=<?= $hocPhan['MaHocPhan'] ?>" class="btn btn-success btn-sm">Đăng Ký</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'app/views/shares/footer.php'; ?>
