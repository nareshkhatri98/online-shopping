
const loginForm = document.getElementById("Loginform");
const emailInput = loginForm.querySelector("input[type='text'], input[type='email']");
const passwordInput = loginForm.querySelector("input[type='password']");

loginForm.addEventListener("submit", function(event) {
  if (!emailRegex.test(emailInput.value)) {
    event.preventDefault();
    emailInput.classList.add("error");
    emailInput.nextElementSibling.textContent = "Please enter a valid email address";
  } else {
    emailInput.classList.remove("error");
    emailInput.nextElementSibling.textContent = "";
  }
  if (!passwordRegex.test(passwordInput.value)) {
    event.preventDefault();
    passwordInput.classList.add("error");
    passwordInput.nextElementSibling.textContent = "Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, and one number";
  } else {
    passwordInput.classList.remove("error");
    passwordInput.nextElementSibling.textContent = "";
  }
});

