function showInput() {
      var checkboxes = document.getElementsByName("food[]");
      var inputFields = document.getElementsByClassName("input-field");
      
      for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
          inputFields[i].classList.remove("hidden");
        } else {
          inputFields[i].classList.add("hidden");
        }
      }
    }

