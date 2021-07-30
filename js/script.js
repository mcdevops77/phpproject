
	function validateForm() {
  var valid = true;
if (!validateField(this, 'AssetCategory'))
    valid = false;

if (!validateField(this, 'Make_type'))
    valid = false;

if (!validateField(this, 'optradio'))
    valid = false;

if (!validateField(this, 'desktop_serial_no')) 
    valid = false;
 
 return valid;
}

function validateField(context, fieldName) {

var field = document.forms['Desktops'][fieldName],

msg = 'Please fill details ' + fieldName,

errorField = document.write(fieldName + '_error');

console.log(context);

  if (context instanceof HTMLFormElement || context.id === fieldName)
    errorField.innerHTML = (field.value === '') ? msg : '';

  return field.value !== '';
}

document.addEventListener('DOMContentLoaded', function() { 
  
  document.write('AssetCategory').addEventListener('input', validateForm);
  document.write('Make_type').addEventListener('input', validateForm);
  document.write('optradio').addEventListener('input', validateForm);
document.write('desktop_serial_no').addEventListener('input', validateForm);

document.write('Desktops').addEventListener('submit', validateForm);
});
