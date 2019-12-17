var liens = ["participe", "past-participe", "contribution","edit-profil"];

var profil = document.querySelector("article.profile");
var sections = document.querySelectorAll("article > section");
var divLiens = document.querySelector("div.liens");

for (let sec of sections) {
    sec.style.display = "none";
}
profil.querySelector('section.past-participe').style.display = "flex";

for (let lien of liens) {
    console.log(lien);
    divLiens.querySelector('a#' + lien).addEventListener("click", function () {
        for (let a of divLiens.querySelectorAll('a')) {
            a.classList.remove("active");
        }
        this.classList.add("active");
        for (let sec of sections) {
            sec.style.display = "none";
        }
        profil.querySelector("section." + lien).style.display = "flex";
    });
}