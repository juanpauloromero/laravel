window.addEventListener('load', (event) => {
    removeLivraison();
    week();
    removeLivraison1();
});

function removeLivraison() {
    let livraison = document.querySelector(".delete-livraison");
    livraison.addEventListener("click", test);
}

function test() {
    document.querySelector(".delete-livraison").style.display = "none";
    document.querySelector(".livraison").style.display = "none";
}

function week() {
    let week = document.querySelector(".week");
    week.innerHTML = getPreviousSunday(new Date());
    console.log("bonjour")
}

function getPreviousSunday(date = new Date()) {
    const previousSunday = new Date();

    previousSunday.setDate(date.getDate() - date.getDay());
    return Intl.DateTimeFormat('fr-CA', { year: 'numeric', month: 'long', day: 'numeric' }).format(previousSunday);

}

console.log(getPreviousSunday(new Date));

function removeLivraison1() {
    let livraison = document.querySelector("#delete-livraison1");
    livraison.addEventListener("click", test1);
}

function test1() {

    document.querySelector("#delete-livraison1").remove();
    document.querySelector("#livraison1").remove();
}

