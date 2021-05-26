function mdpDifferent() {
    if (document.getElementById("password").value!=document.getElementById("cpassword").value) {
    document.getElementById("password").style.backgroundColor="#F08080";
    document.getElementById("cpassword").style.backgroundColor="#F08080";
    alert("Les mots de passes sont différents !\nVeuillez recommencer l\'opération en saisissant des mots de passes identique.");
    return false;
}
    else {
    return true;
}

}
function icodeexite(){

}


