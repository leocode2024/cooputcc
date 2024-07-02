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
      <a href="/cooputcc/modules/student/student_register5.php"
        ><i class="fas fa-graduation-cap"></i> ประวัติการศึกษา</a
      >
      <a href="/cooputcc/modules/student/student_register6.php"
        ><i class="fas fa-certificate"></i> ประวัติการอบรม</a
      >
      <a href="/cooputcc/modules/student/student_register7.php"
        ><i class="fas fa-star"></i> ความสามารถพิเศษ</a
      >
      <a href="" class="active"
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
            <h4 class="mb-5 bold-text">ประวัติการทำงาน</h4>
          </div>
          <!-- Main content area -->
          <div class="col-md-8 col-lg-12">
            <div class="registration-form">
              <!-- แบบฟอร์มประวัติการทำงาน -->
              <form action="">
                <!-- ประวัติการทำงานที่ 1 -->
                <div class="mb-4">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="work_years_1" class="form-label"
                          >ช่วงปี พ.ศ. ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_years_1"
                          name="work_years_1"
                          class="form-control form-control-sm"
                          placeholder="ช่วงปี พ.ศ. ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="work_organization_1" class="form-label"
                          >องค์กร/กิจกรรม ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_organization_1"
                          name="work_organization_1"
                          class="form-control form-control-sm"
                          placeholder="องค์กร/กิจกรรม ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="work_responsibility_1" class="form-label"
                          >งานที่รับผิดชอบ:</label
                        >
                        <textarea
                          id="work_responsibility_1"
                          name="work_responsibility_1"
                          class="form-control form-control-sm"
                          rows="2"
                          placeholder="งานที่รับผิดชอบ"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ประวัติการทำงานที่ 2 -->
                <div class="mb-4">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="work_years_2" class="form-label"
                          >ช่วงปี พ.ศ. ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_years_2"
                          name="work_years_2"
                          class="form-control form-control-sm"
                          placeholder="ช่วงปี พ.ศ. ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="work_organization_2" class="form-label"
                          >องค์กร/กิจกรรม ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_organization_2"
                          name="work_organization_2"
                          class="form-control form-control-sm"
                          placeholder="องค์กร/กิจกรรม ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="work_responsibility_2" class="form-label"
                          >งานที่รับผิดชอบ:</label
                        >
                        <textarea
                          id="work_responsibility_2"
                          name="work_responsibility_2"
                          class="form-control form-control-sm"
                          rows="2"
                          placeholder="งานที่รับผิดชอบ"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ประวัติการทำงานที่ 3 -->
                <div class="mb-4">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="work_years_3" class="form-label"
                          >ช่วงปี พ.ศ. ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_years_3"
                          name="work_years_3"
                          class="form-control form-control-sm"
                          placeholder="ช่วงปี พ.ศ. ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="work_organization_3" class="form-label"
                          >องค์กร/กิจกรรม ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_organization_3"
                          name="work_organization_3"
                          class="form-control form-control-sm"
                          placeholder="องค์กร/กิจกรรม ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="work_responsibility_3" class="form-label"
                          >งานที่รับผิดชอบ:</label
                        >
                        <textarea
                          id="work_responsibility_3"
                          name="work_responsibility_3"
                          class="form-control form-control-sm"
                          rows="2"
                          placeholder="งานที่รับผิดชอบ"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ประวัติการทำงานที่ 4 -->
                <div class="mb-4">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="work_years_4" class="form-label"
                          >ช่วงปี พ.ศ. ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_years_4"
                          name="work_years_4"
                          class="form-control form-control-sm"
                          placeholder="ช่วงปี พ.ศ. ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="work_organization_4" class="form-label"
                          >องค์กร/กิจกรรม ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_organization_4"
                          name="work_organization_4"
                          class="form-control form-control-sm"
                          placeholder="องค์กร/กิจกรรม ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="work_responsibility_4" class="form-label"
                          >งานที่รับผิดชอบ:</label
                        >
                        <textarea
                          id="work_responsibility_4"
                          name="work_responsibility_4"
                          class="form-control form-control-sm"
                          rows="2"
                          placeholder="งานที่รับผิดชอบ"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ประวัติการทำงานที่ 5 -->
                <div class="mb-4">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="work_years_5" class="form-label"
                          >ช่วงปี พ.ศ. ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_years_5"
                          name="work_years_5"
                          class="form-control form-control-sm"
                          placeholder="ช่วงปี พ.ศ. ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="work_organization_5" class="form-label"
                          >องค์กร/กิจกรรม ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_organization_5"
                          name="work_organization_5"
                          class="form-control form-control-sm"
                          placeholder="องค์กร/กิจกรรม ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="work_responsibility_5" class="form-label"
                          >งานที่รับผิดชอบ:</label
                        >
                        <textarea
                          id="work_responsibility_5"
                          name="work_responsibility_5"
                          class="form-control form-control-sm"
                          rows="2"
                          placeholder="งานที่รับผิดชอบ"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ประวัติการทำงานที่ 6 -->
                <div class="mb-4">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="work_years_6" class="form-label"
                          >ช่วงปี พ.ศ. ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_years_6"
                          name="work_years_6"
                          class="form-control form-control-sm"
                          placeholder="ช่วงปี พ.ศ. ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="work_organization_6" class="form-label"
                          >องค์กร/กิจกรรม ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_organization_6"
                          name="work_organization_6"
                          class="form-control form-control-sm"
                          placeholder="องค์กร/กิจกรรม ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="work_responsibility_6" class="form-label"
                          >งานที่รับผิดชอบ:</label
                        >
                        <textarea
                          id="work_responsibility_6"
                          name="work_responsibility_6"
                          class="form-control form-control-sm"
                          rows="2"
                          placeholder="งานที่รับผิดชอบ"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ประวัติการทำงานที่ 7 -->
                <div class="mb-4">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="work_years_7" class="form-label"
                          >ช่วงปี พ.ศ. ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_years_7"
                          name="work_years_7"
                          class="form-control form-control-sm"
                          placeholder="ช่วงปี พ.ศ. ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="work_organization_7" class="form-label"
                          >องค์กร/กิจกรรม ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_organization_7"
                          name="work_organization_7"
                          class="form-control form-control-sm"
                          placeholder="องค์กร/กิจกรรม ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="work_responsibility_7" class="form-label"
                          >งานที่รับผิดชอบ:</label
                        >
                        <textarea
                          id="work_responsibility_7"
                          name="work_responsibility_7"
                          class="form-control form-control-sm"
                          rows="2"
                          placeholder="งานที่รับผิดชอบ"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ประวัติการทำงานที่ 8 -->
                <div class="mb-4">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="work_years_8" class="form-label"
                          >ช่วงปี พ.ศ. ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_years_8"
                          name="work_years_8"
                          class="form-control form-control-sm"
                          placeholder="ช่วงปี พ.ศ. ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="work_organization_8" class="form-label"
                          >องค์กร/กิจกรรม ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_organization_8"
                          name="work_organization_8"
                          class="form-control form-control-sm"
                          placeholder="องค์กร/กิจกรรม ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="work_responsibility_8" class="form-label"
                          >งานที่รับผิดชอบ:</label
                        >
                        <textarea
                          id="work_responsibility_8"
                          name="work_responsibility_8"
                          class="form-control form-control-sm"
                          rows="2"
                          placeholder="งานที่รับผิดชอบ"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ประวัติการทำงานที่ 9 -->
                <div class="mb-4">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="work_years_9" class="form-label"
                          >ช่วงปี พ.ศ. ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_years_9"
                          name="work_years_9"
                          class="form-control form-control-sm"
                          placeholder="ช่วงปี พ.ศ. ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="work_organization_9" class="form-label"
                          >องค์กร/กิจกรรม ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_organization_9"
                          name="work_organization_9"
                          class="form-control form-control-sm"
                          placeholder="องค์กร/กิจกรรม ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="work_responsibility_9" class="form-label"
                          >งานที่รับผิดชอบ:</label
                        >
                        <textarea
                          id="work_responsibility_9"
                          name="work_responsibility_9"
                          class="form-control form-control-sm"
                          rows="2"
                          placeholder="งานที่รับผิดชอบ"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- ประวัติการทำงานที่ 10 -->
                <div class="mb-4">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="work_years_10" class="form-label"
                          >ช่วงปี พ.ศ. ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_years_10"
                          name="work_years_10"
                          class="form-control form-control-sm"
                          placeholder="ช่วงปี พ.ศ. ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="work_organization_10" class="form-label"
                          >องค์กร/กิจกรรม ที่ทำงาน:</label
                        >
                        <input
                          type="text"
                          id="work_organization_10"
                          name="work_organization_10"
                          class="form-control form-control-sm"
                          placeholder="องค์กร/กิจกรรม ที่ทำงาน"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="work_responsibility_10" class="form-label"
                          >งานที่รับผิดชอบ:</label
                        >
                        <textarea
                          id="work_responsibility_10"
                          name="work_responsibility_10"
                          class="form-control form-control-sm"
                          rows="2"
                          placeholder="งานที่รับผิดชอบ"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Button Form-->
                <div class="form-group text-center mt-4">
                  <a
                    href="/cooputcc/modules/student/student_register7.php"
                    class="btn btn-secondary"
                  >
                    <i class="fas fa-arrow-left"></i> หน้าก่อนหน้า
                  </a>
                  <a
                    href="/cooputcc/modules/student/student_register9.php"
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
