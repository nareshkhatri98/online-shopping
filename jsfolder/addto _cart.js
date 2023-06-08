let button = document.querySelectorAll(".pro");
button.forEach((i) => {
  i.addEventListener("click", function () {
    i.setAttribute("style", "pointer-events:none;background-color:grey;");
    let data = i.getAttribute("data_id");
    alert(data + " paid success");
  });
});

let cart = document.querySelectorAll(".addCart");
var j = 1;
cart.forEach((i) => {
  var x = document.getElementById("count").innerHTML;
  i.addEventListener("click", function () {
    document.getElementById("count").innerHTML = j;
    console.log(j);
    j++;
  });
});