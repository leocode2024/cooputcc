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
      <a href="" class="active"
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
      <a href="/cooputcc/modules/student/student_register11.php"
        ><i class="fas fa-file"></i> เอกสารประกอบการสมัคร</a
      >
    </div>

    <!-- Main Content -->
    <div class="content">
      <div class="container">
        <div class="row justify-content-left">
          <div class="col-12">
            <h4 class="mb-5 bold-text">ข้อมูลบุคคลติดต่อฉุกเฉิน</h4>
          </div>
          <!-- Main content area -->
          <div class="col-md-8 col-lg-12">
            <div class="registration-form">
              <!-- แบบฟอร์มข้อมูลส่วนตัว -->
              <form action="">
                <!-- ข้อมูลบุคคลติดต่อฉุกเฉิน -->
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="contact_titlename" class="form-label"
                        >คำนำหน้าชื่อ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="contact_titlename"
                        name="contact_titlename"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- คำนำหน้าชื่อ ---</option>
                        <option value="mr">นาย</option>
                        <option value="mrs">นาง</option>
                        <option value="miss">นางสาว</option>
                        <option value="dr">ดร.</option>
                        <option value="rank">ยศ</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="contact_firstname" class="form-label"
                        >ชื่อ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="contact_firstname"
                        name="contact_firstname"
                        class="form-control form-control-sm"
                        placeholder="ชื่อ"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="contact_lastname" class="form-label"
                        >นามสกุล:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="contact_lastname"
                        name="contact_lastname"
                        class="form-control form-control-sm"
                        placeholder="นามสกุล"
                        required
                      />
                    </div>
                  </div>
                </div>

                <!-- ข้อมูลที่อยู่ของบุคคลติดต่อฉุกเฉิน -->
                <h2></h2>
                <h5>ข้อมูลที่อยู่ของบุคคลติดต่อฉุกเฉิน</h5>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="contact_address_no" class="form-label"
                        >ที่อยู่เลขที่:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="contact_address_no"
                        name="contact_address_no"
                        class="form-control form-control-sm"
                        placeholder="เลขที่"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="contact_address_moo" class="form-label"
                        >หมู่:</label
                      >
                      <input
                        type="text"
                        id="contact_address_moo"
                        name="contact_address_moo"
                        class="form-control form-control-sm"
                        placeholder="หมู่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="contact_address_soi" class="form-label"
                        >ซอย:</label
                      >
                      <input
                        type="text"
                        id="contact_address_soi"
                        name="contact_address_soi"
                        class="form-control form-control-sm"
                        placeholder="ซอย"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="contact_address_road" class="form-label"
                        >ถนน:</label
                      >
                      <input
                        type="text"
                        id="contact_address_road"
                        name="contact_address_road"
                        class="form-control form-control-sm"
                        placeholder="ถนน"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="contact_address_subdistrict"
                        class="form-label"
                        >แขวง/ตำบล:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="contact_address_subdistrict"
                        name="contact_address_subdistrict"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- แขวง/ตำบล ---</option>
                        <option value="แขวง1">แขวง1</option>
                        <option value="แขวง2">แขวง2</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="contact_address_district" class="form-label"
                        >เขต/อำเภอ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="contact_address_district"
                        name="contact_address_district"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เขต/อำเภอ ---</option>
                        <option value="เขต1">เขต1</option>
                        <option value="เขต2">เขต2</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="contact_address_province" class="form-label"
                        >จังหวัด:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="contact_address_province"
                        name="contact_address_province"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- จังหวัด ---</option>
                        <option value="จังหวัด1">จังหวัด1</option>
                        <option value="จังหวัด2">จังหวัด2</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="contact_address_postalcode" class="form-label"
                        >รหัสไปรษณีย์:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="contact_address_postalcode"
                        name="contact_address_postalcode"
                        class="form-control form-control-sm"
                        placeholder="รหัสไปรษณีย์"
                        required
                      />
                    </div>
                  </div>
                </div>

                <!-- ข้อมูลติดต่อบุคคลติดต่อฉุกเฉิน -->
                <h2></h2>
                <h5>ข้อมูลติดต่อบุคคลติดต่อฉุกเฉิน</h5>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="contact_phone" class="form-label"
                        >เบอร์โทรศัพท์:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="contact_phone"
                        name="contact_phone"
                        class="form-control form-control-sm"
                        placeholder="เบอร์โทรศัพท์"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="contact_fax" class="form-label"
                        >เบอร์โทรสาร:</label
                      >
                      <input
                        type="text"
                        id="contact_fax"
                        name="contact_fax"
                        class="form-control form-control-sm"
                        placeholder="เบอร์โทรสาร"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="contact_email" class="form-label"
                        >Email:</label
                      >
                      <input
                        type="email"
                        id="contact_email"
                        name="contact_email"
                        class="form-control form-control-sm"
                        placeholder="Email"
                      />
                    </div>
                  </div>
                </div>

                <!-- Button Form-->
                <div class="form-group text-center mt-4">
                  <a
                    href="/cooputcc/modules/student/student_register3.php"
                    class="btn btn-secondary"
                  >
                    <i class="fas fa-arrow-left"></i> หน้าก่อนหน้า
                  </a>
                  <a
                    href="/cooputcc/modules/student/student_register5.php"
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
