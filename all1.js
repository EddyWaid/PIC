const popUp = document.getElementById('popUp');
const menuLat = document.getElementById('menuLat');
const topBar = document.getElementById('topBar');
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');

const container = document.getElementById('container');
const confermaIN = document.getElementById('confIN');
const confermaUP = document.getElementById('confUP')

const emailIN = document.getElementById('emailIN');
const pswIN = document.getElementById('pswIN');
const formIN = document.getElementById('formIN');
const errIN = document.getElementById('errIN');


const nome = document.getElementById('nomeUP');
const cognome = document.getElementById('cognomeUP');
const emailUP = document.getElementById('emailUP');
const errEmail = document.getElementById('errEmail');
const pswUP = document.getElementById('pswUP');
const pswUPsec = document.getElementById('2pswUP');
const formUP = document.getElementById('formUP');




//--------maestra ISCRIZIONE

setTimeout(function(){showMaestra()},5000);


function showMaestra(){
  document.getElementById('iscrivitiBox').style.right = '0%';
}
function hideMaestra(){
  document.getElementById('iscrivitiBox').style.right = '-15%';
}
function delay(){
  hidePupup();
  hideMaestra();
  setTimeout(function(){showMaestra()},120000);
}





//--------POPUP SIGNUP/IN
window.addEventListener('click',(event)=>{
  if(event.target==popUp){
    delay();
  }
});
function hidePupup(){
  popUp.style.display = 'none';
}
function hideErr(){
  document.getElementById('conErr').style.display = 'none';
}

document.getElementById('maestra').addEventListener('click', () => {
  popUp.style.display = 'flex';
  hideMaestra();
});
signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


//-------------CLICK confermaIN
formIN.addEventListener('submit',(event)=> {
  event.preventDefault();
  signIn();
});

//-----------CLICK confermaUP
formUP.addEventListener('submit',(event)=>{
  event.preventDefault();
  signUp();
});


//-----------SIGNIN
function signIn(){
  var mail = emailIN.value;
  var ps = pswIN.value;

  var params = "email="+mail+'&psw='+ps;

  var xhr = new XMLHttpRequest();
  xhr.open('POST','php/log.php',true);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onload = function(){
    if(this.responseText == 'errCONN'){
      document.getElementById('connErr').style.display = 'block';
    }
    else if(this.responseText == 'nope') {
      emailIN.classList.add('err');
      pswIN.classList.add('err');
      errIN.style.display = 'block';
      errIN.classList.add('errAPP');
    }
    else {
      setCookie('id',this.responseText,1);
      hidePupup();
    }
  }
  xhr.send(params);
}


//-------------SIGNUP
function signUp(){
  var mail = emailUP.value;
  var psw = pswUP.value;
  var pswSec = pswUPsec.value;
  var name = nomeUP.value;
  var cognome = cognomeUP.value;

  if (psw.localeCompare(pswSec) != 0){
    pswUP.classList.add('err');
    pswUPsec.classList.add('err');
  }
  else {
    var params = 'email='+mail+'&psw='+psw+'&name='+name+'&cognome='+cognome;

    var xhr = new XMLHttpRequest();
    xhr.open('POST','php/sign.php',true);
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded')

    xhr.onload = function(){
      if(this.responseText == 'errCONN'){
        document.getElementById('connErr').style.display = 'block';
      }
      else {
        if(this.response == 'errES'){
          emailUP.classList.add('err');
          errEmail.classList.add('errAPP');
          errEmail.style.display = 'block';
        }
        else {

        }
      }
    }
    xhr.send(params);
  }

}


/* COOKIES */
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
function checkCookie(cname){
  let name = getCookie(cname);
  if(name != "")
  {
    return name;
  }
  else
  {
    return 'no';
  }
}
