<!DOCTYPE html>
<html lang="zxx">

<head>
  <?php include 'include/style.php'; ?>
  <title>Nous contacter</title>
</head>

<body data-spy="scroll" data-offset="120">

  <?php include 'require/nav.php'; ?>

  <div class="page-title-area bg-16">
    <div class="container">
      <div class="page-title-content">
        <h2>Nous contacter</h2>
        <ul>
          <li>
            <a href="index.php"> Accueil </a>
          </li>
          <li class="active">Contact</li>
        </ul>
      </div>
    </div>
  </div>

  <section class="contact-area ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="contact-wrap">
            <div class="contact-form">
              <div class="section-title">
                <h2>Laisser nous un message</h2>
              </div>
              <form id="contactForm">
                <div class="row">
                  <div class="col-lg-12 col-sm-12">
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Entrer votre nom" />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-sm-12">
                    <div class="form-group">
                      <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Entrer l'Objet" />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <textarea name="message" class="form-control hight-unset" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Taper le message"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <button onclick="sendMail(); return false" class="default-btn page-btn">
                      Envoyer le message
                    </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="quick-contact">
            <h3>Contact rapide</h3>
            <ul>
              <li>
                <i class="fa fa-map-marker"></i>
                Localisation:
                <span>04 BP 8632 04 Ouaga, Burkina Faso</span>
              </li>
              <li>
                <i class="fa fa-mobile"></i>
                Appelez sur:
                <a href="tel:+61-821-456">+226 75 07 49 39<br />
                  +226 70 21 28 46</a>
              </li>
              <li>
                <i class="fa fa-envelope"></i>
                Envoyez un mail sur:
                <p class="text-light">info@isvinternational.net</p>
                <p class="text-light">joanny@isvinternational.net</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="single-contact-map pb-100">
    <div class="container">
      <iframe src="https://www.google.com/maps/place/Patte+d%C2%B4oie,+Ouagadougou/@12.3600896,-1.5204352,11z/data=!4m5!3m4!1s0xe2ebdee8072ff93:0x15cea85cab248f1d!8m2!3d12.3250239!4d-1.5160212" style="border: 0"></iframe>
    </div>
  </div>

  <?php include 'require/footer.php'; ?>

  <?php include 'include/js.php'; ?>
  <script>
    function sendMail() {
      var link =
        "mailto:info@isvinternational.net" +
        "?cc=joanny@isvinternational.net" +
        "&subject=" +
        encodeURIComponent(document.getElementById("msg_subject").value) +
        "&body=" +
        encodeURIComponent(document.getElementById("message").value);
      window.location.href = link;
    }
  </script>
</body>

<!-- Mirrored from templates.envytheme.com/gouba/default/charity-event-campaign/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Jun 2021 00:11:42 GMT -->

</html>