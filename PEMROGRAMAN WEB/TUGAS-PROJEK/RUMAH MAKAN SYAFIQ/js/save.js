function calculateTotalPrice() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"][name="food[]"]:checked');
    var quantities = document.querySelectorAll('input[type="number"][name="quantity[]"]');
    var totalPrice = 0;

    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        var quantity = parseInt(quantities[i].value);
        if (!isNaN(quantity) && quantity > 0) {
          var priceElement = checkboxes[i].parentNode.querySelector('p');
          var price = parseInt(priceElement.innerText.replace("Rp ", "").replace(".", ""));
          totalPrice += price * quantity;
        }
      }
    }

    // Update the total price on the page
    var totalElement = document.getElementById("total-price");
    totalElement.innerText = "Total Price: Rp " + totalPrice.toLocaleString();
  }
