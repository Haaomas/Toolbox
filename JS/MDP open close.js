// ---- CODE PRINCIPAL
icon = document.querySelector(".far");
icon.addEventListener("click", closeEye);

// ---- FONCTIONS
function closeEye () {
    icon.classList.toggle("fa-eye-slash");
    if(icon.classList.contains("fa-eye-slash")){
        document.querySelector("#login").type = "text"
    } else {
        document.querySelector("#login").type = "password";
    }

}    

