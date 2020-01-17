function measurement() {
    var obj = document.getElementById("select");
    var text = document.getElementById("text");
    var num = document.getElementById("towers");
    var tower = num.options[num.selectedIndex].text;
    var space = " ";

    selected_value = obj.options[obj.selectedIndex].value;
    set_text = "The" + space + tower;

    calculate_amount(num.options[num.selectedIndex].value, obj.options[obj.selectedIndex].value);

    full_text = set_text + space + height_amount + space + selected_value;

    document.getElementById("measurement").innerHTML = full_text;
}

function calculate_amount(amount, measurement) {
    if(measurement == "centimeters"){
        height_amount = amount * 100;

    }else if(measurement == "inches"){
        height_amount = amount * 39.37;

    }else if(measurement == "feet"){
        height_amount = amount * 3.28;

    }else{
        height_amount = amount;
    }
    Math.round(height_amount);
    return height_amount;

}