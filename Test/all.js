
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }


 var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

          function validatePassword(){
            if(password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
              confirm_password.setCustomValidity('');
            }
      }

/*password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;*/


function cc_format(value) {
  var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '')
  var matches = v.match(/\d{4,13}/g);
  var match = matches && matches[0] || ''
  var parts = []
  for (i = 0, len = match.length; i < len; i += 4) {
    parts.push(match.substring(i, i + 4))
  }
  if (parts.length) {
    return parts.join('-')
  } else {
    return value
  }
}

onload = function() {
  document.getElementById('aadhharno').oninput = function() {
    this.value = cc_format(this.value)
  }
}




