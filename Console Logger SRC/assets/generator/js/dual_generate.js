if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
document.onkeydown = function (e) {
  if (e.keyCode === 123) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == "C".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
    return false;
  }
  if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
    return false;
  }
};
    document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
function lolselect(that) {
			if (that.value == "BCL") {
				document.getElementById("input-1-profile").style.display = "block";
			} else {
				document.getElementById("input-1-profile").style.display = "none";
			}
			if (that.value == "RCL") {
				document.getElementById("input-2-profile").style.display = "block";
			} else {
				document.getElementById("input-2-profile").style.display = "none";
			}
			if (that.value == "LOL") {
				document.getElementById("input-4-profile").style.display = "block";
			} else {
				document.getElementById("input-4-profile").style.display = "none";
			}
			if (that.value == "SS") {
				document.getElementById("input-3-profile").style.display = "block";
			} else {
				document.getElementById("input-3-profile").style.display = "none";
			}
		}
$('#buttonnmb').click(function(){
this.form.submit();
this.disabled=true;
this.innerHTML='<i class="fa-solid fa-sync fa-spin"></i>  PROCESSING…';
});
$('#lolzio').click(function(){
this.form.submit();
this.disabled=true;
this.innerHTML='<i class="fa-solid fa-sync fa-spin"></i>  PROCESSING…';
});