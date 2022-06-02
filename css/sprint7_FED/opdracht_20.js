function functie() {
    var input = document.getElementById('in').value;
    var bedrag = document.getElementById("get").value;
    if(isNaN(bedrag)) {
        document.write("dat is geen nummer!");
    } else {
        if(input === "euro-dolar") {
            var uit = bedrag * 0.9;
            document.write(uit);
        }
        if(input === "euro_dolar") {
            var uit = bedrag * 1.1;
            document.write(uit);
        }
        if(input === "euro-pesos") {
            var uit = bedrag * 600;
            document.write(uit);
        }
        if(input === "pesos_euro") {
            var uit = bedrag / 600;
            document.write(uit);
        }
    }
}