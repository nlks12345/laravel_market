const passwordField = document.querySelector('#password')
const confirmPasswordField = document.querySelector('#confirmPassword')

function switchVisibility() {
  if (passwordField.getAttribute('type') === 'password') 
    passwordField.setAttribute('type', 'text')
  else passwordField.setAttribute('type', 'password')
}

function switchConfirmVisibility() {
    if (confirmPasswordField.getAttribute('type') === 'password') 
    confirmPasswordField.setAttribute('type', 'text')
    else confirmPasswordField.setAttribute('type', 'password')
}


getAcceptedExtension = function() {
  $('#inputFile').attr('accept', '.jpg, .png');
  $('#inputFile').show();
  $('#inputFile').focus();
  $('#inputFile').click();
  $('#inputFile').hide();
}

getAcceptedExtensionBG = function() {
  $('#inputFileBG').attr('accept', '.jpg, .png');
  $('#inputFileBG').show();
  $('#inputFileBG').focus();
  $('#inputFileBG').click();
  $('#inputFileBG').hide();
}


var loadProfileFile = function(event) {
	var image = document.getElementById('profile_output');
	image.src = URL.createObjectURL(event.target.files[0]);
};

var loadBackgroundFile = function(event) {
	var image = document.getElementById('bg_output');
	image.src = URL.createObjectURL(event.target.files[0]);
};


