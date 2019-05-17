// Login Modal form

function login(){
var mode = document.getElementById('logup');

var icone = document.getElementById("shwo");

var spane = document.getElementsByClassName("finish")[0];
 
icone.onclick = function() {
  mode.style.display = "block";
}

spane.onclick = function() {
  mode.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == mode) {
    mode.style.display = "none";
  }
}
}
