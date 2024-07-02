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
      <a href="" class="active"><i class="fas fa-home"></i> ข้อมูลที่อยู่</a>
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
      <a href="/cooputcc/modules/student/student_register11.php"
        ><i class="fas fa-file"></i> เอกสารประกอบการสมัคร</a
      >
    </div>

    <!-- Main Content -->
    <div class="content">
      <div class="container">
        <div class="row justify-content-left">
          <div class="col-12">
            <h4 class="mb-5 bold-text">ข้อมูลที่อยู่</h4>
          </div>
          <!-- Main content area -->
          <div class="col-md-8 col-lg-12">
            <div class="registration-form">
              <!-- แบบฟอร์มข้อมูลที่อยู่ -->
              <form action="">
                <!-- ที่อยู่ตามทะเบียนบ้าน -->
                <h5>ที่อยู่ตามทะเบียนบ้าน</h5>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="reg_address_no" class="form-label"
                        >เลขที่:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="reg_address_no"
                        name="reg_address_no"
                        class="form-control form-control-sm"
                        placeholder="เลขที่"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="reg_address_moo" class="form-label"
                        >หมู่:</label
                      >
                      <input
                        type="text"
                        id="reg_address_moo"
                        name="reg_address_moo"
                        class="form-control form-control-sm"
                        placeholder="หมู่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="reg_address_soi" class="form-label"
                        >ซอย:</label
                      >
                      <input
                        type="text"
                        id="reg_address_soi"
                        name="reg_address_soi"
                        class="form-control form-control-sm"
                        placeholder="ซอย"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="reg_address_road" class="form-label"
                        >ถนน:</label
                      >
                      <input
                        type="text"
                        id="reg_address_road"
                        name="reg_address_road"
                        class="form-control form-control-sm"
                        placeholder="ถนน"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="reg_address_subdistrict" class="form-label"
                        >แขวง/ตำบล:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="reg_address_subdistrict"
                        name="reg_address_subdistrict"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกแขวง/ตำบล ---</option>
                        <option value="subdistrict1">ตำบล1</option>
                        <option value="subdistrict2">ตำบล2</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="reg_address_district" class="form-label"
                        >เขต/อำเภอ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="reg_address_district"
                        name="reg_address_district"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกเขต/อำเภอ ---</option>
                        <option value="district1">อำเภอ1</option>
                        <option value="district2">อำเภอ2</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="reg_address_province" class="form-label"
                        >จังหวัด:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="reg_address_province"
                        name="reg_address_province"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกจังหวัด ---</option>
                        <option value="province1">จังหวัด1</option>
                        <option value="province2">จังหวัด2</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="reg_address_postalcode" class="form-label"
                        >รหัสไปรษณีย์:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="reg_address_postalcode"
                        name="reg_address_postalcode"
                        class="form-control form-control-sm"
                        placeholder="รหัสไปรษณีย์"
                        required
                      />
                    </div>
                  </div>
                </div>

                <!-- ที่อยู่ปัจจุบัน -->
                <h2></h2>
                <h5>
                  ที่อยู่ปัจจุบัน
                  <input
                    type="checkbox"
                    id="same_as_reg_address"
                    name="same_as_reg_address"
                  />
                  <label for="same_as_reg_address" style="display: inline"
                    >ใช้ที่อยู่เดียวกับที่อยู่ตามทะเบียนบ้าน</label
                  >
                </h5>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="current_address_no" class="form-label"
                        >เลขที่:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="current_address_no"
                        name="current_address_no"
                        class="form-control form-control-sm"
                        placeholder="เลขที่"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="current_address_moo" class="form-label"
                        >หมู่:</label
                      >
                      <input
                        type="text"
                        id="current_address_moo"
                        name="current_address_moo"
                        class="form-control form-control-sm"
                        placeholder="หมู่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="current_address_soi" class="form-label"
                        >ซอย:</label
                      >
                      <input
                        type="text"
                        id="current_address_soi"
                        name="current_address_soi"
                        class="form-control form-control-sm"
                        placeholder="ซอย"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="current_address_road" class="form-label"
                        >ถนน:</label
                      >
                      <input
                        type="text"
                        id="current_address_road"
                        name="current_address_road"
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
                        for="current_address_subdistrict"
                        class="form-label"
                        >แขวง/ตำบล:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="current_address_subdistrict"
                        name="current_address_subdistrict"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกแขวง/ตำบล ---</option>
                        <option value="subdistrict1">ตำบล1</option>
                        <option value="subdistrict2">ตำบล2</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="current_address_district" class="form-label"
                        >เขต/อำเภอ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="current_address_district"
                        name="current_address_district"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกเขต/อำเภอ ---</option>
                        <option value="district1">อำเภอ1</option>
                        <option value="district2">อำเภอ2</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="current_address_province" class="form-label"
                        >จังหวัด:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="current_address_province"
                        name="current_address_province"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกจังหวัด ---</option>
                        <option value="province1">จังหวัด1</option>
                        <option value="province2">จังหวัด2</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="current_address_postalcode" class="form-label"
                        >รหัสไปรษณีย์:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="current_address_postalcode"
                        name="current_address_postalcode"
                        class="form-control form-control-sm"
                        placeholder="รหัสไปรษณีย์"
                        required
                      />
                    </div>
                  </div>
                </div>

                <!-- ข้อมูลติดต่อ -->
                <h2></h2>
                <h5>ข้อมูลติดต่อ</h5>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="phone" class="form-label"
                        >เบอร์โทรศัพท์:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="phone"
                        name="phone"
                        class="form-control form-control-sm"
                        placeholder="เบอร์โทรศัพท์"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="fax" class="form-label">เบอร์โทรสาร: </label>
                      <input
                        type="text"
                        id="fax"
                        name="fax"
                        class="form-control form-control-sm"
                        placeholder="เบอร์โทรสาร"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="email" class="form-label"
                        >Email:<i style="color: #c9302c"
                          >* จำเป็นต้องระบุ</i
                        ></label
                      >
                      <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control form-control-sm"
                        placeholder="Email"
                        required
                      />
                    </div>
                  </div>
                </div>

                <!-- Button Form-->
                <div class="form-group text-center mt-4">
                  <a
                    href="/cooputcc/modules/student/student_register2.php"
                    class="btn btn-secondary"
                  >
                    <i class="fas fa-arrow-left"></i> หน้าก่อนหน้า
                  </a>
                  <a
                    href="/cooputcc/modules/student/student_register4.php"
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
    <script src="/cooputcc/asset/js/copy_address_data.js"></script>
  </body>
</html>
