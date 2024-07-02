function toggleDrivingLicense() {
    var hasLicense = document.getElementById("has_driving_license").checked;
    document.getElementById("driving_license").disabled = !hasLicense;
    document.getElementById("driving_license_type").disabled = !hasLicense;
    document.getElementById("driving_license_expiry_day").disabled =
      !hasLicense;
    document.getElementById("driving_license_expiry_month").disabled =
      !hasLicense;
    document.getElementById("driving_license_expiry_year").disabled =
      !hasLicense;
  }