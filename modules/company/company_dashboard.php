<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard สถานประกอบการ - โครงการสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</title>
  <link rel="stylesheet" href="/cooputcc/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/cooputcc/bootstrap/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="/cooputcc/asset/css/dashboard/company_dashboard.css" />
</head>
<body>
  <!-- Header -->
  <header class="header d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center">
      <img src="/cooputcc/asset/img/utcclogo.jpg" alt="UTCC Logo" />
      <div class="titles">
        <h2>ระบบงานสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</h2>
        <h5 style="color: #ffd600">ยินดีต้อนรับ [ชื่อสถานประกอบการ]</h5>
      </div>
    </div>
    <div class="d-flex align-items-center">
      <a href="link_to_user_manual.pdf" class="manual-link">
        <i class="fas fa-book"></i> คู่มือการใช้งาน
      </a>
      <a href="/cooputcc/modules/login/student_login.php" class="logout-btn">
        <i class="fas fa-sign-out-alt"></i> ออกจากระบบ
      </a>
    </div>
  </header>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="#"><i class="fas fa-user-tie icon"></i> ข้อมูลพี่เลี้ยงสหกิจ</a>
    <a href="#"><i class="fas fa-briefcase icon"></i> ข้อมูลการรับสมัครฝึกงาน</a>
    <a href="#"><i class="fas fa-check-circle"></i> ตรวจสอบการรับสมัครฝึกงาน</a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <div class="dashboard-header">
      <div class="students">
        <i class="fas fa-user-graduate"></i>
        <div class="text">นักศึกษาฝึกงานในบริษัท<br />[1 คน]</div>
      </div>
      <div class="mentors">
        <i class="fas fa-user-tie icon"></i>
        <div class="text">พี่เลี้ยงสหกิจในบริษัท<br />[1 คน]</div>
      </div>
      <div class="internship_recruitment">
        <i class="fas fa-briefcase icon"></i>
        <div class="text">ประกาศรับสมัครฝึกงาน<br />[1 ตำแหน่ง]</div>
      </div>
    </div>

    <!-- ข้อมูลนักศึกษาในความดูแล -->
    <div class="highlight">
      ข้อมูลนักศึกษาฝึกงานในบริษัท
    </div>

    <!-- Data Search bar -->
    <div class="filter-section">
      <div class="form-group">
        <label for="studentId">รหัสนักศึกษา:</label>
        <input type="text" id="studentId" class="form-control" placeholder="กรอกรหัสนักศึกษา" />
      </div>
      <div class="form-group">
        <label for="studentName">ชื่อนักศึกษา:</label>
        <input type="text" id="studentName" class="form-control" placeholder="กรอกชื่อนักศึกษา" />
      </div>
      <div class="form-group">
        <label for="positionName">ตำแหน่งงาน:</label>
        <input type="text" id="positionName" class="form-control" placeholder="กรอกตำแหน่งงาน" />
      </div>
      <div class="form-group">
        <label for="mentorName">ชื่อพี่เลี้ยงสหกิจ:</label>
        <input type="text" id="mentorName" class="form-control" placeholder="กรอกชื่อพี่เลี้ยงสหกิจ" />
      </div>
      <button class="btn btn-primary"><i class="fas fa-search"></i> ค้นหา</button>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div>
      <!-- Related Websites -->
      <span>เว็บไซต์ที่เกี่ยวข้อง: |</span>
      <a href="https://department.utcc.ac.th/cooperative/">โครงการสหกิจศึกษา</a>
      | <a href="https://www.utcc.ac.th">มหาวิทยาลัยหอการค้าไทย</a> |
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
