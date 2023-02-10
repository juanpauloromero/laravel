$(document).ready(function() {
    $('.basic-single').select2();
});


$(document).ready(function(){
  $(".dropdown-toggle").dropdown();
});

function myFunction() {
   if (!confirm("Vous êtes sûre de le supprimer"))
    event.preventDefault();
 }
                       
 $(document).ready(function(e) {


  $('#image').change(function() {

      let reader = new FileReader();

      reader.onload = (e) => {

          $('#preview-image-before-upload').attr('src', e.target.result);
      }

      reader.readAsDataURL(this.files[0]);

  });

});

var buttons = document.querySelectorAll('.btn')
buttons.forEach(function (button) {
  var button = new bootstrap.Button(button)
  button.toggle()
});

document.querySelectorAll('.dropdown-toggle').forEach(item => {
  item.addEventListener('click', event => {
 
    if(event.target.classList.contains('dropdown-toggle') ){
      event.target.classList.toggle('toggle-change');
    }
    else if(event.target.parentElement.classList.contains('dropdown-toggle')){
      event.target.parentElement.classList.toggle('toggle-change');
    }
  })
});

