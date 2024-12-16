const togglePassword = document.getElementById("togglePassword");
const password = document.querySelector("#password");
const togglePassword2 = document.getElementById("togglePassword2");
const rePassword = document.querySelector("#rePassword");

togglePassword.addEventListener("click", function (e) {
  const type =
    password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);

  this.classList.toggle("fa-eye-slash");
});




