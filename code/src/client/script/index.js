
function loginButton() {
    location.href = "../server/login.php";
}
function registerButton() {
    location.href = "../server/register.php";
}

function like(x) {
    // toggles both to swap between
    x.classList.toggle("bi-heart"); 
    x.classList.toggle("bi-heart-fill");
    
    //will add to/remove from list of liked posts in db
}
