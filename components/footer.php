  <!-- Seção de contacto -->
<section class="info_section layout_padding2" id="contactos">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45 mb-5">
        <h2>
        <?php echo $translator->gettext("contacto"); ?>
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 coluna-8">
          <h4>
            <?php echo $translator->gettext("email_h2"); ?>
          </h4>
          <form onsubmit="return validateEmail()" action="send_mail.php" method="post" >
          <?php
            // Gerar o token CSRF
            if (empty($_SESSION['csrf_token'])) {
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
            }
            ?>
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <input type="email" id='email' name="email" autocomplete="email" placeholder=" <?php echo $translator->gettext("email"); ?>" >
            
            <textarea class="mt-3" id="conteudoEmail" name="conteudoEmail" cols="30" rows="3" placeholder=" <?php echo $translator->gettext("mensagem"); ?>"></textarea>
            <!-- Parágrafo para exibir mensagens de erro -->
            <p id="errorMessage" class="error-message mt-2"></p>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                 <!-- Cloudflare turnstile -->
              <div
                class="cf-turnstile"
                data-sitekey="0x4AAAAAAAyIyLNObRrY1S01"
                data-callback="turnstileCallback"
              ></div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <button class="enviar" type="submit"> <?php echo $translator->gettext("btn_contacto"); ?></button>
              </div>
            </div>
          </form>
        </div>
      <div class="col-4 d-none-sm">
          <div class="info_contact mt-md">
            <div class="contact_link_box">
              
              <div onclick="email()" class="link-email">
                <i class="fa fa-envelope d-none-md" aria-hidden="true"></i>
                <span class="fontS-md">
                  zepedrofernandessampaio@gmail.com
                </span>
              </div>
            </div>
          </div>
          <div class="info_social">
            <div class="link-email">
              <img src="images/linkdin-icon.webp" alt="Linkdin Link" class="filtro-azul-para-branco" width="96px" height="50px" style="float: right;cursor: pointer;margin-left:20px" onclick="linkdin()">
            </div>
            
          </div>
        </div>
        <div class="col-4 d-none-lg d-none-md mt-3">
          <div class="info_contact">
            <div class="contact_link_box">
              
              <div onclick="email()" class="link-email">
                <span style="font-size: 13px;">
                  zepedrofernandessampaio@gmail.com
                </span>
              </div>
            </div>
          </div>
          <div class="info_social">
            <div class="link-email">
              <img src="images/linkdin-icon.webp" alt="Linkdin Link" class="filtro-azul-para-branco" width="96px" height="50px" style="float: right;cursor: pointer;margin-left:20px" onclick="linkdin()">
            </div>
            
          </div>
        </div>
        
      </div>
        
    
    </div>
  </section>

  <!-- Seção do footer -->
  <section class="footer_section">
    <div class="container">
      <p>
        Portfólio - José Pedro Fernandes 
        <br>
        <a target="_blank" href="https://www.github.com/JoseFernandes15/portfolio">www.github.com/JoseFernandes15/portfolio</a>
      </p>
    </div>
  </section>


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js" ></script>
