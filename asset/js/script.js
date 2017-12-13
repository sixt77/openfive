function cost_calculator(Tab, $nbmax) {
    var DrinkP = 2;
    var AdultP = 5;
    var CakeP = 40;
    var select = document.getElementById("select").value;
    var drink = document.getElementById("drink").value * DrinkP;
    var adult = document.getElementById("adult").value * AdultP;
    var enfant = document.getElementById("enfant").value;
    var cake = document.getElementById("cake").value * CakeP;
    if($nbmax >= enfant && enfant !="" && enfant !=0) {
        for (i = 0; i < Tab.length; i++) {
            if (select == Tab[i][1]) {
                document.getElementById("submit_button").disabled = false;
                document.getElementById("submit_button").style.backgroundColor = "green";
                document.getElementById("cost_result").value = ((Tab[i][2] * enfant) + drink + adult + cake);
                document.getElementById("idformule").value = Tab[i][0];

            }
        }
    }
    else{
        document.getElementById("submit_button").disabled = true;
        document.getElementById("submit_button").style.backgroundColor = "red";
        document.getElementById("cost_result").value = "erreur de saisie";
    }
}
