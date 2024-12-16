var profileBtn = document.getElementById("profileBtn");
var profileButton = document.getElementById("profileButton");
var profile = document.querySelector(".profile");

profileBtn.addEventListener("click", function () {
  profile.style.transform = "translateX(350px)";
  profile.style.transition = "3s";
});
profileButton.addEventListener("click", function () {
  profile.style.transform = "translateX(0px)";
  profile.style.transition = "3s";
});



