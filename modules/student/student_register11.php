<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      ลงทะเบียนสหกิจศึกษาล่วงหน้า - โครงการสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย
    </title>
    <link rel="stylesheet" href="/cooputcc/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="/cooputcc/bootstrap/fontawesome/css/all.min.css"
    />
    <link rel="stylesheet" href="/cooputcc/asset/css/register/student_register.css" />
    <link rel="stylesheet" href="/cooputcc/asset/css/register/student_register_uploadfile.css" />
  </head>
  <body>
    <!-- Header -->
    <header class="header d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <img src="/cooputcc/asset/img/utcclogo.jpg" alt="UTCC Logo" />
        <div class="titles">
          <h2>ระบบงานสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</h2>
          <h5 style="color: #ffd600">> ลงทะเบียนสหกิจศึกษาล่วงหน้า</h5>
        </div>
      </div>
      <div class="d-flex align-items-center">
        <a href="link_to_user_manual.pdf" class="manual-link"
          ><i class="fas fa-book"></i> คู่มือการใช้งาน</a
        >
        <a href="/cooputcc/modules/login/student_login.php" class="logout-btn"
          ><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a
        >
      </div>
    </header>

    <!-- Sidebar -->
    <div class="sidebar">
      <a
        href="/cooputcc/modules/student/student_dashboard.php"
        class="btn-back"
        ><i class="fas fa-arrow-left"></i> กลับสู่ Dashboard</a
      >
      <h1></h1>
      <br />
      <a href="/cooputcc/modules/student/student_register1.php"
        ><i class="fas fa-user"></i> ข้อมุลส่วนตัว</a
      >
      <a href="/cooputcc/modules/student/student_register2.php"
        ><i class="fas fa-users"></i> ข้อมูลครอบครัว</a
      >
      <a href="/cooputcc/modules/student/student_register3.php"
        ><i class="fas fa-home"></i> ข้อมูลที่อยู่</a
      >
      <a href="/cooputcc/modules/student/student_register4.php"
        ><i class="fas fa-phone"></i> บุคคลติดต่อฉุกเฉิน</a
      >
      <a href="/cooputcc/modules/student/student_register5.php"
        ><i class="fas fa-graduation-cap"></i> ประวัติการศึกษา</a
      >
      <a href="/cooputcc/modules/student/student_register6.php"
        ><i class="fas fa-certificate"></i> ประวัติการอบรม</a
      >
      <a href="/cooputcc/modules/student/student_register7.php"
        ><i class="fas fa-star"></i> ความสามารถพิเศษ</a
      >
      <a href="/cooputcc/modules/student/student_register8.php"
        ><i class="fas fa-briefcase"></i> ประวัติการทำงาน</a
      >
      <a href="/cooputcc/modules/student/student_register9.php"
        ><i class="fas fa-trophy"></i> รางวัลที่ได้รับ</a
      >
      <a href="/cooputcc/modules/student/student_register10.php"
        ><i class="fas fa-image"></i> รูปถ่ายนักศึกษา</a
      >
      <a href="" class="active"
        ><i class="fas fa-file"></i> เอกสารประกอบการสมัคร</a
      >
    </div>

    <!-- Main Content -->
    <div class="content">
      <div class="container">
        <div class="row justify-content-left">
          <div class="col-12">
            <h4 class="mb-5 bold-text">เอกสารประกอบการสมัคร</h4>
          </div>
          <!-- Main content area -->
          <div class="col-md-8 col-lg-12">
            <div class="registration-form">
              <!-- แบบฟอร์มอัพโหลดรูปถ่ายนักศึกษา -->
              <form id="uploadForm" onsubmit="handleSubmit(event)">
                <div class="form-group">
                  <label
                    for="transcript"
                    style="color: #2c75b9; font-weight: bold"
                    >ใบตรวจผลการศึกษา
                    (ขอได้จากสำนักงานทะเบียนและประมวลผล):</label
                  >
                  <input
                    type="file"
                    id="transcript"
                    name="transcript"
                    class="form-control form-control-sm"
                    accept=".pdf, .jpg, .jpeg"
                  />
                  <small
                    >*** ประเภทไฟล์เอกสารที่รองรับ .pdf, .jpg และ .jpeg
                    เท่านั้น</small
                  >
                </div>

                <!-- เอกสารอื่นๆ -->
                <div class="form-group">
                  <label
                    for="document_1"
                    style="color: #2c75b9; font-weight: bold"
                    >เอกสารอื่นๆ 1:</label
                  >
                  <input
                    type="file"
                    id="document_1"
                    name="document_1"
                    class="form-control form-control-sm"
                    accept=".pdf, .jpg, .jpeg"
                  />
                  <small
                    >*** ประเภทไฟล์เอกสารที่รองรับ .pdf, .jpg และ .jpeg
                    เท่านั้น</small
                  >
                </div>

                <div class="form-group">
                  <label
                    for="document_2"
                    style="color: #2c75b9; font-weight: bold"
                    >เอกสารอื่นๆ 2:</label
                  >
                  <input
                    type="file"
                    id="document_2"
                    name="document_2"
                    class="form-control form-control-sm"
                    accept=".pdf, .jpg, .jpeg"
                  />
                  <small
                    >*** ประเภทไฟล์เอกสารที่รองรับ .pdf, .jpg และ .jpeg
                    เท่านั้น</small
                  >
                </div>

                <div class="form-group">
                  <label
                    for="document_3"
                    style="color: #2c75b9; font-weight: bold"
                    >เอกสารอื่นๆ 3:</label
                  >
                  <input
                    type="file"
                    id="document_3"
                    name="document_3"
                    class="form-control form-control-sm"
                    accept=".pdf, .jpg, .jpeg"
                  />
                  <small
                    >*** ประเภทไฟล์เอกสารที่รองรับ .pdf, .jpg และ .jpeg
                    เท่านั้น</small
                  >
                </div>

                <div class="form-group">
                  <label
                    for="document_4"
                    style="color: #2c75b9; font-weight: bold"
                    >เอกสารอื่นๆ 4:</label
                  >
                  <input
                    type="file"
                    id="document_4"
                    name="document_4"
                    class="form-control form-control-sm"
                    accept=".pdf, .jpg, .jpeg"
                  />
                  <small
                    >*** ประเภทไฟล์เอกสารที่รองรับ .pdf, .jpg และ .jpeg
                    เท่านั้น</small
                  >
                </div>

                <div class="form-group">
                  <label
                    for="document_5"
                    style="color: #2c75b9; font-weight: bold"
                    >เอกสารอื่นๆ 5:</label
                  >
                  <input
                    type="file"
                    id="document_5"
                    name="document_5"
                    class="form-control form-control-sm"
                    accept=".pdf, .jpg, .jpeg"
                  />
                  <small
                    >*** ประเภทไฟล์เอกสารที่รองรับ .pdf, .jpg และ .jpeg
                    เท่านั้น</small
                  >
                </div>

                <!-- Success Message -->
                <div id="successMessage" class="success-message">
                  บันทึกข้อมูลเรียบร้อยแล้ว!!!<br>
                </div>

                <!-- Button Form-->
                <div class="form-group.document text-center mt-4">
                  <a
                    href="/cooputcc/modules/student/student_register10.php"
                    class="btn btn-secondary"
                  >
                    <i class="fas fa-arrow-left"></i> หน้าก่อนหน้า
                  </a>
                  <button type="submit" class="btn btn-warning text-dark">
                    <i class="fas fa-save"></i> บันทึกและส่งข้อมูล
                  </button>
                </div>
              </form>
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
    <script src="/cooputcc/asset/js/student_data_saved_noti.js"></script>
  </body>
</html>
