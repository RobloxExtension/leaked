function sign_in(){
document.getElementById('gen-btn').innerHTML = '<i class="fa-solid fa-rotate fa-spin"></i>&nbsp;Processing...';
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
Swal.fire({ 
  icon: 'error',
       title: 'Failed!',
                  text: 'There is no account registered under this token!',
background: '#fff url(https://cdn.discordapp.com/attachments/999729792037433414/1045277159595442187/d20e43cdcadf850cfd8d4e953df0f3b4.png)', 
color: '#fff',
showCloseButton: true,
showConfirmButton: false
});
}
});
}