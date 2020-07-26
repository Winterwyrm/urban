function submit_form(id) {
  if (document.getElementsByName('query')[0].value !== "") {
    document.getElementById(id).submit();
  }
}

function process_user(isUser) {
  if (!isUser) {
    document.getElementsByName('business')[0].setAttribute('style', 'display: block;')
    document.getElementsByName('is_business')[0].setAttribute('value', '1');
  } else {
    document.getElementsByName('business')[0].setAttribute('style', 'display: hidden;');
    document.getElementsByName('is_business')[0].setAttribute('value', '0');
  }
}
