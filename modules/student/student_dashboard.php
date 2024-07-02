<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Dashboard นักศึกษาสหกิจศึกษา - โครงการสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย </title>
    <link rel="stylesheet" href="/cooputcc/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/cooputcc/bootstrap/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="/cooputcc/asset/css/dashboard/student_dashboard.css" />
  </head>
  <body>
    <!-- Header -->
    <header class="header d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <img src="/cooputcc/asset/img/utcclogo.jpg" alt="UTCC Logo" />
        <div class="titles">
          <h2>ระบบงานสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</h2>
          <h5 style="color: #ffd600">> ยินดีต้อนรับนักศึกษาสหกิจใหม่</h5>
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
      <a href="/cooputcc/modules/student/student_register1.php"
        ><i class="fas fa-user-plus"></i> ลงทะเบียนสหกิจศึกษาล่วงหน้า</a
      >
    </div>

    <!-- Main Content -->
    <div class="content">
      <div class="welcome-text">
        <h3>ยินดีต้อนรับนักศึกษาสหกิจใหม่!</h3>
        <p style="color: black">
          เรายินดีต้อนรับนักศึกษาทุกคนสู่โครงการสหกิจศึกษา
          มหาวิทยาลัยหอการค้าไทย<br />
          ขอให้ทุกคนได้รับประสบการณ์ที่มีคุณค่าและประสบความสำเร็จในเส้นทางการเรียนรู้และการทำงานของท่าน
          <br />
        </p>
        <h1></h1>
        <p style="color: black">
          หากมีข้อสงสัย สามารถติดต่อโครงการสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย
          ได้ที่ <br />
          โทร. 02-697-6338, 02-697-6339 email: oei@utcc.ac.th หรือ <br />
          <a href="https://department.utcc.ac.th/cooperative/"
            >https://department.utcc.ac.th/cooperative/</a
          >
        </p>
        <a
          href="/cooputcc/modules/student/student_register1.php"
          class="btn btn-success btn-register"
        >
          <i class="fas fa-user-plus"></i> ลงทะเบียนสหกิจศึกษาล่วงหน้า
        </a>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div>
        <!-- Related Websites -->
        <span>เว็บไซต์ที่เกี่ยวข้อง: |</span>
        <a href="https://department.utcc.ac.th/cooperative/"
          >โครงการสหกิจศึกษา</a
        >
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
