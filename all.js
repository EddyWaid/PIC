const showPopup = document.getElementById('topButton');
const popUp = document.getElementById('popUp');
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');



// --------TOPBAR SI AGGIUNGE BACKGROUND
window.addEventListener('scroll',(event) => {
  if(window.scrollY<=100){
    document.getElementById('topBar').classList.remove('scrolled');
  }
  else{
    document.getElementById('topBar').classList.add('scrolled');
  }
});



//--------POPUP SIGNUP/IN
window.addEventListener('click',(event)=>{
  if(event.target==popUp){
    hidePupup()
  }
});
function hidePupup(){
  popUp.style.display = 'none';
}

showPopup.addEventListener('click', () => {
  popUp.style.display = 'flex';
});
signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
