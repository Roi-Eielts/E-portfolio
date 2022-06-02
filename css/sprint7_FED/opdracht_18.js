function functie() {
    var input = document.getElementById("num").value;
    if(isNaN(input)){
        document.write("dit is geen nummer");
    }else{
        var keersom = input*2;
        document.write("Als je " + input +" verdubbelt krijg je " + keersom);
    }
}