<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>สมัครเข้าร่วมโครงการสหกิจศึกษา - มหาวิทยาลัยหอการค้าไทย</title>
  <link rel="stylesheet" href="/cooputcc/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/cooputcc/bootstrap/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="/cooputcc/asset/css/register/company_register.css" />
</head>
<body>
  <!-- Header -->
  <header class="header d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center">
      <img src="/cooputcc/asset/img/utcclogo.jpg" alt="UTCC Logo" />
      <div class="titles">
        <h2>ระบบงานสหกิจศึกษา มหาวิทยาลัยหอการค้าไทย</h2>
        <h5 style="color: #ffd600">สถานประกอบการสมัครเข้าร่วมโครงการสหกิจศึกษา</h5>
      </div>
    </div>
    <a href="link_to_user_manual.pdf" class="manual-link">
      <i class="fas fa-book"></i> คู่มือการใช้งาน
    </a>
  </header>

  <!-- Main Content -->
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <h3 class="mb-4 bold-text" style="color: #28a745; text-align: center">
          <i class="fas fa-briefcase icon"></i> สมัครเข้าร่วมโครงการสหกิจศึกษา
        </h3>
        <!-- แบบฟอร์มสถานประกอบการสมัครเข้าร่วมโครงการสหกิจศึกษา -->
        <div class="col-md-8 col-lg-10">
          <div class="registration-form">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="company_name_th" class="form-label">ชื่อสถานประกอบการ (ภาษาไทย):
                      <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label>
                    <input type="text" id="company_name_th" name="company_name_th" class="form-control form-control-sm" placeholder="ชื่อสถานประกอบการ (ภาษาไทย)" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="company_name_en" class="form-label">ชื่อสถานประกอบการ (ภาษาอังกฤษ):
                      <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label>
                    <input type="text" id="company_name_en" name="company_name_en" class="form-control form-control-sm" placeholder="ชื่อสถานประกอบการ (ภาษาอังกฤษ)" required />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="address_no" class="form-label">ที่อยู่ เลขที่:
                      <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label>
                    <input type="text" id="address_no" name="address_no" class="form-control form-control-sm" placeholder="ที่อยู่เลขที่" required />
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="address_moo" class="form-label">หมู่:</label>
                    <input type="text" id="address_moo" name="address_moo" class="form-control form-control-sm" placeholder="หมู่" />
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="address_soi" class="form-label">ซอย:</label>
                    <input type="text" id="address_soi" name="address_soi" class="form-control form-control-sm" placeholder="ซอย" />
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="address_road" class="form-label">ถนน:</label>
                    <input type="text" id="address_road" name="address_road" class="form-control form-control-sm" placeholder="ถนน" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="address_subdistrict" class="form-label">แขวง:
                      <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label>
                    <select id="address_subdistrict" name="address_subdistrict" class="form-control form-control-sm" required>
                      <option value="">--- เลือกแขวง/ตำบล ---</option>
                      <option value="แขวง1">แขวง1</option>
                      <option value="แขวง2">แขวง2</option>
                      <!-- Add more options as needed -->
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="address_district" class="form-label">เขต:
                      <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label>
                    <select id="address_district" name="address_district" class="form-control form-control-sm" required>
                      <option value="">--- เลือกเขต/อำเภอ ---</option>
                      <option value="เขต1">เขต1</option>
                      <option value="เขต2">เขต2</option>
                      <!-- Add more options as needed -->
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="address_province" class="form-label">จังหวัด:
                      <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label>
                    <select id="address_province" name="address_province" class="form-control form-control-sm" required>
                      <option value="">--- เลือกจังหวัด ---</option>
                      <option value="จังหวัด1">จังหวัด1</option>
                      <option value="จังหวัด2">จังหวัด2</option>
                      <!-- Add more options as needed -->
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="phone" class="form-label">โทรศัพท์:
                      <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label>
                    <input type="text" id="phone" name="phone" class="form-control form-control-sm" placeholder="โทรศัพท์" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="fax" class="form-label">โทรสาร:</label>
                    <input type="text" id="fax" name="fax" class="form-control form-control-sm" placeholder="โทรสาร" />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email" class="form-label">อีเมล์:
                      <i style="color: #c9302c">* จำเป็นต้องระบุ</i></label>
                    <input type="email" id="email" name="email" class="form-control form-control-sm" placeholder="อีเมล์" required />
                  </div>
                </div>
              </div>

              <div class="form-group text-center mt-4 button-group">
                <a href="/cooputcc/modules/company/company_register_waiting_approve.php" type="submit" class="btn btn-submit btn-custom">
                  <i class="fas fa-check"></i> ยืนยันการสมัคร
                    </a>
                <a href="/cooputcc/modules/login/company_login.php" class="btn btn-cancel btn-custom">
                  <i class="fas fa-times"></i> ยกเลิก
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
