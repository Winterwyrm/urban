function submit_form(id) {
  if (document.getElementsByName('query')[0].value !== "") {
    document.getElementById(id).submit();
  }
}

function set_business(isBusiness) {
  if (isBusiness) {
    document.getElementsByName('name')[0].setAttribute('placeholder', 'Business Name');
    document.getElementsByName('isbusiness')[0].value = "1";
    document.getElementById('atoz').setAttribute('type', 'text');
  } else {
    document.getElementsByName('isbusiness')[0].value = "0";
    document.getElementsByName('name')[0].setAttribute('placeholder', 'Name');
    document.getElementById('atoz').setAttribute('type', 'hidden');
    console.log(document.getElementById('atoz'));
  }
}
