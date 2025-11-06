document.addEventListener("DOMContentLoaded", function () {
  const popupBox = document.getElementById("popup-box");
  const closeBtn = document.getElementById("closeBtn");

  // Luk popuppen når man klikker på krydset
  if (closeBtn && popupBox) {
    closeBtn.addEventListener("click", function () {
      popupBox.style.display = "none";
    });
  }
});
