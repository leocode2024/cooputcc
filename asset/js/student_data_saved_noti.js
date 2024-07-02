function handleSubmit(event) {
    event.preventDefault();
    document.getElementById("successMessage").style.display = "block";
    setTimeout(function () {
      window.location.href =
        "/cooputcc/modules/student/student_dashboard_waiting_approve.php";
    }, 2000);
  }