function start() {
    var kleur = "";
    if (kleur == null) {
        kleur = "dark";
        localStorage.setItem("thema", kleur);
    } else {
        if (localStorage.getItem("thema") == "light") {
            var element = document.body;
            element.classList.toggle("light");
            element2 = document.getElementById('navigatie');
            element2.classList.toggle("light");
        }
    }
}

function myFunction() {
    if (localStorage.getItem("thema") == null) {
        localStorage.setItem("thema", "dark");
    }

    if (localStorage.getItem("thema").match("dark")) {
        delete (kleur);
        location.reload();
        kleur = "light"
        console.log(kleur);
        localStorage.setItem("thema", kleur);
        return;
    }
    if (localStorage.getItem("thema").match("light")) {
        delete (kleur);
        location.reload();
        kleur = "dark"
        console.log(kleur);
        localStorage.setItem("thema", kleur);
        return;
    }
}

