let form = 0;
showForm(form);

function showForm(n){
    let x = document.getElementsByClassName("form");
    x[n].style.display = "block";
    fixStepIndicator(n);
}

function nextButton(n,event) {
    let x = document.getElementsByClassName("form");
    let quantity = document.getElementById('quantity-num').value;
    let price = document.getElementById('price');

    if(quantity>=1&&quantity<=10){
        price.innerHTML = '$10';
    }else if(quantity>10&&quantity<=100){
        price.innerHTML = '$100';
    }else if(quantity>100&&quantity<=1000){
        price.innerHTML = '$1000';
    }else{price.innerHTML = ''}

    if (n === 1 && !validateForm()) return false;

    if (form >= x.length) {
        document.getElementById("regForm").submit();
        return false;
    }

    x[form].style.display = "none";

    form = form + n;
    showForm(form);
    event.preventDefault();
}
function again(){

}

function validateForm() {
    let x, y, i, valid = true;
    x = document.getElementsByClassName("form");
    y = x[form].getElementsByTagName("input");

    for (i = 0; i < y.length; i++) {
        if (y[i].value === "") {
            y[i].className += " invalid";
            valid = false;
        }
    }
    if (valid) {
        document.getElementsByClassName("step")[form].className += " finish";
    }
    return valid;
}

function fixStepIndicator(n) {
    let i, x = document.getElementsByClassName("step");

    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
}



