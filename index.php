<?php

    include('_config.php');

    // Cofiguração da Página
    $page = new stdClass();
    $page->title = 'Home';
    $page->desc = 'Descrição';

    // Adiciona o nome do site ao Título
    $page->title = $page->title.' | '.$site->name;

?>

<!-- Header -->
<?php include('header.php') ?>

    <!-- Page Content -->

    <div class='line-green'></div>

    <section class='block-one'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <!-- Section Container -->
                    <div class='vertical-block'>
                        <div class='vertical-centered'>
                            <img src="assets/img/logo.png" alt="Universidade Estoque" class='logo'>
                            <h4>Donec ultricies velit ullamcorper</h4>
                            <h3>Aenean eros purus, egestas eu fringilla at, volutpat sit</h3>
                            <p>Nam pellentesque lacus ac ante ullamcorper gravida. Nulla justo dolor, lacinia non mollis eget, interdum eget massa.<br /> Quisque vel lacus non odio vestibulum dictum eget in leo. Quisque consequat aliquam nisi, sed aliquam sem elementum<br /> quis. Aliquam in elit urna. Sed aliquam hendrerit ligula, quis consectetur est dictum sit amet. Sed posuere felis<br /> non leo dapibus semper. Sed porta quam at diam varius luctus et vitae</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <img src="assets/img/coroa.png" alt="Inicie" class='crown'>
    <a href='#iniciante' class='btn-start'>Inicie agora mesmo</a>

    <section class='block-two'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <!-- Section Container -->
                    <div class='vertical-block'>
                        <div class='vertical-centered'>
                            <h4>Conheça nossos planos de cursos</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="row starter" id="iniciante">
                        <div class='col-md-3'>
                            <h1>INICIANTE</h1>
                            <h5>Conheça os módulos</h5>
                            <div class="bg-set-blue"></div>
                        </div>
                        <div class='col-md-3 step disabled' data-step='1'>
                            <img src="assets/img/mercearia.png" alt="">
                            <h4>Mercearia do Zeca</h4>
                            <p>Cras euismod pellentesque augue ut sodales. Sed facilisis sagittis libero.</p>
                        </div>
                        <div class='col-md-3 step disabled' data-step='2'>
                            <img src="assets/img/box.png" alt="">
                            <h4>Conhecendo meu estoque</h4>
                            <p> Etiam maximus eu neque nec finibus. Nullam efficitur erat vel elit.</p>
                        </div>
                        <div class='col-md-3 step disabled' data-step='3'>
                            <img src="assets/img/casa.png" alt="">
                            <h4>Colocando a casa em ordem</h4>
                            <p>Cras euismod pellentesque augue ut sodales. Sed facilisis sagittis libero.</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-1 col-md-offset-2">
                            <img src="assets/img/set-down-big.png" alt="">
                        </div>
                        <div class="col-md-9 danone">Você precisa concluir os módulos iniciante para ter acesso aos módulos experiente</div>
                    </div>
                    <div class="row experience disabled">
                        <div class='col-md-3'>
                            <h1>EXPERIENTE</h1>
                            <h5>Conheça os módulos</h5>
                            <div class="bg-set-orange"></div>
                        </div>
                        <div class='col-md-3 step disabled' data-step='4'>
                            <img src="assets/img/caminhao.png" alt="">
                            <h4>Estoque de segurança e ponto de reposição</h4>
                            <p>Cras euismod pellentesque augue ut sodales. Sed facilisis sagittis libero.</p>
                        </div>
                        <div class='col-md-3 step disabled' data-step='5'>
                            <img src="assets/img/grafico.png" alt="">
                            <h4>Gráfico Dente de Serra</h4>
                            <p> Etiam maximus eu neque nec finibus. Nullam efficitur erat vel elit.</p>
                        </div>
                        <div class='col-md-3 step disabled' data-step='6'>
                            <img src="assets/img/calendario.png" alt="">
                            <h4>Curva ABC: Classificando Itens</h4>
                            <p>Cras euismod pellentesque augue ut sodales. Sed facilisis sagittis libero.</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-1 col-md-offset-2">
                            <img src="assets/img/set-down-big.png" alt="">
                        </div>
                        <div class="col-md-9 danone">Você precisa concluir os módulos iniciante para ter acesso aos módulos experiente</div>
                    </div>
                    <div class="row advanced disabled">
                        <div class='col-md-3'>
                            <h1>AVANÇADO</h1>
                            <h5>Conheça os módulos</h5>
                            <div class="bg-set-red"></div>
                        </div>
                        <div class='col-md-3 step disabled' data-step='7'>
                            <img src="assets/img/calculadora.png" alt="">
                            <h4>Quanto custa manter o estoque?</h4>
                            <p>Cras euismod pellentesque augue ut sodales. Sed facilisis sagittis libero.</p>
                        </div>
                        <div class='col-md-3 step disabled' data-step='8'>
                            <img src="assets/img/prancheta.png" alt="">
                            <h4>Giro e Cobertura de Estoque </h4>
                            <p> Etiam maximus eu neque nec finibus. Nullam efficitur erat vel elit.</p>
                        </div>
                        <div class='col-md-3 step disabled' data-step='9'>
                            <img src="assets/img/grafes.png" alt="">
                            <h4>Modelos de Gestão de Estoque: PEPS e UEPS</h4>
                            <p>Cras euismod pellentesque augue ut sodales. Sed facilisis sagittis libero.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <img src="assets/img/coroa.png" alt="Inicie" class='crown'>
    <a href='#iniciante' class='btn-start' data-step='1'>Inicie agora mesmo</a>

    <section class='block-three'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <!-- Section Container -->
                    <div class='vertical-block'>
                        <div class='vertical-centered'>
                            <h4>Ou entre em contato para mais informações</h4>
                            <hr>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet<br /> consectetur, adipisci velit, sed quia non numquam</p>
                            <form action='formail.php'
                              method='post'
                              enctype='multipart/form-data'
                              data-sucess='Mensagem enviada com sucesso'
                              data-error='Problemas ao enviar a mensagem' >
                            <input type='hidden' name='recipient' value='<?php echo $site->email; ?>'>
                            <input type='hidden' name='site' value='<?php echo "http://".$_SERVER["SERVER_NAME"].strtok($_SERVER ["REQUEST_URI"],"?"); ?>'>
                            <!-- Input Text -->
                            <div class="row lincelist">
                                <div class="col-sm-6">
                                    <div class='lince-input'>
                                        <input type='text' name='nome' id='input-nome' maxlength='100' class='input-alpha' placeholder='Seu Nome *' required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class='lince-input'>
                                        <input type='text' name='email' id='input-email' maxlength='100' class='input-email' placeholder='Seu Email *' required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class='lince-input'>
                                        <textarea name='mensagem' id='input-msg' class='input-alpha' maxlength='500' cols='30' rows='6' placeholder='Em que podemos te ajudar? *' required></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class='lince-input'>
                                        <?php 
                                          $possible = '23456789abcdfghjkmnpqrstvwxyz';
                                          $code = '';
                                          $i = 0;
                                          while ($i < 5) { 
                                            $code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
                                            $i++;
                                          }  
                                        ?>
                                        <label for='security_newsletter'>Insira o Captcha:</label>
                                        <img class="img-captcha" src='assets/libs/linceform/captcha/CaptchaSecurityImagesNewsletter.php?width=100&height=40&characters=5&code=<?=$code?>' align='left' />
                                        <input id='security_newsletter' type='text' class='input-captcha text-captcha' value='' data-lince-captcha='<?php echo $code; ?>' name='security_newsletter' size='5' minlength='5' maxlength='5' placeholder='Digite Aqui' required/>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class='lince-input'>
                                        <input type='submit' value='Enviar' class='btn-send track-send'>
                                    </div>
                                </div>
                            </div>

                            <!-- Anti-Spam -->
                            <input type='text' name='url-form' class='url-form' value=' ' />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='alfama-logo'>
                        <a href='http://alfamaweb.com.br' target='_blank'><img src='http://plugins.alfamaweb.com.br/logo/logo_alfama.svg' alt='Alfama Web' width='80'></a>
                    </div>
                </div>
            </div>
        </div>        
    </section>

    
    <?php include('_modal-step1.php') ?>

<!-- Footer -->
<?php include('footer.php') ?>
