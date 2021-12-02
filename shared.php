<html>

  <!     -----TOPBAR----->
  <div class="topBox" id="topBar">

    <a href="index.php" class="topLink">LOGO</a>
    <a href="#About" class="topLink">Chi sono</a>
    <a href="#Video-lezioni" class="topLink">Video-lezioni</a>
    <a href="#Materiale" class="topLink">Materiale</a>
    <a href="#Speziali" class="topLink">Speziali</a>
    <button id="topButton">Registrati</button>
  </div>

  <!     -----POPUP SIGNUP/IN---->
  <div class="popUp" id="popUp" >

    <div class="container" id="container">

      <span class="close" onclick="hidePupup()">&times;</span>
	    <div class="form-container sign-up-container">
		    <form action="#">
			    <h1>Registrati</h1>
			      <input type="text" placeholder="Name" />
			      <input type="email" placeholder="Email" />
		        <input type="password" placeholder="Password" />
			      <button>Conferma</button>
		    </form>
	    </div>
	    <div class="form-container sign-in-container">
		    <form action="#">
			    <h1>Accedi</h1>
			    <input type="email" placeholder="Email" />
			    <input type="password" placeholder="Password" />
			    <a href="#">Password dimenticata?</a>
			    <button>Conferma</button>
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
<link rel="stylesheet" href="css/all.css">
<script type="text/javascript" src="all.js"></script>
</head>

</html>
