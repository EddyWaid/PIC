<html>

  <div class="logo"> <!-- MAESTRA P.I.C -->
  </div>

  <div class="iscriviti" id="iscrivitiBox">
    <img src="css/img/maestra.png" class="lose" id="maestra"></img>
    <img src="css/img/maestra1.png"></img>
    <span class="close" onclick="delay()">×</span>
  </div>
  <div class="cont"> <!-- PADRE TUTTE SEZIONI -->
        <?php
          include 'shared.php';//TOPBOX & ISCRIZIONE
        ?>
    <!--SEZIONE MATERIE-->
    <div class="materie">
        <img src="css/img/back2.png" style="position:absolute;width:100%;height:100%;left:0;">
        <h1>MATERIALE DIDATTICO</h1>

        <div class="grid"> <!--GRAMMATICA-->
            <div class="gridItem">
                <span>
                  <img src="css/img/grammatica.png" class="icona"><br>
                  <h2>Grammatica</h2>
                </span>
            </div>

            <div class="gridItem"> <!--STORIA-->
                <span>
                    <img src="css/img/storia.png" class="icona"><br>
                    <h2>Storia</h2>
                </span>
            </div>

            <div class="gridItem"> <!--GEOGRAFIA-->
                <span>
                    <img src="css/img/geografia.png" class="icona"><br>
                    <h2>Geografia</h2>
                </span>
            </div>

            <div class="gridItem"> <!--INGLESE-->
                <span>
                    <img src="css/img/inglese.png" class="icona"><br>
                    <h2>Inglese</h2>
                </span>
            </div>

            <div class="gridItem"> <!--MATEMATICA-->
                <span>
                    <img src="css/img/matematica.png" class="icona"><br>
                    <h2>Matematica</h2>
                </span>
            </div>

            <div class="gridItem"> <!--SCIENZE-->
                <span>
                    <img src="css/img/scienze.png" class="icona"><br>
                    <h2>Scienze</h2>
                </span>
            </div>
          </div>

    </div>

    <!-- SEZIONE VIDEO-->
    <div class="video">
        <img src="css/img/tv2.png" class="tv">
          <video controls poster="css/img/Cat meows and yawns at the same time.mp4">
              <source src="css/img/life could be a dream.mp4" type="video/mp4">
          </video>
        <h1>VIDEOLEZIONI</h1>
          <h2>dai vita alla lezione</h2>
          <p>con questi video interattivi bla bla bla bla bla bla bla<br>
            bla bla bla bla bla bla bla bla bla bla bla bla <br>
            bla bla bla bla bla bla bla bla bla bla bla bla bla bla<br>
            bla bla bla bla bla bla bla bla bla bla bla bla <br>
            bla bla bla bla bla bla bla bla bla bla bla bla bla bla<br>
          </p>

        <img src="css/img/company2.png" class="company">
    </div>

  </div>

  <div class="spacer">
  </div>
</html>
