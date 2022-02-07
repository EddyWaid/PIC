<head>
  <link rel="stylesheet" href="css/all.css">
</head>

    <!-- TOPBAR-->
    <div class="topBox" id="topBar">
        <a href="#home" class="topLink selected">Home</a>
        <a href="#Video-lezioni" class="topLink">Video-lezioni</a>
        <a href="#Materiale" class="topLink">Materiale</a>
        <a href="#Speziali" class="topLink">Speciali</a>
          <!--button id="topButton">Registrati</button-->
    </div>

    <!     -----POPUP SIGNUP/IN---->
    <div class="popUp" id="popUp" >

      <div class="ErrtopBox" id="connErr">
          <span class="close" onclick="hideErr()">×</span>
          <p style="margin: 0.5%;">C&#130;&#233; stato un problema di connesione. Ritenta pi&#249; tardi.</p>
      </div>

      <div class="container" id="container">

          <span class="close" onclick="delay()">&times;</span>

	         <div class="form-container sign-up-container">
		           <form action="#" id="formUP">
			              <h1>Registrati</h1>
			                 <input required type="text" placeholder="Nome" id='nomeUP' />
                       <input required type="text" placeholder="Cognome" id='cognomeUP' />

                       <input required type="email" placeholder="Email" id="emailUP"/>
                        <p class="er" id="errEmail">*Email non valida o gi&#224; esistete</p>

                       <input required type="password" placeholder="Password" id="pswUP"/>
		                   <input required type="password" placeholder="Ripeti password" id="2pswUP"/>
			                    <button id="confUP" class="Noghost">Conferma</button>
		            </form>
	          </div>

            <div class="form-container sign-in-container">
		            <form action="#" id="formIN">
			               <h1>Accedi</h1>
			                  <input required type="email" placeholder="Email" name="email" id="emailIN"/>

                        <input required type="password" placeholder="Password" name='psw' id='pswIN'/>

                        <p class="er" id="errIN">*Credenziali errate</p>
			                  <a href="#">Password dimenticata?</a>
			                     <button id="confIN" class="Noghost1">Conferma</button>
		            </form>
	          </div>


	           <div class="overlay-container">

		             <div class="overlay">
			                <div class="overlay-panel overlay-left">
                          <h1>Benvenuto!</h1>
                          <p>Inserisci i tuoi dati personali per iscriverti</p>
                          <p>oppure</p>
				                      <button class="ghost" id="signIn">Accedi</button>
			                 </div>
			                 <div class="overlay-panel overlay-right">
				                     <h1>Bentornato!</h1>
				                      <p>Inseisci dati per accedere</p>
                              <p>oppure</p>
				                          <button class="ghost" id="signUp">Inscriviti</button>
			                 </div>
		              </div>
	            </div>

          </div>
      </div>

<head>
  <meta charset="utf-8">
  <script type="text/javascript" src="all.js"></script>
</head>
