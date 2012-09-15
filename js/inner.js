anylinkcssmenu.init("anchorclass");
/*
function showonlyone(thechosenone) {
      var newboxes = document.getElementsByTagName("div");
            for(var x=0; x<newboxes.length; x++) {
                  name = newboxes[x].getAttribute("class");
                  if (name == 'newboxes') {
                        if (newboxes[x].id == thechosenone) {
                        newboxes[x].style.display = 'block';
                  }
                  else {
                        newboxes[x].style.display = 'none';
                  }
            }
      }
}*/

function toggle1(){
  	var signin_menu = document.getElementById('signin_menu')
  	if (signin_menu.style.display == 'none') {
  		signin_menu.style.display = 'block'
  	} else {
  		signin_menu.style.display = 'none'
  	}
  }
