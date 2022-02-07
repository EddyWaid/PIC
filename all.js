const arrow = document.getElementById('arrowRight');


for (var i = 0, x=500; i < 3; i++) {
  setTimeout(function(){arrow.style.marginLeft = '25px';},x);
  x+=500;
  setTimeout(function(){arrow.style.marginLeft = '10px';},x);
  x+=500;
}

function goRight(){
  document.getElementById('landing').style.right = '100%';
  document.getElementsByClassName('choise')[0].style.left=0;
  document.getElementsByClassName('choise')[1].style.left=0;
  document.getElementsByClassName('choise')[2].style.left=0;
}

function choice(x){
  var cho = document.getElementsByClassName('choise')[x];
  cho.style.top=0;
  cho.style.height='100%';
  cho.style.zIndex='4';
  cho.style.justifyContent = 'unset';
  cho.style.cursor = 'default';
}
