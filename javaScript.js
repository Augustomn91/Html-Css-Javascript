var email = document.getElementById("email");
var password = document.getElementById("password")
const btnenviar = document.getElementById("btn-enviar")



email.addEventListener("focus", function() {
    email.style.borderColor = "rgb(53, 98, 116)"
    email.style.backgroundColor = "rgb(216, 231, 236)"
})

email.addEventListener("blur", function() {
    email.style.borderColor = "rgb(94, 181, 216)"
    email.style.backgroundColor = "rgb(255, 255, 255)"
})

password.addEventListener("focus", function() {
    password.style.borderColor = "rgb(53, 98, 116)"
    password.style.backgroundColor = "rgb(216, 231, 236)"
})

password.addEventListener("blur", function() {
    password.style.borderColor = "rgb(94, 181, 216)"
    password.style.backgroundColor = "rgb(255, 255, 255)"
})



