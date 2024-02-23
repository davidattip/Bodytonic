<?php
$link = ('style.css');
include ('head.php');


?>

<body>
    <?php
    include('header.php');
    ?>
    <main>
    <section class="banner d-flex justify-content-center align-items-center pt-5" >
        <div class="container my-5 py-5">
          <div class="row">
            
            <div class="col-md-6">
              <h3 class="py-5 banner-desc">
                Découvrez la meilleure version de vous même avec Bodytonic
              </h3>
              <select class="form-select" aria-label="Default select example">
                <option selected>Sélectionnez votre région</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label"></label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Que recherchez vous?">
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </section>
      <h3 class="container d-flex justify-content-center align-items-center py-4">
        Pourquoi choisir Bodytonic?
      </h3>
      <p class="container d-flex justify-content-center align-items-center py-4">La plateforme numéro 1 de recherche de coaching en France ! </p>
      <section>
        <div class="card-group">
          <div class="card ">
            
            <div class="card-body">
              
              <p class="card-text">Grace à nous, trouver un coach n’a jamais été aussi simple.
                Chercher votre bonheur en fonction de votre position et de la spécialitée que vous souhaitez.</p>
              
            </div>
          </div>
          <div class="card">
            
            <div class="card-body class_1">
              
              <p class="card-text ">Vous n’arrivez pas à gérer votre alimentation ? On s’en occupe.
                Nos membres ont un accès illimité et 5% de réduction sur chaque commande passée sur notre boutique de compléments alimentaires.</p>
              
            </div>
          </div>
          <div class="card">
            
            <div class="card-body">
              
              <p class="card-text">Si vous êtes un professionnel, n’hésitez pas à devenir un de nos coachs en vous inscrivant ici
                Selon les avis et commentaires que vous recevrez, devenez l’un des meilleurs coachs de BodyTonic !</p>
              
            </div>
          </div>
        </div>
      </section>
      <section >
        <h3 class="container d-flex justify-content-center align-items-center py-4 strong">Nos meilleurs Coachs</h3>
        <div class="card-group row">
          <div class="card col-md-4" class="cc-card">
            <img src="pexels-ron-lach-8744821.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">J'ai adoré travailler avec David, il a su me motiver à chaque séance et m'a aidé à atteindre mes objectifs de progression.
                 Les exercices étaient variés et adaptés à mes besoins, et j'ai apprécié ses conseils pour maintenir un mode de vie sain en dehors des séances.
                  Je recommande vivement !
              </p>
              <p class="card-text"><small class="text-body-secondary">Aya, il y a 3 heures</small></p>
            </div>
          </div>
          <div class="card col-md-4" class="cc-card">
            <img src="Coach2.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Je suis un coureur passionné, mais je sentais que je stagnais dans ma progression.
                 Salim m'a aidé à identifier mes faiblesses et à me concentrer sur les exercices spécifiques qui me permettraient d'améliorer mes performances.
                  Ses conseils ont été précieux, et j'ai battu mon meilleur temps sur 10 km grâce à son soutien et ses encouragements.</p>
              <p class="card-text"><small class="text-body-secondary">Ilyes , il y a 2 jours</small></p>
            </div>
          </div>
          <div class="card col-md-4" class="cc-card">
            <img src="Coach3.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Maxime a été incroyablement patient et encourageant tout au long de notre programme de formation. 
                Il a pris le temps de comprendre mes limitations physiques et m'a aidé à adapter les exercices pour éviter toute douleur ou blessure.
                 Grâce à lui, j'ai pu renforcer mes muscles et améliorer ma posture. Je suis très reconnaissant
              </p>
              <p class="card-text"><small class="text-body-secondary">Denise , il y a 4 jours </small></p>
            </div>
          </div>
        </div>
      </section>
      <section>
        <h3 class="container d-flex justify-content-center align-items-center py-4 strong">
          Actualités Bodytonic
        </h3>
        <h3 class="container d-flex justify-content-center align-items-center py-4">
          Découvrez nos derniers articles
        </h3>
        <div class="card-group">
          <div class="card">
            <img src="photo1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Musculation : l’importance de la nutrition sportive.</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img src="photo2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Les compléments alimentaires sont-ils réellement efficaces ?</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
          <div class="card">
            <img src="photo3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text"> Pourquoi le sport redonne confiance en soi ?</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php
    include('footer.php');
    ?>

</body>