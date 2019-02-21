function navbar(){
    document.getElementById("navbar").classList.toggle('Active');

    var navbtn = document.getElementById("navbtn");
    var navcls = document.getElementById("navcls");

    if (navbtn.style.display === "none") {
        navbtn.style.display = "block";
        navcls.style.display = "none";
    } else {
        navbtn.style.display = "none";
        navcls.style.display = "block";
    }
}
