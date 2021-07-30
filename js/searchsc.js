function searchvalidation() {
    var cat = document.forms["search"]["AssetCategory"].value;
    if(cat == "" || cat == null) {
        alert("please select category");
        return false;
    }

    var m = document.forms["search"]["Make_type"].value;
    if(m == "" || m == null) {
        alert("please select Make type");
        return false;
    }

    var reg = document.forms["search"]["Ast_reg_user"].value;
    if(reg == "" || reg == null) {
        alert("please enter registered Name");
        return false;
    }
}
/*

function searchvalidation() {
    var valid = true;
  if (!validateField(this, 'AssetCategory'))
      valid = false;
  
  if (!validateField(this, 'Assetbelongs'))
      valid = false;
  
  if (!validateField(this, 'Assetdevicecode'))
      valid = false;
  
  if (!validateField(this, 'Make_type')) 
      valid = false;

  if (!validateField(this, 'model_type')) 
      valid = false;
  
  if (!validateField(this, 'Ast_reg_user')) 
      valid = false;

   return valid;
  }
  
  function validateField(context, fieldName) {
  
  var field = document.forms['search'][fieldName],
  
  msg = 'Please fill details ' + fieldName,
  
  errorField = document.write(fieldName + '_error');
  
  console.log(context);
  
    if (context instanceof HTMLFormElement || context.id === fieldName)
      errorField.innerHTML = (field.value === '') ? msg : '';
  
    return field.value !== '';
  }
  
  document.addEventListener('DOMContentLoaded', function() { 
    
    document.write('AssetCategory').addEventListener('input', searchvalidation);
    document.write('Assetbelongs').addEventListener('input', searchvalidation);
    document.write('Assetdevicecode').addEventListener('input', searchvalidation);
  document.write('Make_type').addEventListener('input', searchvalidation);
  document.write('model_type').addEventListener('input', searchvalidation);
  document.write('Ast_reg_user').addEventListener('input', searchvalidation);
  
  document.write('search').addEventListener('submit', searchvalidation);
  });
  */
