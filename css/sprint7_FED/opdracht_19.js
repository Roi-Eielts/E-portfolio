function functie() {
    var input = document.getElementById("num").value;
    if(isNaN(input)) {
        document.write("nummer is nee ");
    } else {
           var output = input * 0.90;
           document.write(output);
    }
}