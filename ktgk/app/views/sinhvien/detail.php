<?php include 'app/views/shares/header.php'; ?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white py-3">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-user-graduate fs-4 me-2"></i>
                        <h3 class="card-title mb-0">Thông Tin Chi Tiết Sinh Viên</h3>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="row g-0">
                        <!-- Cột ảnh sinh viên -->
                        <div class="col-md-4 border-end">
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <img src="<?= 'public/' . $sinhVien['Hinh'] ?>" alt="<?= $sinhVien['HoTen'] ?>" 
                                        class="img-fluid rounded-circle shadow" style="width: 200px; height: 200px; object-fit: cover;">
                                </div>
                                <h4 class="mb-1"><?= $sinhVien['HoTen'] ?></h4>
                                <p class="text-muted mb-2">MSSV: <?= $sinhVien['MaSV'] ?></p>
                                <span class="badge bg-primary px-3 py-2 rounded-pill">
                                    Ngành: <?= $sinhVien['MaNganh'] ?>
                                </span>
                            </div>
                        </div>

                        <!-- Cột thông tin chi tiết -->
                        <div class="col-md-8">
                            <div class="p-4">
                                <h5 class="border-bottom pb-2 mb-3">
                                    <i class="fas fa-info-circle me-2"></i>Thông tin cá nhân
                                </h5>
                                
                                <div class="row mb-4">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="text-muted small mb-1">Mã sinh viên</label>
                                            <p class="fs-5 fw-medium"><?= $sinhVien['MaSV'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="text-muted small mb-1">Họ và tên</label>
                                            <p class="fs-5 fw-medium"><?= $sinhVien['HoTen'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-4">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="text-muted small mb-1">Giới tính</label>
                                            <p class="fs-5">
                                                <?php if($sinhVien['GioiTinh'] == 'Nam'): ?>
                                                    <i class="fas fa-mars text-primary me-1"></i>
                                                <?php else: ?>
                                                    <i class="fas fa-venus text-danger me-1"></i>
                                                <?php endif; ?>
                                                <?= $sinhVien['GioiTinh'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="text-muted small mb-1">Ngày sinh</label>
                                            <p class="fs-5">
                                                <i class="fas fa-calendar-alt text-info me-1"></i>
                                                <?= date('d/m/Y', strtotime($sinhVien['NgaySinh'])) ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="text-muted small mb-1">Mã ngành</label>
                                            <p class="fs-5">
                                                <i class="fas fa-graduation-cap text-success me-1"></i>
                                                <?= $sinhVien['MaNganh'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-4 pt-3 border-top">
                                    <div class="d-flex gap-2">
                                        <a href="index.php?url=Sinhvien/index" class="btn btn-outline-secondary">
                                            <i class="fas fa-arrow-left me-1"></i> Quay lại
                                        </a>
                                        <a href="index.php?url=Sinhvien/edit/<?= $sinhVien['MaSV'] ?>" class="btn btn-warning">
                                            <i class="fas fa-edit me-1"></i> Chỉnh sửa
                                        </a>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <i class="fas fa-trash-alt me-1"></i> Xóa
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Xác nhận xóa -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Bạn có chắc chắn muốn xóa sinh viên <strong><?= $sinhVien['HoTen'] ?></strong> không?</p>
                <p class="text-danger"><small>Hành động này không thể hoàn tác.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <a href="index.php?url=Sinhvien/delete/<?= $sinhVien['MaSV'] ?>" class="btn btn-danger">Xác nhận xóa</a>
            </div>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>