<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sinh Viên</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
        }
        
        .nav-item {
            margin: 0 5px;
        }
        
        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
            border-radius: 5px;
            padding: 8px 15px !important;
        }
        
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            background-color: rgba(255, 255, 255, 0.3);
            border-bottom: 2px solid white;
        }
        
        .user-badge {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            padding: 5px 15px;
        }
        
        .logo-img {
            height: 40px;
            margin-right: 10px;
        }
        
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header Chính với Navbar từ Bootstrap 5 -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
            <div class="container">
                <!-- Logo và Tiêu đề -->
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <i class="fas fa-graduation-cap fa-2x me-2"></i>
                    <span>QUẢN LÝ SINH VIÊN</span>
                </a>
                
                <!-- Nút toggle cho mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Menu chính -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">
                                <i class="fas fa-home me-1"></i> Trang chủ
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="sinhvien.php">
                                <i class="fas fa-user-graduate me-1"></i> Sinh viên
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=hocphan"">
                                <i class="fas fa-book me-1"></i> Học Phần
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dangky.php">
                                <i class="fas fa-edit me-1"></i> Đăng ký
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">
                                <i class="fas fa-sign-in-alt me-1"></i> Đăng nhập
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
       
    </header>

    <!-- Nội dung trang sẽ được thêm vào đây -->
    <div class="container my-4">
        <!-- Nội dung trang -->
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>