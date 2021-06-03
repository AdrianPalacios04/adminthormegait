function change(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var posicion = document.getElementById("posicion");
    var posicion1 = document.getElementById("posicion1");

    if (selected === 'horizontal') {
        posicion.style.display = "block";
        posicion1.style.display = "none";
    }
    else {
        posicion.style.display = "none";
        posicion1.style.display = "block";
    }
}
