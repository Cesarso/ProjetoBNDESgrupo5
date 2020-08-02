<?php include_once("cabecalho.php") ?>

   
     

      <!-- Contact Form and Gmap-->
      <section class="section section-md section-last bg-default text-md-left">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-6 section-map-small">
              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d120086.69218949496!2d-44.00987404429322!3d-19.852256575872566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sshopping%20cidade!5e0!3m2!1spt-BR!2sbr!4v1589227101578!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-6">
              <h4 class="text-spacing-50">Contate-nos</h4>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="enviar.php">
                <div class="row row-14 gutters-14">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-first-name" type="text" name="name" placeholder="Nome e Sobrenome" data-constraints="@Required">
                      <label class="form-label" for="contact-first-name">Nome</label>
                    </div>
                  </div>

                   <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="telefone" type="telefone" name="telefone" >
                      <label class="form-label" for="contact-tel">WhatsApp</label>
                    </div>
                  </div>
                
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Mensagem</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </section>



 <!-- Contact information-->
      <section class="section section-md section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="http://api.whatsapp.com/send?1=pt_BR&phone=5521900000000">21 9000000000</a></p>
                 
                </div>
              </article>
            </div>
            <!--<div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">Rua Manoel Honorato de Alexandria, Bairro Centro São João de Meriti, RJ 98718-6367</a></p>
                </div>
              </article>
            </div> -->
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:#">https://www.instagram.com/</a></p>
                 
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>



<?php include_once("rodape.php") ?>


    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="js/mascaras.js"></script>