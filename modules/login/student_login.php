<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>เข้าสู่ระบบของนักศึกษา - โครงการสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</title>
    <link rel="stylesheet" href="/cooputcc/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/cooputcc/bootstrap/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="/cooputcc/asset/css/login/student_login.css"/>
</head>
<body>
    <!-- Header -->
    <header class="header d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img src="/cooputcc/asset/img/utcclogo.jpg" alt="UTCC Logo">
            <div class="titles">
                <h2>ระบบงานสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</h2>
                <h5 style="color: #FFD600;">> เข้าสู่ระบบของนักศึกษา</h5>
            </div>
        </div>
        <a href="link_to_user_manual.pdf" class="manual-link">
            <i class="fas fa-book"></i> คู่มือการใช้งาน
        </a>
    </header>
    
    <!-- Main Content -->
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="mb-4 bold-text" style="color: #2C75B9; text-align: center;">
                    <i class="fas fa-user-graduate icon"></i> เข้าสู่ระบบของนักศึกษา
                </h3>
                
                <div class="col-md-8 col-lg-6">
                    <div class="login-form">
                        <form>
                            <div class="form-group">
                                <label for="student_id" class="form-label">ชื่อผู้ใช้งาน:</label>
                                <input type="email" class="form-control" id="student_id" placeholder="รหัสนักศึกษา@live4.utcc.ac.th">
                            </div>
                            <div class="form-group">
                                <label for="student_password" class="form-label">รหัสผ่าน:</label>
                                <input type="password" class="form-control" id="student_password" placeholder="รหัสผ่าน">
                            </div>
                            
                            <div class="button-group">
                                <a href="/cooputcc/modules/student/student_dashboard.php" class="btn btn-custom btn-login">
                                    <i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ
                                </a>
                                <a href="/cooputcc/modules/index.php" class="btn btn-custom btn-back">
                                    <i class="fas fa-arrow-left"></i> กลับไปยังหน้าหลัก
                                </a>
                            </div>
                        </form>
                    </div>
                    <p class="forgot-password">กรณีลืมรหัสผ่านเข้าสู่ระบบโปรดติดต่อเจ้าหน้าที่ดูแลโครงการสหกิจศึกษา</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <div>
            <!-- Related Websites -->
            <span>เว็บไซต์ที่เกี่ยวข้อง: |</span>
            <a href="https://department.utcc.ac.th/cooperative/">โครงการสหกิจศึกษา</a> | 
            <a href="https://www.utcc.ac.th">มหาวิทยาลัยหอการค้าไทย</a> |
        </div>
        <div class="footer-address">
            <p>โครงการสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</p>
            <p>126/1 ถนนวิภาวดีรังสิต แขวงดินแดง เขตดินแดง กทม. 10400</p>
            <p>โทร. 02-697-6338, 02-697-6339 email: oei@utcc.ac.th</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="/cooputcc/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
