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
            <p class="texte">Comme l???ensemble des intervenants m??dico-sociaux, les professionnels MJPM sont r??guli??rement confront??s ?? des situations dites complexes.</p>
            <p class="texte">Crise psychiatrique, agressivit?? et violence, alcoolisme chronique, aggravation des troubles neurologiques, crise intrafamiliale... ce sont quelques exemples de situations pour lesquelles les mandataires judiciaires sont sollicit??s et pour lesquelles les solutions sont particuli??rement difficiles ?? trouver.</p>
            <p class="texte">Source de stress, la gestion de ces situations viennent bien souvent rendre difficiles les relations au sein des institutions et mettre ?? mal les relations partenariales.</p>
            <p class="texte">Le travail de gestion de ces situations complexes n???en reste pas moins une des missions des professionnels du secteur tut??laire.<p>
            <p class="texte">Ces diff??rentes formations visent ?? mieux armer les mandataires judiciaires ?? la gestion de ces situations. <p>
        </div>
    

     

      <div class="vide_bouton">
      </div>

        <a href="">
        <div class="bouton">
               <span>La gestion de l???agressivit?? et de la violence</span>
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
               <span>Prendre en charge les situations de crise m??dico-sociale : syndrome de Diog??ne, crise psychiatrique...</span>
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
            <h3>SOUTIENS AUX ??QUIPES</h3>
          </div>
          <p></p>
            <p class="texte_couleur">Le secteur m??dico-social conna??t depuis plusieurs ann??es une mutation ?? la fois d???un point de vue juridique, organisationnel et ??thique. Le sens de l???intervention sociale et plus g??n??ralement de l???aide est souvent en question chez les professionnels en charge de les mettre en pratique.</p>
            <p class="texte_couleur">Le secteur tut??laire n?????chappe pas ?? ces changements et questionnements.</p>
            <p class="texte_couleur">Dans ce contexte, le travail des mandataires judicaires ?? la protection des majeurs est de r??interroger aujourd???hui leurs savoirs autant que leurs postures professionnelles pour pouvoir r??pondre aux enjeux d???un mandat de protection. </p>
            <p class="texte_couleur">A partir de diff??rentes approches et d???une m??thodologie dynamique, les diff??rentes propositions d???intervention (Groupe d???analyse de la pratique professionnelle ou formations) ?? destination des ??quipes permettent d?????tudier les principales dimensions auxquelles sont confront??s les professionnels du secteur tut??laire.
            <p>
        </div>

        

        <div class="vide_bouton">
        </div>

        <a href="formation_1.html">
        <div class="bouton_couleur">
               <span>Groupe d???analyse de la pratique professionnelle</span>
            </div>
         </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>La relation aux personnes prot??g??es et les limites du mandat</span>
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
               <span>La gestion de l???argent d???autrui, la construction du budget et la question de l???exc??dent</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>Les visites ?? domicile : ma pratique professionnelle dans l???espace intime des personnes prot??g??es</span>
        </div>
      </a>
      
      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>Les addictions : comment les prendre en compte dans l???exercice du mandat ?</span>
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
               <span>Pr??vention de l?????puisement professionnel chez le MJPM</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>Rep??rer la maltraitance et promouvoir la bientraitance</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>Covid 19 : adapter sa pratique dans le cadre de la crise sanitaire et mieux g??rer le t??l??travail</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton_couleur">
               <span>??quipe en difficult?? : comment passer du groupe au ?? faire ??quipe ?? ?</span>
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
            <p class="texte">Comme l???ensemble des intervenants m??dico-sociaux, les professionnels MJPM sont r??guli??rement confront??s ?? des situations dites complexes.</p>
            <p class="texte">Crise psychiatrique, agressivit?? et violence, alcoolisme chronique, aggravation des troubles neurologiques, crise intrafamiliale... ce sont quelques exemples de situations pour lesquelles les mandataires judiciaires sont sollicit??s et pour lesquelles les solutions sont particuli??rement difficiles ?? trouver.</p>
            <p class="texte">Source de stress, la gestion de ces situations viennent bien souvent rendre difficiles les relations au sein des institutions et mettre ?? mal les relations partenariales.</p>
            <p class="texte">Le travail de gestion de ces situations complexes n???en reste pas moins une des missions des professionnels du secteur tut??laire.<p>
            <p class="texte">Ces diff??rentes formations visent ?? mieux armer les mandataires judiciaires ?? la gestion de ces situations. <p>
        </div>
      

      

      <div class="vide_bouton">
      </div>

        <a href="">
        <div class="bouton">
               <span>Groupe d???analyse de la pratique professionnelle</span>
            </div>
         </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Am??liorer le fonctionnement d???une ??quipe d???encadrement</span>
            </div>
         </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Faire adh??rer les ??quipes aux changements institutionnels (r??organisation de service, d??m??nagement???)</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>??quipe en difficult?? : g??rer les moments de crise</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Les personnalit??s difficiles dans la gestion du personnel</span>
        </div>
      </a>
      
      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Les conflits : mieux conna??tre le cycle du conflit et savoir le d??samorcer</span>
        </div>
      </a>

      <div class="vide_entre_bouton">
      </div>

      <a href="">
        <div class="bouton">
               <span>Covid 19 : accompagner les ??quipes dans le cadre de la crise sanitaire</span>
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
        Mentions L??gales
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