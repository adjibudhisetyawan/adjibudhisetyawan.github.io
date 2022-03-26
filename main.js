function validate(){
    var username = document.getElementById("namaUser");
    var email = document.getElementById("emailUser");
    var password = document.getElementById("passwordUser");

    if(username.value == ""){
        alert("Username empty");
    }else if(email.value == ""){
        alert("email is empty");
    }else if(password.value == ""){
        alert("password is empty");
    }
}