function tester() {
    var firstName = document.getElementById("first_name").value;
    var lastName = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var phoneNumber = document.getElementById("phone_number").value;
    var message = document.getElementById("Message").value;
  

    var errorMessage = "";

    if (firstName === "") {
        errorMessage += "Veuillez saisir votre prénom.\n";
    }
    if (lastName === "") {
        errorMessage += "Veuillez saisir votre nom de famille.\n";
    }
    if (email === "") {
        errorMessage += "Veuillez saisir votre adresse e-mail.\n";
    }
    if (phoneNumber === "") {
        errorMessage += "Veuillez saisir votre numéro de téléphone.\n";
    }
    if (message === "") {
        errorMessage += "Veuillez saisir votre message.\n";
    }

    var isValidPhoneNumber = /^\d+$/.test(phoneNumber);
    if (!isValidPhoneNumber) {
        errorMessage += "Le numéro de téléphone doit contenir uniquement des chiffres.\n";
    }

    var masculinChecked = document.getElementById("masculin").checked;
    var femininChecked = document.getElementById("feminin").checked;
    if (!masculinChecked && !femininChecked) {
        errorMessage += "Veuillez choisir votre sexe.\n";
    }

    if (errorMessage !== "") {
        alert(errorMessage);
        return false; 
    }

    
    return true;
}

var facebookIcon = document.getElementById("facebook");
var instagramIcon = document.getElementById("instagram");
var twitterIcon = document.getElementById("twitter");

facebookIcon.addEventListener("mouseover", agrandirIcone);
instagramIcon.addEventListener("mouseover", agrandirIcone);
twitterIcon.addEventListener("mouseover", agrandirIcone);

function agrandirIcone(event) {
    event.target.style.transform = "scale(3)";
    event.target.style.color ="#00BFFF"
}

facebookIcon.addEventListener("mouseout", retrecirIcone);
instagramIcon.addEventListener("mouseout", retrecirIcone);
twitterIcon.addEventListener("mouseout", retrecirIcone);

function retrecirIcone(event) {
    event.target.style.transform = "scale(1)";
    event.target.style.color ="white" ;
}

var submit = document.getElementById("submit");


submit.addEventListener("mouseover", function() {
    this.style.transform = "scale(1.1)";
});
submit.addEventListener("mouseout", function() {
    this.style.transform = "scale(1)";
});


