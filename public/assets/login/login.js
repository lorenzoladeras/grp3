const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "admin" && password === "aclc") {
        location.href = '/WGaUaHcPBrLDSLclDKMvJzftVrfLIYgS';
    } else {
        loginErrorMsg.style.opacity = 1;
    }
})