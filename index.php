<?php include('header.php'); ?>
<main>
  <div class="secondPart container">
    <p class="text-uppercase">my skills</p>
    <h3 class="text-uppercase">Ce que je sais faire</h3>
    <div class="row">
      <div class="col">
        <i class="fab fa-wordpress-simple"></i>
        <h4 class="text-uppercase">wordpress</h4>
        <p>Depuis l'année 2010, j'ai commencé mon premier site (PepseeActus) avec le CMS Wordpress. Ma première histoire d'amour avec le développement web</p>
      </div>
      <div class="col">
        <i class="fab fa-angellist"></i>
        <h4 class="text-uppercase">Développement Web</h4>
        <p>J'ai officialisé mes connaissance après une formation intensive à la 3WA qui c'est terminé en Mai 2018. Je suis officiellement un développeur fullstack junior</p>
      </div>
      <div class="col">
        <i class="fas fa-heart"></i>
        <h4 class="text-uppercase">Front End</h4>
        <p>J'avoue avoir eu le coup de coeur pour la partie front-end même si je pratique beaucoup plus de back</p>
      </div>
    </div>
  </div>
  <div class="thirdPart" id="propos">
    <div class="container">
      <div class="row container">
        <div class="col-6">
          <img src="img/moi.jpg" alt="moi">
        </div>
        <div class="col-6">
          <h3 class="text-uppercase">À propos de moi.</h3>
          <p class="text-uppercase">Développeur Web, bloggeur & Filmaker</p>
          <p>Je suis Christophe Sébastien, un passionné de tech et du web. J'ai créé mon premier site en Janvier 2010 <a href="https://www.facebook.com/PepseeActus/?ref=bookmarks" target="_blank">PepseeActus</a> sur un coup de tête. C'est un site d'actualité musicale Caribbéenne, qui m'a permis d'avoir la casquette de community manager. À l'heure ou je vous écrit (Aout 2018) j'ai plus de 66 000 followers sur Facebook et environs 13 000 sur Youtube. En 2016, ma femme et moi commençons le blog voyage <a href="http://lesvoyagesdecindy.com/" target="_blank">Les Voyages de Cindy</a>. En fin 2017, je décide une reconversion professionnelle pour devenir Développeur Web. J'entame un formation intensive au sein de la 3WA. Fraichement diplômé, je commence une nouvelle vie en tant que Développeur Web</p>
          <button type="button" class="btn bg-dark video-btn text-white p-2" data-toggle="modal" data-src="https://www.youtube.com/embed/svPrq82MnII" data-target="#myModal">Mes Voyages</button>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <!-- 16:9 aspect ratio -->
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always">></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="secondPart" id="travaux">
    <div class="container">
      <p class="text-uppercase">creative</p>
      <h3 class="text-uppercase">portfolio</h3>
      <div>
        <p class="pt-4">J'utilise souvent: HTML, CSS, bootstrap, JavaScript et Jquery. En back : PHP, Ruby on Rails, Ajax. Mon CMS préféré est Wordpress et en base de donnée, j'utilise MYsql ou PostgreSQL</p>
        <ul class="nav justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-web" data-toggle="tab" href="#web" role="tab" aria-controls="home" aria-selected="true">Web</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="home-videos" data-toggle="tab" href="#videos" role="tab" aria-controls="home" aria-selected="false">Vidéos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="home-photos" data-toggle="tab" href="#photos" role="tab" aria-controls="home" aria-selected="false">Photos</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="web" role="tabpanel" aria-labelledby="web-tab">
          </div>
          <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
            <p>Mes voyages</p>
            <div class="row">
              <iframe class="col-6" width="560" height="315" src="https://www.youtube.com/embed/G-bUbZgNcDE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              <iframe class="col-6" width="560" height="315" src="https://www.youtube.com/embed/svPrq82MnII" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="row">
              <iframe class="col-12" width="560" height="315" src="https://www.youtube.com/embed/cD-DELz60yQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
            <div class="row">
              <div class="col">
                <img class="card-img" src="img/1.jpg" alt="photo1">
                <img class="card-img py-4" src="img/2.jpg" alt="photo2">
                <img class="card-img" src="img/3.jpg" alt="photo3">
              </div>
              <div class="col">
                <img class="card-img" src="img/4.jpg" alt="photo4">
                <img class="card-img py-4" src="img/5.jpg" alt="photo5">
              </div>
              <div class="col">
                <img class="card-img" src="img/7.jpg" alt="photo7">
                <img class="card-img py-4" src="img/8.jpg" alt="photo8">
                <img class="card-img" src="img/9.jpg" alt="photo9">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="thirdPart" id="contact">
    <div class="container">
      <h3 class="text-center text-uppercase">Contact</h3>

      <?php if(array_key_exists('errors', $_SESSION)): ?>
        <div class="alert alert-danger">
          <?= implode('<br>', $_SESSION['errors']); ?>
        </div>
      <?php endif; ?>
      <?php if(array_key_exists('success', $_SESSION)): ?>
        <div class="alert alert-success">
          Votre email a bien été envoyé
        </div>
      <?php endif; ?>


      <form class="form-horizontal" action="contact.php" method="post">
        <!-- Entreprise-->
        <div class="form-group">
          <label class="control-label" for="name">Nom de votre entreprise</label>
          <div>
            <input id="name" name="name" type="text" placeholder="Votre entreprise" class="form-control" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
          </div>
        </div>
        <!-- Email-->
        <div class="form-group">
          <label class="control-label" for="email">Votre email</label>
          <div>
            <input id="email" name="email" type="text" placeholder="Votre email" class="form-control" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
          </div>
        </div>
        <!-- Message-->
        <div class="form-group">
          <label class="control-label" for="message">Votre message</label>
          <div>
            <textarea class="form-control" id="message" name="message" placeholder="Votre message..." rows="5"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
          </div>
        </div>
        <!-- bouton -->
        <div class="form-group">
          <div class="text-center">
            <button type="submit" class="btn btn-dark btn-lg">Envoyer</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>
<?php include('footer.php'); ?>
