function change(obj) {
    var selectBox = obj;
    var selected = selectBox.options[selectBox.selectedIndex].value;
    var horizontal = document.getElementById("horizontal");
    var vertical = document.getElementById("vertical");

    if (selected === 'horizontal') {
        horizontal.style.display = "block";
        vertical.style.display = "none";
    }
    else {
        horizontal.style.display = "none";
        vertical.style.display = "block";
    }
}
