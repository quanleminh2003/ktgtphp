<?php include 'app/views/shares/header.php'; ?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-user-plus fs-4 me-2"></i>
                        <h3 class="mb-0">Tạo Sinh Viên Mới</h3>
                    </div>
                </div>
                <div class="card-body p-4">
                    <form action="index.php?url=Sinhvien/create" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="MaSV" name="MaSV" placeholder="Nhập mã sinh viên" required>
                                    <label for="MaSV">Mã Sinh Viên</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="HoTen" name="HoTen" placeholder="Nhập họ tên" required>
                                    <label for="HoTen">Họ Tên</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="GioiTinh" name="GioiTinh" required>
                                        <option value="" selected disabled>Chọn giới tính</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
                                    <label for="GioiTinh">Giới Tính</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="NgaySinh" name="NgaySinh" required>
                                    <label for="NgaySinh">Ngày Sinh</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="MaNganh" name="MaNganh" placeholder="Nhập mã ngành" required>
                                    <label for="MaNganh">Mã Ngành</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="Hinh" class="form-label">Hình Ảnh</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="Hinh" name="Hinh" required>
                                        <label class="input-group-text" for="Hinh">
                                            <i class="fas fa-upload"></i>
                                        </label>
                                    </div>
                                    <div class="form-text">Chọn ảnh đại diện cho sinh viên (JPG, PNG)</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 text-center">
                            <div class="preview-image mb-3 d-none">
                                <img id="previewImg" src="#" alt="Ảnh xem trước" class="img-thumbnail" style="max-height: 200px;">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-outline-secondary" onclick="window.history.back();">
                                <i class="fas fa-arrow-left me-1"></i> Quay lại
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Lưu thông tin
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script để xem trước ảnh -->
<script>
document.getElementById('Hinh').onchange = function(evt) {
    const preview = document.getElementById('previewImg');
    const previewDiv = document.querySelector('.preview-image');
    
    const file = evt.target.files[0];
    if (file) {
        preview.src = URL.createObjectURL(file);
        previewDiv.classList.remove('d-none');
    } else {
        previewDiv.classList.add('d-none');
    }
};
</script>

<?php include 'app/views/shares/footer.php'; ?>