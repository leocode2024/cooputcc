<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard นักศึกษาสหกิจศึกษา - โครงการสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</title>
    <link rel="stylesheet" href="/cooputcc/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/cooputcc/bootstrap/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/cooputcc/asset/css/dashboard/student_coop_dashboard.css" />

  </head>
  <body>
    <!-- Header -->
    <header class="header d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <img src="/cooputcc/asset/img/utcclogo.jpg" alt="UTCC Logo" />
        <div class="titles">
          <h2>ระบบงานสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</h2>
          <h5 style="color: #ffd600">> ยินดีต้อนรับ [ชื่อนักศึกษา]</h5>
        </div>
      </div>
      <div class="d-flex align-items-center">
        <a href="link_to_user_manual.pdf" class="manual-link"
          ><i class="fas fa-book"></i> คู่มือการใช้งาน</a
        >
        <a href="/cooputcc/modules/login/student_login.php" class="logout-btn"
          ><i class="fas fa-sign-out-alt"></i> ออกจากระบบ
        </a>
      </div>
    </header>

    <!-- Sidebar -->
    <div class="sidebar">
      <a href=""><i class="fas fa-user"></i> แก้ไขข้อมูลนักศึกษา</a>
      <button class="dropdown-btn"><i class="fas fa-briefcase"></i> สมัครงานสหกิจ 
        <i class="fas fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a href=""><i class="fas fa-search"></i> ค้นหา/สมัครงาน</a>
        <a href=""><i class="fas fa-calendar-alt"></i> เลือกเทอมสหกิจศึกษา</a>
        <a href=""><i class="fas fa-check-circle"></i> ตรวจสอบสถานะสมัครงาน</a>
      </div>
    </div>

    <!-- Main Content -->
    <div class="content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <h4 class="mb-5 bold-text">ข้อมูลนักศึกษา</h4>
            <img src="/cooputcc/asset/img/student.jpg" alt="Student Image" class="student-image" />
            <div class="student-info">
              <div class="info-section">
                <div>
                  <h5>ข้อมูลส่วนตัว</h5>
                  <p><strong>ชื่อ - สกุล:</strong> [นายใจดี มีใจ]</p>
                  <p><strong>รหัสนักศึกษา:</strong> [123456789]</p>
                  <p><strong>คณะ:</strong> [วิทยาศาสตร์และเทคโนโลยี]</p>
                  <p><strong>สาขา:</strong> [เทคโนโลยีสารสนเทศ]</p>
                </div>
                <div>
                  <h5>สถานะการสมัครงาน</h5>
                  <p><strong>บริษัทที่สมัคร:</strong> [สถานะการสมัคร]</p>
                </div>
                <div>
                  <h5>การฝึกงานปัจจุบัน</h5>
                  <p><strong>ตำแหน่งที่ฝึกงาน:</strong> [IT Support]</p>
                  <p><strong>ชื่อพี่เลี้ยงสหกิจ:</strong> [นายมีชัย แจ้งเกิด]</p>
                  <p><strong>วันที่เริ่มฝึกงาน:</strong> [12-02-2568]</p>
                  <p><strong>วันที่สิ้นสุดฝึกงาน:</strong> [12-02-2568]</p>
                  <p><strong>สถานประกอบการ:</strong> [Google Thailand]</p>
                  <p><strong>ที่อยู่:</strong> [12 แขวงห้วยขวาง เขตห้วยขวาง กรุงเทพมหานคร]</p>
                  <p><strong>เบอร์โทรศัพท์:</strong> [02-123-456]</p>
                  <p><strong>เบอร์โทรสาร:</strong> [02-123-456]</p>
                  <p><strong>Email:</strong> [googlethailand@gmail.com]</p>
                </div>
                <div>
                  <h5>ประวัติการฝึกงานที่ผ่านมา</h5>
                  <p><strong>ตำแหน่งที่ฝึกงาน:</strong> [IT Support]</p>
                  <p><strong>วันที่เริ่มฝึกงาน:</strong> [12-02-2568]</p>
                  <p><strong>วันที่สิ้นสุดฝึกงาน:</strong> [12-02-2568]</p>
                  <p><strong>สถานประกอบการ:</strong> [Google Thailand]</p>
                </div>
              </div>
            </div>
          </div>
        </div>
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
    <!-- Dropdown Menu -->
    <script src="/cooputcc/asset/js/sidebar_dropdown.js"></script>

  </body>
</html>
