const navbarNav = document.querySelector ('.navbar-nav');
//ketika Hamburger menu di klik
document.querySelector ('#hamburger-menu') .onclick = ()=> {
  navbarNav.classList.toggle('active');
};

//klik diluar side bar untuk menghilangkan nav

const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click',function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
  }
});


var checkboxes = document.querySelectorAll('input[type="checkbox"]');

// Menambahkan event listener pada setiap checkbox
checkboxes.forEach(function(checkbox) {
  checkbox.addEventListener('click', function() {
    var label = this.nextElementSibling;
    if (this.checked) {
      label.classList.add('checked');
    } else {
     label.classList.remove('checked');
    }
  });
});


function validateForm() {
    // Mengambil nilai input
    var name = document.getElementById("name").value;
    var table = document.getElementById("table").value;
    // Mengambil nilai checkbox
    var checkboxes = document.querySelectorAll('input[type="checkbox"][name="food[]"]:checked');
    var quantities = document.getElementsByClassName("input-field");
    var checkboxess = document.getElementsByName("food[]");
    var inputFields = document.getElementsByClassName("input-field");


    // Melakukan pengecekan
    if (name == "") {
      alert("Nama Tidak Valid");
      return false;
    }

    if (table == "" || table < 1 || table > 20) {
      alert("Masukkan No Table (1-20)");
      return false;
    }

    // Melakukan pengecekan
    if (checkboxes.length === 0) {
      alert("Pilih Salah Satu Menu");
      return false;
    }

    for (var i = 0; i < checkboxess.length; i++) {
        if (checkboxess[i].checked) {
          if (inputFields[i].getElementsByTagName("input")[0].value === "") {
          alert("Please enter a quantity for the selected menu");
          return false;
        }
        } 
      }

   


    // Mengembalikan nilai true jika semua validasi berhasil
    return true;
  }







