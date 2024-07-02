document
.getElementById("same_as_reg_address")
.addEventListener("change", function () {
  if (this.checked) {
    document.getElementById("current_address_no").value =
      document.getElementById("reg_address_no").value;
    document.getElementById("current_address_moo").value =
      document.getElementById("reg_address_moo").value;
    document.getElementById("current_address_soi").value =
      document.getElementById("reg_address_soi").value;
    document.getElementById("current_address_road").value =
      document.getElementById("reg_address_road").value;
    document.getElementById("current_address_subdistrict").value =
      document.getElementById("reg_address_subdistrict").value;
    document.getElementById("current_address_district").value =
      document.getElementById("reg_address_district").value;
    document.getElementById("current_address_province").value =
      document.getElementById("reg_address_province").value;
    document.getElementById("current_address_postalcode").value =
      document.getElementById("reg_address_postalcode").value;
  } else {
    document.getElementById("current_address_no").value = "";
    document.getElementById("current_address_moo").value = "";
    document.getElementById("current_address_soi").value = "";
    document.getElementById("current_address_road").value = "";
    document.getElementById("current_address_subdistrict").value = "";
    document.getElementById("current_address_district").value = "";
    document.getElementById("current_address_province").value = "";
    document.getElementById("current_address_postalcode").value = "";
  }
});