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
          ><i class="fas fa-sign-out-alt"></i> ออกจากระบบ
        </a>
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
      <a href="" class="active"
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
      <a href="/cooputcc/modules/student/student_register11.php"
        ><i class="fas fa-file"></i> เอกสารประกอบการสมัคร</a
      >
    </div>

    <!-- Main Content -->
    <div class="content">
      <div class="container">
        <div class="row justify-content-left">
          <div class="col-12">
            <h4 class="mb-5 bold-text">ประวัติการศึกษา</h4>
          </div>
          <!-- Main content area -->
          <div class="col-md-8 col-lg-12">
            <div class="registration-form">
              <!-- แบบฟอร์มประวัติการศึกษา -->
              <form action="">
                <!-- ระดับประถมศึกษา -->
                <h5>ระดับประถมศึกษา</h5>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="primary_school_name" class="form-label"
                        >ชื่อสถานศึกษา:</label
                      >
                      <input
                        type="text"
                        id="primary_school_name"
                        name="primary_school_name"
                        class="form-control form-control-sm"
                        placeholder="ชื่อสถานศึกษา"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="primary_major" class="form-label"
                        >สาขาวิชา:</label
                      >
                      <input
                        type="text"
                        id="primary_major"
                        name="primary_major"
                        class="form-control form-control-sm"
                        placeholder="สาขาวิชา"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="primary_degree" class="form-label"
                        >วุฒิที่ได้รับ:</label
                      >
                      <input
                        type="text"
                        id="primary_degree"
                        name="primary_degree"
                        class="form-control form-control-sm"
                        placeholder="วุฒิที่ได้รับ"
                      />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="primary_years" class="form-label"
                        >ช่วงปี พ.ศ. ที่จบการศึกษา:</label
                      >
                      <input
                        type="text"
                        id="primary_years"
                        name="primary_years"
                        class="form-control form-control-sm"
                        placeholder="ช่วงปี พ.ศ. ที่จบการศึกษา"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="primary_gpa" class="form-label"
                        >เกรดเฉลี่ย:</label
                      >
                      <input
                        type="text"
                        id="primary_gpa"
                        name="primary_gpa"
                        class="form-control form-control-sm"
                        placeholder="เกรดเฉลี่ย"
                      />
                    </div>
                  </div>
                </div>

                <!-- ระดับมัธยมศึกษา/ปวช. -->
                <h2></h2>
                <h5>ระดับมัธยมศึกษา/ปวช.</h5>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="secondary_school_name" class="form-label"
                        >ชื่อสถานศึกษา:</label
                      >
                      <input
                        type="text"
                        id="secondary_school_name"
                        name="secondary_school_name"
                        class="form-control form-control-sm"
                        placeholder="ชื่อสถานศึกษา"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="secondary_major" class="form-label"
                        >สาขาวิชา:</label
                      >
                      <input
                        type="text"
                        id="secondary_major"
                        name="secondary_major"
                        class="form-control form-control-sm"
                        placeholder="สาขาวิชา"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="secondary_degree" class="form-label"
                        >วุฒิที่ได้รับ:</label
                      >
                      <input
                        type="text"
                        id="secondary_degree"
                        name="secondary_degree"
                        class="form-control form-control-sm"
                        placeholder="วุฒิที่ได้รับ"
                      />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="secondary_years" class="form-label"
                        >ช่วงปี พ.ศ. ที่จบการศึกษา:</label
                      >
                      <input
                        type="text"
                        id="secondary_years"
                        name="secondary_years"
                        class="form-control form-control-sm"
                        placeholder="ช่วงปี พ.ศ. ที่จบการศึกษา"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="secondary_gpa" class="form-label"
                        >เกรดเฉลี่ย:</label
                      >
                      <input
                        type="text"
                        id="secondary_gpa"
                        name="secondary_gpa"
                        class="form-control form-control-sm"
                        placeholder="เกรดเฉลี่ย"
                      />
                    </div>
                  </div>
                </div>

                <!-- วุฒิอื่นๆ -->
                <h2></h2>
                <h5>วุฒิอื่นๆ</h5>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="other_school_name" class="form-label"
                        >ชื่อสถานศึกษา:</label
                      >
                      <input
                        type="text"
                        id="other_school_name"
                        name="other_school_name"
                        class="form-control form-control-sm"
                        placeholder="ชื่อสถานศึกษา"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="other_major" class="form-label"
                        >สาขาวิชา:</label
                      >
                      <input
                        type="text"
                        id="other_major"
                        name="other_major"
                        class="form-control form-control-sm"
                        placeholder="สาขาวิชา"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="other_degree" class="form-label"
                        >วุฒิที่ได้รับ:</label
                      >
                      <input
                        type="text"
                        id="other_degree"
                        name="other_degree"
                        class="form-control form-control-sm"
                        placeholder="วุฒิที่ได้รับ"
                      />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="other_years" class="form-label"
                        >ช่วงปี พ.ศ. ที่จบการศึกษา:</label
                      >
                      <input
                        type="text"
                        id="other_years"
                        name="other_years"
                        class="form-control form-control-sm"
                        placeholder="ช่วงปี พ.ศ. ที่จบการศึกษา"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="other_gpa" class="form-label"
                        >เกรดเฉลี่ย:</label
                      >
                      <input
                        type="text"
                        id="other_gpa"
                        name="other_gpa"
                        class="form-control form-control-sm"
                        placeholder="เกรดเฉลี่ย"
                      />
                    </div>
                  </div>
                </div>

                <!-- ระดับปริญญาตรี -->
                <h2></h2>
                <h5>ระดับปริญญาตรี</h5>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="bachelor_school_name" class="form-label"
                        >ชื่อสถานศึกษา:</label
                      >
                      <input
                        type="text"
                        id="bachelor_school_name"
                        name="bachelor_school_name"
                        class="form-control form-control-sm"
                        value="มหาวิทยาลัยหอการค้าไทย"
                        readonly
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="bachelor_major" class="form-label"
                        >สาขาวิชา:<i style="color: #c9302c"
                          >* จำเป็นต้องระบุ</i
                        ></label
                      >
                      <input
                        type="text"
                        id="bachelor_major"
                        name="bachelor_major"
                        class="form-control form-control-sm"
                        placeholder="สาขาวิชา"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="bachelor_degree" class="form-label"
                        >วุฒิที่ได้รับ:</label
                      >
                      <input
                        type="text"
                        id="bachelor_degree"
                        name="bachelor_degree"
                        class="form-control form-control-sm"
                        placeholder="วุฒิที่ได้รับ"
                      />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="bachelor_years" class="form-label"
                        >ช่วงปี พ.ศ. ที่จบการศึกษา:</label
                      >
                      <input
                        type="text"
                        id="bachelor_years"
                        name="bachelor_years"
                        class="form-control form-control-sm"
                        value="กำลังศึกษา"
                        readonly
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="bachelor_gpa" class="form-label"
                        >เกรดเฉลี่ย:<i style="color: #c9302c"
                          >* จำเป็นต้องระบุ</i
                        ></label
                      >
                      <input
                        type="text"
                        id="bachelor_gpa"
                        name="bachelor_gpa"
                        class="form-control form-control-sm"
                        placeholder="เกรดเฉลี่ย"
                        required
                      />
                    </div>
                  </div>
                </div>

                <!-- Button Form-->
                <div class="form-group text-center mt-4">
                  <a
                    href="/cooputcc/modules/student/student_register4.php"
                    class="btn btn-secondary"
                  >
                    <i class="fas fa-arrow-left"></i> หน้าก่อนหน้า
                  </a>
                  <a
                    href="/cooputcc/modules/student/student_register6.php"
                    type="submit"
                    class="btn btn-warning text-dark"
                  >
                    <i class="fas fa-arrow-right"></i> หน้าถัดไป
                  </a>
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
  </body>
</html>
