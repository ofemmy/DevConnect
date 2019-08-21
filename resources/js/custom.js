module.exports = function togglePasswordVisibility() {
    let pwd = document.querySelector("#pwd");
    let pwdtoggler = document.querySelector("#pwdtoggle");
    pwdtoggler.addEventListener("click", togglevisible);
      function togglevisible(e) {
        pwd.type = pwd.type == "password" ? "text" : "password";
        pwdtoggler.innerText =
          pwdtoggler.innerText == "visibility"
            ? "visibility_off"
            : "visibility";
      }  
};
