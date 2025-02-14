let button = document.getElementById("but");
let count = 0;
button.addEventListener('click', LogOnClick)

function LogOnClick() {
    button.style.backgroundColor = "white";
    button.style.color = "black";
    count++;
    console.log("Вы кликнули " + count + " раз(а)");
    if (count % 5 == 0) {
        button.style.backgroundColor = "blue";
        button.style.color = "white";
    }
    if (count % 10 == 0) {
        button.style.backgroundColor = "red";
        button.style.color = "white";
    }
}