<input type="text" id="num1">
<input type="text" id="num2">
<button onclick="add()">Tambahkan</button>
<div id="result"></div>

function add() {
  var num1 = parseInt(document.getElementById("num1").value);
  var num2 = parseInt(document.getElementById("num2").value);
  var sum = num1 + num2;
  document.getElementById("result").innerHTML = "Hasil penjumlahan: " + sum;
}