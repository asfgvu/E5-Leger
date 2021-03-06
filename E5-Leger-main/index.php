 <?php
    session_start();
 ?>
 
 <!---------------------------------- début html pour toute les pages ---------------------------------->
<!DOCTYPE html>
<html lang="fr">

<link rel="stylesheet" href="acceuil.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!---------------------------------- titre du site ---------------------------------->

    <title>Christophe MIEUSEMENT Conseil & Formation</title>

<!---------------------------------- bootstrap ---------------------------------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<!----------------------------- font family Montserrat ---------------------------->

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
  </style>

 <!---------------------------------animate on scroll------------------------------->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

 <!---------------------------------- css perso ---------------------------------->

    <link rel="stylesheet" href="acceuil.css">


</head>
<body>
   <!---------------------------------- Navbar ---------------------------------->
   
    
      <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">CMCF</div>
        <ul class="links">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="conseils_formations.php">Conseils & Formations</a>
          <li><a href="#about">Recrutement</a></li>
          <li><a href="#projects">Livre</a></li>
          <?php
          if(!isset($_SESSION['user']))
          {
          ?>
          <li><a href="seConnecter.php">Se connecter</a></li>
          <?php
          } if(isset($_SESSION['user']))
          {        
          ?>
          <li><a href="landing.php">Mon Compte</a></li>
          <?php
          }
          ?>
        </ul>
        <label for="nav-toggle" class="icon-burger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </label>
      </nav>
     

     <!---------------------------------- corps de page ---------------------------------->

  <div class="main">
      <div class="vide">
      </div>

      <div class="separateur">
      </div>

      <div class="grand_titre">
        <h1>FORMATIONS & CONSEILS</h1>
      </div>

      <div class="vide">
      </div>

      <div data-aos="fade-right" data-aos-duration="1000">
        <div class="pres">
          <a href="#">
          <div class="titre">
            <h3>SOUTIENS AUX ÉQUIPES</h3>
          </div>
          <p></p>
            <p class="texte">Le secteur médico-social connaît depuis plusieurs années une mutation à la fois d’un point de vue juridique, organisationnel et éthique. Le sens de l’intervention sociale et plus généralement de l’aide est souvent en question chez les professionnels en charge de les mettre en pratique.</p>
            <p class="texte">Le secteur tutélaire n’échappe pas à ces changements et questionnements.</p>
            <p class="texte">Dans ce contexte, le travail des mandataires judicaires à la protection des majeurs est de réinterroger aujourd’hui leurs savoirs autant que leurs postures professionnelles pour pouvoir répondre aux enjeux d’un mandat de protection. </p>
            <p class="texte">A partir de différentes approches et d’une méthodologie dynamique, les différentes propositions d’intervention (Groupe d’analyse de la pratique professionnelle ou formations) à destination des équipes permettent d’étudier les principales dimensions auxquelles sont confrontés les professionnels du secteur tutélaire.
            <p>
        </div>
      </a>
      </div>
      <div class="vide">
      </div>

    <div class="fond_couleur">

      <div class="vide">
      </div>

      <div class="separateur_couleur">
      </div>

      <div class="grand_titre_couleur">
        <h1>RECRUTEMENT</h1>
      </div>

      <div class="vide">
      </div>

     <div data-aos="fade-right" data-aos-duration="1000">
        <div class="pres_couleur">
          <a href="#">
          <div class="titre_couleur">
            <h3>SOUTIEN AUX ENCADRANTS</h3>
          </div>
          <p></p>
            <p class="texte_couleur">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          </a>
      </div>

       <div class="vide">
      </div>

      <div class="separateur_couleur">
      </div>

      <div class="vide">
      </div>

    </div>

      <div class="vide">
      </div>

      <div class="grand_titre">
        <h1>LIVRE</h1>
      </div>

      <div class="vide">
      </div>

      <div data-aos="fade-right" data-aos-duration="1000">
        <div class="pres">
          <a href="#">
          <div class="titre">
            <h3>PRÉSENTATION DU LIVRE</h3>
          </div>
          <p></p>
             <p class="texte">Au-delà de la théorie et du cadre législatif, l’exercice d’un mandat de protection pose dans la pratique un grand nombre de questions pour lesquelles les professionnels MJPM peinent à trouver des réponses.</p>
            <p class="texte">Au quotidien, le métier de mandataire judiciaire aux personnes majeures reste avant tout une forme particulière d’accompagnement et d’intervention sociale. Le MJPM y travaille à la protection de l’être humain lorsque ce dernier est ou devient vulnérable.</p>
            <p class="texte">Les problématiques qui se posent aux différents acteurs du secteur tutélaire renvoient alors à trois questions centrales :</p>
            <p class="texte" style="margin-left: 50px;">- Comment concilier exercice du mandat et respect de la personne protégée dans sa singularité et sa volonté ?</p>
            <p class="texte" style="margin-left: 50px;">- Comment en tant que MJPM reconnaître et prendre en compte ma propre singularité dans mon travail ?</p>
            <p class="texte" style="margin-left: 50px;">- Comment qualifier et améliorer ce lien particulier qui unit la personne protégée et son mandataire judiciaire ?  </p>
            <p class="texte">En tentant de répondre à ces trois questions, cet ouvrage ne cherche pas à donner aux MJPM des règles d’intervention mais plutôt à les amener à s’interroger sur le sens de  leur action et les fondements sur lesquels il base leur pratique.</p>
            <p class="texte">Il vise à les aider à renforcer leur positionnement professionnel afin à la fois de mener à bien leurs missions de protection mais aussi de se préserver d’un métier par certains aspects très exigeant.</p>
          </div>
          </a>
      </div>

      <div class="vide">
      </div>

    <div class="fond_couleur">

      <div class="vide">
      </div>

      <div class="separateur_couleur">
      </div>

      <div class="grand_titre_couleur">
        <h1>ILS NOUS FONT CONFIANCE</h1>
      </div>

      <div class="vide">
      </div>

      <div data-aos="fade-right" data-aos-duration="1000">
        <div class="pres_couleur">
          <a href="#">
          <div class="titre_couleur">
          </div>
            <p class="texte_couleur">Udaf 77 – Udaf 51 – Udaf 32 – Udaf 29 – Udaf 31 – Udaf 60 - Atinord – ATPC - AT 92 – FNAT – ATMP 01 – ATVM – AT occitania – ATMP 14 - APAJH 95.</p>
          </div>
          </a>
      </div>

       <div class="vide">
      </div>

      <div class="separateur_couleur">
      </div>

      <div class="vide">
      </div>

    </div>
    
    <div class="vide">
    </div>

    <div class="grand_titre">
        <h1>CMCF EST UN ORGANISME DE FORMATION CERTIFIÉ</h1>
    </div>

    <div class="vide">
    </div>

    <div class="cadre_photo">

    <img src="datadock.jpg">
    <img src="logo_qualiopi.png">

    </div>

    <div class="vide">
    </div>

    <div class="separateur">
    </div>

    <div class="vide">
    </div>

    </div>

  </div>
  

     <!---------------------------------- pied de page ---------------------------------->

  <footer>
    <div class="pied">
    </div>
    <div class="ecrit_pied">
        <a>CMFC</a>
        <a class="marche" href="#">
        Mentions Légales
        </a>
        <a class="marche" href="#">
        Nous contacter
        </a>
    </div>
  </footer>

   <!---------------------------------- initialisation animate on scroll ---------------------------------->
    <script>
      AOS.init();
    </script>

</body>
</html>