function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function () {
      const output = document.getElementById("image_preview");
      const icon = document.getElementById("image_icon");
      output.src = reader.result;
      output.style.display = "block";
      icon.style.display = "none";
    };
    reader.readAsDataURL(event.target.files[0]);
  }