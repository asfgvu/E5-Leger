<?php
    session_start();
 ?>

<!DOCTYPE html>
<html lang="fr">


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

    <link rel="stylesheet" href="conseils_formations.css">

</head>
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
     
   <!---------------------------Main------------------------------->
     <div class="main">

      <div class="vide">
      </div>

      <div class="separateur">
      </div>

      <div class="vide">
      </div>

     
        <div class="pres">
          <div class="titre">
            <h3>GESTION DES SITUATIONS COMPLEXES</h3>
          </div>
          <p></p>
            <p class="texte">Comme l’ensemble des intervenants médico-sociaux, les professionnels MJPM sont régulièrement confrontés à des situations dites complexes.</p>
            <p class="texte">Crise psychiatrique, agressivité et violence, alcoolisme chronique, aggravation des troubles neurologiques, crise intrafamiliale... ce sont quelques exemples de situations pour lesquelles les mandataires judiciaires sont sollicités et pour lesquelles les solutions sont particulièrement difficiles à trouver.</p>
            <p class="texte">Source de stress, la gestion de ces situations viennent bien souvent rendre difficiles les relations au sein des institutions et mettre à mal les relations partenariales.</p>
            <p class="texte">Le travail de gestion de ces situations complexes n’en reste pas moins une des missions des professionnels du secteur tutélaire.<p>
            <p class="texte">Ces différentes formations visent à mieux armer les mandataires judiciaires à la gestion de ces situations. <p>
        </div>
    

     

      <div class="vide_bouton">
      </div>

        <a href="">
        <div class="bouton">
               <span>La gestion de l’agressivité et de la violence</span>
            </div>
         </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Les soins psychiatriques sans consentement</span>
            </div>
         </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Prendre en charge les situations de crise médico-sociale : syndrome de Diogène, crise psychiatrique...</span>
        </div>
      </a>

   

      <div class="vide">
      </div>

    <div class="fond_couleur">

      <div class="vide">
      </div>

      <div class="separateur_couleur">
      </div>

      <div class="vide">
      </div>

      
        <div class="pres">
          <div class="titre_couleur">
            <h3>SOUTIENS AUX ÉQUIPES</h3>
          </div>
          <p></p>
            <p class="texte_couleur">Le secteur médico-social connaît depuis plusieurs années une mutation à la fois d’un point de vue juridique, organisationnel et éthique. Le sens de l’intervention sociale et plus généralement de l’aide est souvent en question chez les professionnels en charge de les mettre en pratique.</p>
            <p class="texte_couleur">Le secteur tutélaire n’échappe pas à ces changements et questionnements.</p>
            <p class="texte_couleur">Dans ce contexte, le travail des mandataires judicaires à la protection des majeurs est de réinterroger aujourd’hui leurs savoirs autant que leurs postures professionnelles pour pouvoir répondre aux enjeux d’un mandat de protection. </p>
            <p class="texte_couleur">A partir de différentes approches et d’une méthodologie dynamique, les différentes propositions d’intervention (Groupe d’analyse de la pratique professionnelle ou formations) à destination des équipes permettent d’étudier les principales dimensions auxquelles sont confrontés les professionnels du secteur tutélaire.
            <p>
        </div>

        

        <div class="vide_bouton">
        </div>

        <a href="formation_1.html">
        <div class="bouton_couleur">
               <span>Groupe d’analyse de la pratique professionnelle</span>
            </div>
         </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>La relation aux personnes protégées et les limites du mandat</span>
            </div>
         </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>Connaissance des publics</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>La gestion de l’argent d’autrui, la construction du budget et la question de l’excédent</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>Les visites à domicile : ma pratique professionnelle dans l’espace intime des personnes protégées</span>
        </div>
      </a>
      
      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>Les addictions : comment les prendre en compte dans l’exercice du mandat ?</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>La place de la famille dans le mandat</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>Prévention de l’épuisement professionnel chez le MJPM</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>Repérer la maltraitance et promouvoir la bientraitance</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>Covid 19 : adapter sa pratique dans le cadre de la crise sanitaire et mieux gérer le télétravail</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>Équipe en difficulté : comment passer du groupe au « faire équipe » ?</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>La gestion du stress : comment prendre de la distance au travail ?</span>
        </div>
      </a>

    

      <div class="vide">
      </div>

      <div class="separateur_couleur">
      </div>

      <div class="vide">
      </div>

  </div>

      </div>
      <div class="vide">
      </div>

      
        <div class="pres">
          <div class="titre">
            <h3>GESTION DES SITUATIONS COMPLEXES</h3>
          </div>
          <p></p>
            <p class="texte">Comme l’ensemble des intervenants médico-sociaux, les professionnels MJPM sont régulièrement confrontés à des situations dites complexes.</p>
            <p class="texte">Crise psychiatrique, agressivité et violence, alcoolisme chronique, aggravation des troubles neurologiques, crise intrafamiliale... ce sont quelques exemples de situations pour lesquelles les mandataires judiciaires sont sollicités et pour lesquelles les solutions sont particulièrement difficiles à trouver.</p>
            <p class="texte">Source de stress, la gestion de ces situations viennent bien souvent rendre difficiles les relations au sein des institutions et mettre à mal les relations partenariales.</p>
            <p class="texte">Le travail de gestion de ces situations complexes n’en reste pas moins une des missions des professionnels du secteur tutélaire.<p>
            <p class="texte">Ces différentes formations visent à mieux armer les mandataires judiciaires à la gestion de ces situations. <p>
        </div>
      

      

      <div class="vide_bouton">
      </div>

        <a href="">
        <div class="bouton">
               <span>Groupe d’analyse de la pratique professionnelle</span>
            </div>
         </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Améliorer le fonctionnement d’une équipe d’encadrement</span>
            </div>
         </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Faire adhérer les équipes aux changements institutionnels (réorganisation de service, déménagement…)</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Équipe en difficulté : gérer les moments de crise</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Les personnalités difficiles dans la gestion du personnel</span>
        </div>
      </a>
      
      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Les conflits : mieux connaître le cycle du conflit et savoir le désamorcer</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Covid 19 : accompagner les équipes dans le cadre de la crise sanitaire</span>
        </div>
      </a>

    

      <div class="vide">
      </div>

      <div class="separateur">
      </div>

      <div class="vide">
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