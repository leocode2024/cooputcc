<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard อาจารย์ที่ปรึกษา - โครงการสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</title>
    <link rel="stylesheet" href="/cooputcc/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/cooputcc/bootstrap/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/cooputcc/asset/css/dashboard/teacher_dashboard.css" />
    
  </head>
  <body>
    <!-- Header -->
    <header class="header d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <img src="/cooputcc/asset/img/utcclogo.jpg" alt="UTCC Logo" />
        <div class="titles">
          <h2>ระบบงานสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</h2>
          <h5 style="color: #ffd600">> ยินดีต้อนรับ [ชื่ออาจารย์]</h5>
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
      <a href="" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    </div>

    <!-- Main Content -->
     <!-- Dashboard Status box -->
    <div class="content">
      <div class="dashboard-header">
        <div class="students">
          <i class="fas fa-user-graduate"></i>
          <div class="text">นักศึกษาในที่ปรึกษา<br />[1 คน]</div>
        </div>
        <div class="mentors">
            <i class="fas fa-user-tie icon"></i>
          <div class="text">พี่เลี้ยงสหกิจ<br />[1 คน]</div>
        </div>
        <div class="companies">
            <i class="fas fa-briefcase icon"></i>
          <div class="text">สถานประกอบการ<br />[1 คน]</div>
        </div>
      </div>
      <!-- ข้อมูลนักศึกษาในความดูแล -->
      <div class="highlight">
        ข้อมูลนักศึกษาในความดูแล
      </div>
      <h3></h3>

      <!-- Data Search bar -->
      <div class="filter-section">
        <div class="form-group">
          <label for="studentId"> รหัสนักศึกษา:</label>
          <input type="text" id="studentId" class="form-control" placeholder="กรอกรหัสนักศึกษา">
        </div>
        <div class="form-group">
          <label for="semester"> ภาคการศึกษา:</label>
          <select id="semester" class="form-control">
            <option value="">--- เลือกภาคการศึกษา ---</option>
            <option value="1">ภาคการศึกษาที่ 1</option>
            <option value="2">ภาคการศึกษาที่ 2</option>
            <option value="3">ภาคการศึกษาฤดูร้อน</option>
          </select>
        </div>
        <div class="form-group">
          <label for="academicYear"> ปีการศึกษา:</label>
          <select id="academicYear" class="form-control">
            <option value="">--- เลือกปีการศึกษา ---</option>
            <option value="2024">2567</option>
            <option value="2023">2566</option>
            <option value="2022">2565</option>
          </select>
        </div>
        <div class="form-group">
          <label for="companyName"> ชื่อสถานประกอบการ:</label>
          <input type="text" id="companyName" class="form-control" placeholder="กรอกชื่อสถานประกอบการ">
        </div>
        <div class="form-group">
          <label for="jobTitle"> ชื่อตำแหน่งงาน:</label>
          <input type="text" id="jobTitle" class="form-control" placeholder="กรอกชื่อตำแหน่งงาน">
        </div>
        <button class="btn btn-primary"><i class="fas fa-search"></i> ค้นหา</button>
      </div>

      <!-- Students Table -->

      <!-- Students Table Navigator -->
      

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