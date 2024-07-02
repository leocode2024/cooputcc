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
    <script src="/cooputcc/asset/js/toggleDrivingLicense.js"></script> <!-- ตรวจสอบการติ๊กเปิด Form ใบขับขี่ -->

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
      <a href="" class="active"><i class="fas fa-user"></i> ข้อมุลส่วนตัว</a>
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
      <a href="/cooputcc/modules/student/student_register11.php"
        ><i class="fas fa-file"></i> เอกสารประกอบการสมัคร</a
      >
    </div>

    <!-- Main Content -->
    <div class="content">
      <div class="container">
        <div class="row justify-content-left">
          <div class="col-12">
            <h4 class="mb-5 bold-text">ข้อมูลส่วนตัว</h4>
          </div>
          <!-- Main content area -->
          <div class="col-md-8 col-lg-12">
            <div class="registration-form">
              <!-- แบบฟอร์มข้อมูลส่วนตัว -->
              <form action="">
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="titlename" class="form-label"
                        >คำนำหน้าชื่อ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="titlename"
                        name="titlename"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- คำนำหน้าชื่อ ---</option>
                        <option value="mr">นาย</option>
                        <option value="mrs">นาง</option>
                        <option value="miss">นางสาว</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="firstname" class="form-label"
                        >ชื่อ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="firstname"
                        name="firstname"
                        class="form-control form-control-sm"
                        placeholder="ชื่อ"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="lastname" class="form-label"
                        >นามสกุล:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="lastname"
                        name="lastname"
                        class="form-control form-control-sm"
                        placeholder="นามสกุล"
                        required
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstname_en" class="form-label"
                        >ชื่อ(ภาษาอังกฤษ):
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="firstname_en"
                        name="firstname_en"
                        class="form-control form-control-sm"
                        placeholder="Firstname"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastname_en" class="form-label"
                        >นามสกุล(ภาษาอังกฤษ):
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="lastname_en"
                        name="lastname_en"
                        class="form-control form-control-sm"
                        placeholder="Lastname"
                        required
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="student_id" class="form-label"
                        >รหัสนักศึกษา:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="student_id"
                        name="student_id"
                        class="form-control form-control-sm"
                        placeholder="รหัสนักศึกษา"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="year" class="form-label"
                        >ชั้นปีที่:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="year"
                        name="year"
                        class="form-control form-control-sm"
                        placeholder="ชั้นปี"
                        required
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="faculty" class="form-label"
                        >คณะวิชา:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="faculty"
                        name="faculty"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกคณะวิชา ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="major" class="form-label"
                        >สาขาวิชา:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="major"
                        name="major"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกสาขาวิชา ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="gpa" class="form-label"
                        >เกรดเฉลี่ย:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="gpa"
                        name="gpa"
                        class="form-control form-control-sm"
                        placeholder="เกรดเฉลี่ย"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cumulative_gpa" class="form-label"
                        >เกรดเฉลี่ยสะสม:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="cumulative_gpa"
                        name="cumulative_gpa"
                        class="form-control form-control-sm"
                        placeholder="เกรดเฉลี่ยสะสม"
                        required
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label class="form-label"
                        >เพศ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <div>
                        <input
                          type="radio"
                          id="male"
                          name="gender"
                          value="male"
                          required
                        />
                        <label for="male" class="form-check-label">ชาย</label>
                        <input
                          type="radio"
                          id="female"
                          name="gender"
                          value="female"
                          required
                        />
                        <label for="female" class="form-check-label"
                          >หญิง</label
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="height" class="form-label"
                        >ส่วนสูง:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="height"
                        name="height"
                        class="form-control form-control-sm"
                        placeholder="ส่วนสูง ซม."
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="weight" class="form-label"
                        >น้ำหนัก:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="weight"
                        name="weight"
                        class="form-control form-control-sm"
                        placeholder="น้ำหนัก กก."
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="birthdate" class="form-label"
                        >วันเกิด:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <div>
                        <select
                          id="birthdate-day"
                          name="birthdate_day"
                          class="form-control form-control-sm d-inline-block w-auto"
                          required
                        >
                          <option value="">--- วัน ---</option>
                          <!-- Add day options -->
                        </select>
                        <select
                          id="birthdate-month"
                          name="birthdate_month"
                          class="form-control form-control-sm d-inline-block w-auto"
                          required
                        >
                          <option value="">--- เดือน ---</option>
                          <!-- Add month options -->
                        </select>
                        <select
                          id="birthdate-year"
                          name="birthdate_year"
                          class="form-control form-control-sm d-inline-block w-auto"
                          required
                        >
                          <option value="">--- ปี ---</option>
                          <!-- Add year options -->
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="birthplace" class="form-label"
                        >สถานที่เกิด:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="birthplace"
                        name="birthplace"
                        class="form-control form-control-sm"
                        placeholder="สถานที่เกิด"
                        required
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="religion" class="form-label"
                        >ศาสนา:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="religion"
                        name="religion"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกศาสนา ---</option>
                        <option value="buddhism">พุทธ</option>
                        <option value="islam">อิสลาม</option>
                        <option value="christianity">คริสต์</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nationality" class="form-label"
                        >สัญชาติ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="nationality"
                        name="nationality"
                        class="form-control form-control-sm"
                        placeholder="สัญชาติ"
                        required
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="id_number" class="form-label"
                        >เลขที่บัตรประชาชน:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="id_number"
                        name="id_number"
                        class="form-control form-control-sm"
                        placeholder="เลขที่บัตรประชาชน"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="id_issue_place" class="form-label"
                        >สถานที่ออกบัตรประชาชน:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="id_issue_place"
                        name="id_issue_place"
                        class="form-control form-control-sm"
                        placeholder="สถานที่ออกบัตรประชาชน"
                        required
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="id_issue_date" class="form-label"
                        >วันออกบัตรประชาชน:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <div>
                        <select
                          id="id_issue_day"
                          name="id_issue_day"
                          class="form-control form-control-sm d-inline-block w-auto"
                          required
                        >
                          <option value="">--- วัน ---</option>
                          <!-- Add day options -->
                        </select>
                        <select
                          id="id_issue_month"
                          name="id_issue_month"
                          class="form-control form-control-sm d-inline-block w-auto"
                          required
                        >
                          <option value="">--- เดือน ---</option>
                          <!-- Add month options -->
                        </select>
                        <select
                          id="id_issue_year"
                          name="id_issue_year"
                          class="form-control form-control-sm d-inline-block w-auto"
                          required
                        >
                          <option value="">--- ปี ---</option>
                          <!-- Add year options -->
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="id_expiry_date" class="form-label"
                        >วันหมดอายุบัตรประชาชน:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <div>
                        <select
                          id="id_expiry_day"
                          name="id_expiry_day"
                          class="form-control form-control-sm d-inline-block w-auto"
                          required
                        >
                          <option value="">--- วัน ---</option>
                          <!-- Add day options -->
                        </select>
                        <select
                          id="id_expiry_month"
                          name="id_expiry_month"
                          class="form-control form-control-sm d-inline-block w-auto"
                          required
                        >
                          <option value="">--- เดือน ---</option>
                          <!-- Add month options -->
                        </select>
                        <select
                          id="id_expiry_year"
                          name="id_expiry_year"
                          class="form-control form-control-sm d-inline-block w-auto"
                          required
                        >
                          <option value="">--- ปี ---</option>
                          <!-- Add year options -->
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="has_driving_license" class="form-label"
                        >มีใบขับขี่:</label
                      >
                      <div>
                        <input
                          type="radio"
                          id="has_driving_license"
                          name="driving_license_status"
                          value="yes"
                          onclick="toggleDrivingLicense()"
                        />
                        <label
                          for="has_driving_license"
                          class="form-check-label"
                          >มี</label
                        >
                        <input
                          type="radio"
                          id="no_driving_license"
                          name="driving_license_status"
                          value="no"
                          onclick="toggleDrivingLicense()"
                          checked
                        />
                        <label for="no_driving_license" class="form-check-label"
                          >ไม่มี</label
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="driving_license" class="form-label"
                        >ใบขับขี่เลขที่:</label
                      >
                      <input
                        type="text"
                        id="driving_license"
                        name="driving_license"
                        class="form-control form-control-sm"
                        placeholder="ใบขับขี่เลขที่"
                        disabled
                      />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="driving_license_type" class="form-label"
                        >ประเภทของใบขับขี่:</label
                      >
                      <input
                        type="text"
                        id="driving_license_type"
                        name="driving_license_type"
                        class="form-control form-control-sm"
                        placeholder="ประเภทของใบขับขี่"
                        disabled
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label
                        for="driving_license_expiry_date"
                        class="form-label"
                        >วันหมดอายุใบขับขี่:</label
                      >
                      <div>
                        <select
                          id="driving_license_expiry_day"
                          name="driving_license_expiry_day"
                          class="form-control form-control-sm d-inline-block w-auto"
                          disabled
                        >
                          <option value="">--- วัน ---</option>
                          <!-- Add day options -->
                        </select>
                        <select
                          id="driving_license_expiry_month"
                          name="driving_license_expiry_month"
                          class="form-control form-control-sm d-inline-block w-auto"
                          disabled
                        >
                          <option value="">--- เดือน ---</option>
                          <!-- Add month options -->
                        </select>
                        <select
                          id="driving_license_expiry_year"
                          name="driving_license_expiry_year"
                          class="form-control form-control-sm d-inline-block w-auto"
                          disabled
                        >
                          <option value="">--- ปี ---</option>
                          <!-- Add year options -->
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label"
                        >การเกณฑ์ทหาร:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <div>
                        <input
                          type="radio"
                          id="military_served"
                          name="military_status"
                          value="served"
                          required
                        />
                        <label for="military_served" class="form-check-label"
                          >ผ่านการเกณฑ์ทหารแล้ว</label
                        >
                        <input
                          type="radio"
                          id="military_exempt"
                          name="military_status"
                          value="exempt"
                          required
                        />
                        <label for="military_exempt" class="form-check-label"
                          >ยังไม่ได้เกณฑ์ / อยู่ระหว่างการขอผ่อนผัน</label
                        >
                        <input
                          type="radio"
                          id="military_received"
                          name="military_status"
                          value="received"
                          required
                        />
                        <label for="military_received" class="form-check-label"
                          >ได้รับการยกเว้น</label
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Button Form-->
                <div class="form-group text-center mt-4">
                  <a
                    href="/cooputcc/modules/student/student_register2.php"
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
