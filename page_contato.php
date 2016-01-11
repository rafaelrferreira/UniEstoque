<?php

    include('_config.php');

    // Cofiguração da Página
    $page = new stdClass();
    $page->title = 'Contato';
    $page->desc = 'Entre em contato conosco.';

    // Adiciona o nome do site ao Título
    $page->title = $page->title.' | '.$site->name;

?>

<!-- Header -->
<?php include('header.php') ?>

    <!-- Page Content -->

    <section>
        <div class='container'>
            <div class='row'>
                <div class='col-xs-12'>
                    <!-- Section Container -->
                    <h1>Contato</h1>
                    <form action='http://plugins.alfamaweb.com.br/formail/'
                          method='post'
                          enctype='multipart/form-data'
                          data-sucess='Mensagem enviada com sucesso'
                          data-error='Problemas ao enviar a mensagem' >
                        <input type='hidden' name='recipient' value='<?php echo $site->email; ?>'>
                        <input type='hidden' name='site' value='<?php echo "http://".$_SERVER["SERVER_NAME"].strtok($_SERVER ["REQUEST_URI"],"?"); ?>'>
                        <!-- Input Text -->
                        <div class='lince-input'>
                            <label for='input-nome'>Nome:</label>
                            <input type='text' name='nome' placeholder='' id='input-nome' maxlength='100' class='input-alpha' required>
                        </div>
                        <div class='lince-input'>
                            <label for='input-email'>E-mail:</label>
                            <input type='text' name='email' placeholder='' id='input-email' maxlength='100' class='input-email' required>
                        </div>
                        <div class='lince-input'>
                            <label for='input-tel'>Telefone:</label>
                            <input type='text' name='telefone' placeholder='' id='input-tel' maxlength='100' class='input-tel' required>
                        </div>
                        <div class='lince-input'>
                            <label for='input-msg'>Mensagem:</label>
                            <textarea name='mensagem' id='input-msg' class='input-alpha' maxlength='5000' cols='30' rows='10' required></textarea>
                        </div>
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
                            <img  src='assets/libs/linceform/captcha/CaptchaSecurityImagesNewsletter.php?width=100&height=40&characters=5&code=<?=$code?>' align='left' />
                            <input id='security_newsletter' type='text' class='input-captcha' value='' data-lince-captcha='<?php echo $code; ?>' name='security_newsletter' size='5' minlength='5' maxlength='5' placeholder='Digite Aqui' required/>
                        </div>
                        <!-- Select Option -->
                        <div class='lince-input'>
                            <label for='select'>Exemplo Select:</label>
                            <select name='' id='select' class='input-select' required>
                                <option value='' class='select-placeholder'>...</option>
                                <option value='Sehem' selected>Sehem</option>
                                <option value='2'>Option 2</option>
                                <option value='3'>Option 3</option>
                                <option value='4'>Option 4</option>
                                <option value='5'>Option 5</option>
                                <option value='6'>Option 6</option>
                                <option value='77 5'>Option77 5</option>
                            </select>
                        </div>
                        <div class='lince-input'>
                            <label for='input-file'>Exemplo File:</label>
                            <input type='file' name='file' id='input-file' class='input-file' placeholder='Selecione o Arquivo' required>
                        </div>
                        <div class='lince-input'>
                            <input type='submit' value='Enviar'>
                        </div>
                        <!-- Anti-Spam -->
                        <input type='text' name='url-form' class='url-form' value=' ' />
                    </form>
                </div>
            </div>
        </div>
    </section>

<!-- Footer -->
<?php include('footer.php') ?>
