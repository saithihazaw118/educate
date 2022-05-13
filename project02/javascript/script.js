const regForm = document.getElementById("regForm");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const cpassword = document.getElementById("cpassword");

let formName = false;
let formEmail = false;
let formPassword = false;
let formCpassword = false;

regForm.addEventListener("submit", (e) => {
  validateInputs();
  if (!(formName && formEmail && formPassword && formCpassword)) {
    e.preventDefault();
  } else {
    $(this).unbind("submit");
    e.currentTarget.submit();
  }
});

const setError = (element, message) => {
  const formGroup = element.parentElement;
  const errorDisplay = formGroup.querySelector(".error");

  errorDisplay.innerText = message;
  formGroup.classList.add("error");
  formGroup.classList.remove("success");
};

const setSuccess = (element) => {
  const formGroup = element.parentElement;
  const errorDisplay = formGroup.querySelector(".error");

  errorDisplay.innerText = "";
  formGroup.classList.add("success");
  formGroup.classList.remove("error");
};

const isValidString = (username) => {
  const re = /^(?! )[A-Za-z\s]+$/;
  return re.test(String(username).toLowerCase());
};
const isValidEmail = (email) => {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
};

const validateInputs = () => {
  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  const cpasswordValue = cpassword.value.trim();

  if (usernameValue === "") {
    setError(username, "Name is required");
  } else if (!isValidString(usernameValue)) {
    setError(username, "Letters and WhiteSpaces only");
  } else {
    setSuccess(username);
    formName = true;
  }

  if (emailValue === "") {
    setError(email, "Email is required");
  } else if (!isValidEmail(emailValue)) {
    setError(email, "Provide a valid email address");
  } else {
    setSuccess(email);
    formEmail = true;
  }

  if (passwordValue === "") {
    setError(password, "Password is required");
  } else if (passwordValue.length < 8) {
    setError(password, "Password must be at least 8 character.");
  } else {
    setSuccess(password);
    formPassword = true;
  }

  if (cpasswordValue === "") {
    setError(cpassword, "Please confirm your password");
  } else if (cpasswordValue !== passwordValue) {
    setError(cpassword, "Passwords doesn't match");
  } else {
    setSuccess(cpassword);
    formCpassword = true;
  }
};
