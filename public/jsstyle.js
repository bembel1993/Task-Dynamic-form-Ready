
var input1 = document.getElementById("last_name");
var input2 = document.getElementById("first_name");
var input3 = document.getElementById("patronymic");

input1.addEventListener("focus", function () {
    this.style.fontSize = "15px";
});
input1.addEventListener("blur", function () {
    this.style.fontSize = "13px";
});


input2.addEventListener("focus", function () {
    this.style.fontSize = "15px";
});
input2.addEventListener("blur", function () {
    this.style.fontSize = "13px";
});

input3.addEventListener("focus", function () {
    this.style.fontSize = "15px";
});
input3.addEventListener("blur", function () {
    this.style.fontSize = "13px";
});
