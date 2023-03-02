function sign_in(){
document.getElementById('gen-btn').innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>&nbsp;Processing..';
var token = document.getElementById('token').value.substring(document.getElementById('token').value.indexOf('-') + 1);
var postfields = new FormData();
postfields.append('token', token);
fetch('/controller/sign-in', {
method: `POST`,
body: postfields,
}).then((response) => response.text())
.then((data) => {
document.getElementById('gen-btn').innerHTML = '<i class="fas fa-lock"></i>&nbsp;Sign In';
if(data == 1){
window.location.replace('/controller/dashboard');
} else {
Swal.fire(
  'Failed!',
   '<b>There is no account registered under this token!</b>',
  'error'
);
}
});
}