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
  checkbox.addEventListener('change', function() {
    var label = this.nextElementSibling;
    if (this.checked) {
      label.style.color = '#fff' /* Ubah warna teks saat tercentang */
    } else {
      label.style.color = ''; /* Kembalikan warna teks ke default */
    }
  });
});



function uncheckOtherCheckboxes(clickedCheckbox,checkboxId) {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var labels = document.querySelectorAll('label');

  checkboxes.forEach(function (checkbox) {
    if (checkbox !== clickedCheckbox) {
    }
    
});


  labels.forEach(function (label){
    if (label.getAttribute('for') === checkboxId){
      label.classList.add('checked');

    }else{
      label.classList.remove('checked');

    }
  });
}

function cekcheckbox(argument) {

}

