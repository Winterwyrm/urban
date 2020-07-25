function submit_form(id) {
  if (document.getElementsByName('query')[0].value !== "") {
    document.getElementById(id).submit();
  }
}
