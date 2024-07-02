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
      <a href="" class="active"><i class="fas fa-users"></i> ข้อมูลครอบครัว</a>
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
            <h4 class="mb-5 bold-text">ข้อมูลครอบครัว</h4>
          </div>
          <!-- Main content area -->
          <div class="col-md-8 col-lg-12">
            <div class="registration-form">
              <!-- แบบฟอร์มข้อมูลครอบครัว -->
              <form action="">
                <!-- ข้อมูลบิดา -->
                <h5>ข้อมูลบิดา</h5>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="father_titlename" class="form-label"
                        >คำนำหน้าชื่อ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="father_titlename"
                        name="father_titlename"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- คำนำหน้าชื่อ ---</option>
                        <option value="mr">นาย</option>
                        <option value="dr">ดร.</option>
                        <option value="mr">ยศ</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="father_firstname" class="form-label"
                        >ชื่อ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="father_firstname"
                        name="father_firstname"
                        class="form-control form-control-sm"
                        placeholder="ชื่อ"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="father_lastname" class="form-label"
                        >นามสกุล:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="father_lastname"
                        name="father_lastname"
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
                      <label for="father_occupation" class="form-label"
                        >อาชีพ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="father_occupation"
                        name="father_occupation"
                        class="form-control form-control-sm"
                        placeholder="อาชีพ"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="father_phone" class="form-label"
                        >เบอร์โทรศัพท์:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="father_phone"
                        name="father_phone"
                        class="form-control form-control-sm"
                        placeholder="เบอร์โทรศัพท์"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="father_work_address_no" class="form-label"
                        >ที่ทำงานของบิดา เลขที่:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="father_work_address_no"
                        name="father_work_address_no"
                        class="form-control form-control-sm"
                        placeholder="เลขที่"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="father_work_address_moo" class="form-label"
                        >หมู่:</label
                      >
                      <input
                        type="text"
                        id="father_work_address_moo"
                        name="father_work_address_moo"
                        class="form-control form-control-sm"
                        placeholder="หมู่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="father_work_address_soi" class="form-label"
                        >ซอย:</label
                      >
                      <input
                        type="text"
                        id="father_work_address_soi"
                        name="father_work_address_soi"
                        class="form-control form-control-sm"
                        placeholder="ซอย"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="father_work_address_road" class="form-label"
                        >ถนน:</label
                      >
                      <input
                        type="text"
                        id="father_work_address_road"
                        name="father_work_address_road"
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
                        for="father_work_address_subdistrict"
                        class="form-label"
                        >แขวง/ตำบล:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="father_work_address_subdistrict"
                        name="father_work_address_subdistrict"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกแขวง/ตำบล ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="father_work_address_district"
                        class="form-label"
                        >เขต/อำเภอ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="father_work_address_district"
                        name="father_work_address_district"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกเขต/อำเภอ ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="father_work_address_province"
                        class="form-label"
                        >จังหวัด:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="father_work_address_province"
                        name="father_work_address_province"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกจังหวัด ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="father_work_address_postalcode"
                        class="form-label"
                        >รหัสไปรษณีย์:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="father_work_address_postalcode"
                        name="father_work_address_postalcode"
                        class="form-control form-control-sm"
                        placeholder="รหัสไปรษณีย์"
                        required
                      />
                    </div>
                  </div>
                </div>

                <!-- ข้อมูลมารดา -->
                <h2></h2>
                <h5>ข้อมูลมารดา</h5>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="mother_titlename" class="form-label"
                        >คำนำหน้าชื่อ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="mother_titlename"
                        name="mother_titlename"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- คำนำหน้าชื่อ ---</option>
                        <option value="mrs">นาง</option>
                        <option value="miss">นางสาว</option>
                        <option value="dr">ดร.</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="mother_firstname" class="form-label"
                        >ชื่อ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="mother_firstname"
                        name="mother_firstname"
                        class="form-control form-control-sm"
                        placeholder="ชื่อ"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="mother_lastname" class="form-label"
                        >นามสกุล:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="mother_lastname"
                        name="mother_lastname"
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
                      <label for="mother_occupation" class="form-label"
                        >อาชีพ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="mother_occupation"
                        name="mother_occupation"
                        class="form-control form-control-sm"
                        placeholder="อาชีพ"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="mother_phone" class="form-label"
                        >เบอร์โทรศัพท์:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="mother_phone"
                        name="mother_phone"
                        class="form-control form-control-sm"
                        placeholder="เบอร์โทรศัพท์"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="mother_work_address_no" class="form-label"
                        >ที่ทำงานของมารดา เลขที่:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="mother_work_address_no"
                        name="mother_work_address_no"
                        class="form-control form-control-sm"
                        placeholder="เลขที่"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="mother_work_address_moo" class="form-label"
                        >หมู่:</label
                      >
                      <input
                        type="text"
                        id="mother_work_address_moo"
                        name="mother_work_address_moo"
                        class="form-control form-control-sm"
                        placeholder="หมู่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="mother_work_address_soi" class="form-label"
                        >ซอย:</label
                      >
                      <input
                        type="text"
                        id="mother_work_address_soi"
                        name="mother_work_address_soi"
                        class="form-control form-control-sm"
                        placeholder="ซอย"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="mother_work_address_road" class="form-label"
                        >ถนน:</label
                      >
                      <input
                        type="text"
                        id="mother_work_address_road"
                        name="mother_work_address_road"
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
                        for="mother_work_address_subdistrict"
                        class="form-label"
                        >แขวง/ตำบล:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="mother_work_address_subdistrict"
                        name="mother_work_address_subdistrict"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกแขวง/ตำบล ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="mother_work_address_district"
                        class="form-label"
                        >เขต/อำเภอ:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="mother_work_address_district"
                        name="mother_work_address_district"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกเขต/อำเภอ ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="mother_work_address_province"
                        class="form-label"
                        >จังหวัด:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="mother_work_address_province"
                        name="mother_work_address_province"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกจังหวัด ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="mother_work_address_postalcode"
                        class="form-label"
                        >รหัสไปรษณีย์:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <input
                        type="text"
                        id="mother_work_address_postalcode"
                        name="mother_work_address_postalcode"
                        class="form-control form-control-sm"
                        placeholder="รหัสไปรษณีย์"
                        required
                      />
                    </div>
                  </div>
                </div>

                <!-- ที่อยู่ปัจจุบันของบิดามารดา -->
                <h2></h2>
                <h5>ที่อยู่ปัจจุบันของบิดามารดา</h5>
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

                <!-- ข้อมูลพี่/น้อง -->
                <h2></h2>
                <h5>ข้อมูลพี่/น้อง</h5>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="sibling_rank" class="form-label"
                        >ข้าพเจ้าเป็นบุตร/ธิดาคนที่:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="sibling_rank"
                        name="sibling_rank"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกอันดับ ---</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="sibling_total" class="form-label"
                        >ในจำนวนพี่/น้องทั้งหมด:
                        <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label
                      >
                      <select
                        id="sibling_total"
                        name="sibling_total"
                        class="form-control form-control-sm"
                        required
                      >
                        <option value="">--- เลือกจำนวน ---</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                  </div>
                </div>

                <!-- รายละเอียดพี่/น้องคนที่ 1 -->
                <h2></h2>
                <h6>รายละเอียดพี่/น้องคนที่ 1</h6>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="sibling1_titlename" class="form-label"
                        >คำนำหน้าชื่อ:</label
                      >
                      <select
                        id="sibling1_titlename"
                        name="sibling1_titlename"
                        class="form-control form-control-sm"
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
                      <label for="sibling1_firstname" class="form-label"
                        >ชื่อ:</label
                      >
                      <input
                        type="text"
                        id="sibling1_firstname"
                        name="sibling1_firstname"
                        class="form-control form-control-sm"
                        placeholder="ชื่อ"
                      />
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="sibling1_lastname" class="form-label"
                        >นามสกุล:</label
                      >
                      <input
                        type="text"
                        id="sibling1_lastname"
                        name="sibling1_lastname"
                        class="form-control form-control-sm"
                        placeholder="นามสกุล"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling1_address_no" class="form-label"
                        >ที่อยู่ เลขที่:</label
                      >
                      <input
                        type="text"
                        id="sibling1_address_no"
                        name="sibling1_address_no"
                        class="form-control form-control-sm"
                        placeholder="เลขที่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling1_address_moo" class="form-label"
                        >หมู่:</label
                      >
                      <input
                        type="text"
                        id="sibling1_address_moo"
                        name="sibling1_address_moo"
                        class="form-control form-control-sm"
                        placeholder="หมู่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling1_address_soi" class="form-label"
                        >ซอย:</label
                      >
                      <input
                        type="text"
                        id="sibling1_address_soi"
                        name="sibling1_address_soi"
                        class="form-control form-control-sm"
                        placeholder="ซอย"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling1_address_road" class="form-label"
                        >ถนน:</label
                      >
                      <input
                        type="text"
                        id="sibling1_address_road"
                        name="sibling1_address_road"
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
                        for="sibling1_address_subdistrict"
                        class="form-label"
                        >แขวง/ตำบล:</label
                      >
                      <select
                        id="sibling1_address_subdistrict"
                        name="sibling1_address_subdistrict"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกแขวง/ตำบล ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling1_address_district" class="form-label"
                        >เขต/อำเภอ:</label
                      >
                      <select
                        id="sibling1_address_district"
                        name="sibling1_address_district"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกเขต/อำเภอ ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling1_address_province" class="form-label"
                        >จังหวัด:</label
                      >
                      <select
                        id="sibling1_address_province"
                        name="sibling1_address_province"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกจังหวัด ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="sibling1_address_postalcode"
                        class="form-label"
                        >รหัสไปรษณีย์:</label
                      >
                      <input
                        type="text"
                        id="sibling1_address_postalcode"
                        name="sibling1_address_postalcode"
                        class="form-control form-control-sm"
                        placeholder="รหัสไปรษณีย์"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling1_phone" class="form-label"
                        >เบอร์โทรศัพท์:</label
                      >
                      <input
                        type="text"
                        id="sibling1_phone"
                        name="sibling1_phone"
                        class="form-control form-control-sm"
                        placeholder="เบอร์โทรศัพท์"
                      />
                    </div>
                  </div>
                </div>

                <!-- รายละเอียดพี่/น้องคนที่ 2 -->
                <h2></h2>
                <h6>รายละเอียดพี่/น้องคนที่ 2</h6>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="sibling2_titlename" class="form-label"
                        >คำนำหน้าชื่อ:</label
                      >
                      <select
                        id="sibling2_titlename"
                        name="sibling2_titlename"
                        class="form-control form-control-sm"
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
                      <label for="sibling2_firstname" class="form-label"
                        >ชื่อ:</label
                      >
                      <input
                        type="text"
                        id="sibling2_firstname"
                        name="sibling2_firstname"
                        class="form-control form-control-sm"
                        placeholder="ชื่อ"
                      />
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="sibling2_lastname" class="form-label"
                        >นามสกุล:</label
                      >
                      <input
                        type="text"
                        id="sibling2_lastname"
                        name="sibling2_lastname"
                        class="form-control form-control-sm"
                        placeholder="นามสกุล"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling2_address_no" class="form-label"
                        >ที่อยู่ เลขที่:</label
                      >
                      <input
                        type="text"
                        id="sibling2_address_no"
                        name="sibling2_address_no"
                        class="form-control form-control-sm"
                        placeholder="เลขที่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling2_address_moo" class="form-label"
                        >หมู่:</label
                      >
                      <input
                        type="text"
                        id="sibling2_address_moo"
                        name="sibling2_address_moo"
                        class="form-control form-control-sm"
                        placeholder="หมู่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling2_address_soi" class="form-label"
                        >ซอย:</label
                      >
                      <input
                        type="text"
                        id="sibling2_address_soi"
                        name="sibling2_address_soi"
                        class="form-control form-control-sm"
                        placeholder="ซอย"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling2_address_road" class="form-label"
                        >ถนน:</label
                      >
                      <input
                        type="text"
                        id="sibling2_address_road"
                        name="sibling2_address_road"
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
                        for="sibling2_address_subdistrict"
                        class="form-label"
                        >แขวง/ตำบล:</label
                      >
                      <select
                        id="sibling2_address_subdistrict"
                        name="sibling2_address_subdistrict"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกแขวง/ตำบล ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling2_address_district" class="form-label"
                        >เขต/อำเภอ:</label
                      >
                      <select
                        id="sibling2_address_district"
                        name="sibling2_address_district"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกเขต/อำเภอ ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling2_address_province" class="form-label"
                        >จังหวัด:</label
                      >
                      <select
                        id="sibling2_address_province"
                        name="sibling2_address_province"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกจังหวัด ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="sibling2_address_postalcode"
                        class="form-label"
                        >รหัสไปรษณีย์:</label
                      >
                      <input
                        type="text"
                        id="sibling2_address_postalcode"
                        name="sibling2_address_postalcode"
                        class="form-control form-control-sm"
                        placeholder="รหัสไปรษณีย์"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling2_phone" class="form-label"
                        >เบอร์โทรศัพท์:</label
                      >
                      <input
                        type="text"
                        id="sibling2_phone"
                        name="sibling2_phone"
                        class="form-control form-control-sm"
                        placeholder="เบอร์โทรศัพท์"
                      />
                    </div>
                  </div>
                </div>

                <!-- รายละเอียดพี่/น้องคนที่ 3 -->
                <h2></h2>
                <h6>รายละเอียดพี่/น้องคนที่ 3</h6>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="sibling3_titlename" class="form-label"
                        >คำนำหน้าชื่อ:</label
                      >
                      <select
                        id="sibling3_titlename"
                        name="sibling3_titlename"
                        class="form-control form-control-sm"
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
                      <label for="sibling3_firstname" class="form-label"
                        >ชื่อ:</label
                      >
                      <input
                        type="text"
                        id="sibling3_firstname"
                        name="sibling3_firstname"
                        class="form-control form-control-sm"
                        placeholder="ชื่อ"
                      />
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="sibling3_lastname" class="form-label"
                        >นามสกุล:</label
                      >
                      <input
                        type="text"
                        id="sibling3_lastname"
                        name="sibling3_lastname"
                        class="form-control form-control-sm"
                        placeholder="นามสกุล"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling3_address_no" class="form-label"
                        >ที่อยู่ เลขที่:</label
                      >
                      <input
                        type="text"
                        id="sibling3_address_no"
                        name="sibling3_address_no"
                        class="form-control form-control-sm"
                        placeholder="เลขที่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling3_address_moo" class="form-label"
                        >หมู่:</label
                      >
                      <input
                        type="text"
                        id="sibling3_address_moo"
                        name="sibling3_address_moo"
                        class="form-control form-control-sm"
                        placeholder="หมู่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling3_address_soi" class="form-label"
                        >ซอย:</label
                      >
                      <input
                        type="text"
                        id="sibling3_address_soi"
                        name="sibling3_address_soi"
                        class="form-control form-control-sm"
                        placeholder="ซอย"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling3_address_road" class="form-label"
                        >ถนน:</label
                      >
                      <input
                        type="text"
                        id="sibling3_address_road"
                        name="sibling3_address_road"
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
                        for="sibling3_address_subdistrict"
                        class="form-label"
                        >แขวง/ตำบล:</label
                      >
                      <select
                        id="sibling3_address_subdistrict"
                        name="sibling3_address_subdistrict"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกแขวง/ตำบล ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling3_address_district" class="form-label"
                        >เขต/อำเภอ:</label
                      >
                      <select
                        id="sibling3_address_district"
                        name="sibling3_address_district"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกเขต/อำเภอ ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling3_address_province" class="form-label"
                        >จังหวัด:</label
                      >
                      <select
                        id="sibling3_address_province"
                        name="sibling3_address_province"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกจังหวัด ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="sibling3_address_postalcode"
                        class="form-label"
                        >รหัสไปรษณีย์:</label
                      >
                      <input
                        type="text"
                        id="sibling3_address_postalcode"
                        name="sibling3_address_postalcode"
                        class="form-control form-control-sm"
                        placeholder="รหัสไปรษณีย์"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling3_phone" class="form-label"
                        >เบอร์โทรศัพท์:</label
                      >
                      <input
                        type="text"
                        id="sibling3_phone"
                        name="sibling3_phone"
                        class="form-control form-control-sm"
                        placeholder="เบอร์โทรศัพท์"
                      />
                    </div>
                  </div>
                </div>

                <!-- รายละเอียดพี่/น้องคนที่ 4 -->
                <h2></h2>
                <h6>รายละเอียดพี่/น้องคนที่ 4</h6>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="sibling4_titlename" class="form-label"
                        >คำนำหน้าชื่อ:</label
                      >
                      <select
                        id="sibling4_titlename"
                        name="sibling4_titlename"
                        class="form-control form-control-sm"
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
                      <label for="sibling4_firstname" class="form-label"
                        >ชื่อ:</label
                      >
                      <input
                        type="text"
                        id="sibling4_firstname"
                        name="sibling4_firstname"
                        class="form-control form-control-sm"
                        placeholder="ชื่อ"
                      />
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="sibling4_lastname" class="form-label"
                        >นามสกุล:</label
                      >
                      <input
                        type="text"
                        id="sibling4_lastname"
                        name="sibling4_lastname"
                        class="form-control form-control-sm"
                        placeholder="นามสกุล"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling4_address_no" class="form-label"
                        >ที่อยู่ เลขที่:</label
                      >
                      <input
                        type="text"
                        id="sibling4_address_no"
                        name="sibling4_address_no"
                        class="form-control form-control-sm"
                        placeholder="เลขที่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling4_address_moo" class="form-label"
                        >หมู่:</label
                      >
                      <input
                        type="text"
                        id="sibling4_address_moo"
                        name="sibling4_address_moo"
                        class="form-control form-control-sm"
                        placeholder="หมู่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling4_address_soi" class="form-label"
                        >ซอย:</label
                      >
                      <input
                        type="text"
                        id="sibling4_address_soi"
                        name="sibling4_address_soi"
                        class="form-control form-control-sm"
                        placeholder="ซอย"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling4_address_road" class="form-label"
                        >ถนน:</label
                      >
                      <input
                        type="text"
                        id="sibling4_address_road"
                        name="sibling4_address_road"
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
                        for="sibling4_address_subdistrict"
                        class="form-label"
                        >แขวง/ตำบล:</label
                      >
                      <select
                        id="sibling4_address_subdistrict"
                        name="sibling4_address_subdistrict"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกแขวง/ตำบล ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling4_address_district" class="form-label"
                        >เขต/อำเภอ:</label
                      >
                      <select
                        id="sibling4_address_district"
                        name="sibling4_address_district"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกเขต/อำเภอ ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling4_address_province" class="form-label"
                        >จังหวัด:</label
                      >
                      <select
                        id="sibling4_address_province"
                        name="sibling4_address_province"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกจังหวัด ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="sibling4_address_postalcode"
                        class="form-label"
                        >รหัสไปรษณีย์:</label
                      >
                      <input
                        type="text"
                        id="sibling4_address_postalcode"
                        name="sibling4_address_postalcode"
                        class="form-control form-control-sm"
                        placeholder="รหัสไปรษณีย์"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling4_phone" class="form-label"
                        >เบอร์โทรศัพท์:</label
                      >
                      <input
                        type="text"
                        id="sibling4_phone"
                        name="sibling4_phone"
                        class="form-control form-control-sm"
                        placeholder="เบอร์โทรศัพท์"
                      />
                    </div>
                  </div>
                </div>

                <!-- รายละเอียดพี่/น้องคนที่ 5 -->
                <h2></h2>
                <h6>รายละเอียดพี่/น้องคนที่ 5</h6>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="sibling5_titlename" class="form-label"
                        >คำนำหน้าชื่อ:</label
                      >
                      <select
                        id="sibling5_titlename"
                        name="sibling5_titlename"
                        class="form-control form-control-sm"
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
                      <label for="sibling5_firstname" class="form-label"
                        >ชื่อ:</label
                      >
                      <input
                        type="text"
                        id="sibling5_firstname"
                        name="sibling5_firstname"
                        class="form-control form-control-sm"
                        placeholder="ชื่อ"
                      />
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="sibling5_lastname" class="form-label"
                        >นามสกุล:</label
                      >
                      <input
                        type="text"
                        id="sibling5_lastname"
                        name="sibling5_lastname"
                        class="form-control form-control-sm"
                        placeholder="นามสกุล"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling5_address_no" class="form-label"
                        >ที่อยู่ เลขที่:</label
                      >
                      <input
                        type="text"
                        id="sibling5_address_no"
                        name="sibling5_address_no"
                        class="form-control form-control-sm"
                        placeholder="เลขที่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling5_address_moo" class="form-label"
                        >หมู่:</label
                      >
                      <input
                        type="text"
                        id="sibling5_address_moo"
                        name="sibling5_address_moo"
                        class="form-control form-control-sm"
                        placeholder="หมู่"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling5_address_soi" class="form-label"
                        >ซอย:</label
                      >
                      <input
                        type="text"
                        id="sibling5_address_soi"
                        name="sibling5_address_soi"
                        class="form-control form-control-sm"
                        placeholder="ซอย"
                      />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="sibling5_address_road" class="form-label"
                        >ถนน:</label
                      >
                      <input
                        type="text"
                        id="sibling5_address_road"
                        name="sibling5_address_road"
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
                        for="sibling5_address_subdistrict"
                        class="form-label"
                        >แขวง/ตำบล:</label
                      >
                      <select
                        id="sibling5_address_subdistrict"
                        name="sibling5_address_subdistrict"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกแขวง/ตำบล ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling5_address_district" class="form-label"
                        >เขต/อำเภอ:</label
                      >
                      <select
                        id="sibling5_address_district"
                        name="sibling5_address_district"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกเขต/อำเภอ ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling5_address_province" class="form-label"
                        >จังหวัด:</label
                      >
                      <select
                        id="sibling5_address_province"
                        name="sibling5_address_province"
                        class="form-control form-control-sm"
                      >
                        <option value="">--- เลือกจังหวัด ---</option>
                        <!-- Add more options as needed -->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label
                        for="sibling5_address_postalcode"
                        class="form-label"
                        >รหัสไปรษณีย์:</label
                      >
                      <input
                        type="text"
                        id="sibling5_address_postalcode"
                        name="sibling5_address_postalcode"
                        class="form-control form-control-sm"
                        placeholder="รหัสไปรษณีย์"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="sibling5_phone" class="form-label"
                        >เบอร์โทรศัพท์:</label
                      >
                      <input
                        type="text"
                        id="sibling5_phone"
                        name="sibling5_phone"
                        class="form-control form-control-sm"
                        placeholder="เบอร์โทรศัพท์"
                      />
                    </div>
                  </div>
                </div>

                <!-- Button Form-->
                <div class="form-group text-center mt-4">
                  <a
                    href="/cooputcc/modules/student/student_register1.php"
                    class="btn btn-secondary"
                  >
                    <i class="fas fa-arrow-left"></i> หน้าก่อนหน้า
                  </a>
                  <a
                    href="/cooputcc/modules/student/student_register3.php"
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
