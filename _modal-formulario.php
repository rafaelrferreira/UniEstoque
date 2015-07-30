<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  <h3>Basico</h3>
</div>
<div class="modal-body">
  <div class="row">
    <div class="col-md-12">
        <h1>Mussum ipsum cacilds, vidis litro.</h1>
        <hr>
        <h1>preencha os dados</h1>
        <h4>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</h4>
        <form action=''
              method='post'
              enctype='multipart/form-data'
              data-sucess='Mensagem enviada com sucesso'
              data-error='Problemas ao enviar a mensagem' class="form-cadastro">
              <input type='hidden' name='recipient' value='<?php echo $site->email; ?>'>
              <input type='hidden' name='site' value='<?php echo "http://".$_SERVER["SERVER_NAME"].strtok($_SERVER ["REQUEST_URI"],"?"); ?>'>
              <!-- Input Text -->
              <div class="row">
                <div class="col-md-6">
                  <div class='lince-input'>
                      <input type='text' name='nome' id='input-nome' maxlength='50' class='input-alpha' placeholder='Seu Nome *' required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class='lince-input'>
                      <input type='text' name='email' id='input-email' maxlength='35' class='input-email' placeholder='Seu Email *' required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class='lince-input'>
                      <input type='text' name='ocupacao'  maxlength='50' class='input-alpha' placeholder='Ocupacao'>
                  </div>
                </div>
                <!-- <div class="col-md-12">
                  <div class='lince-input'>
                      <input type='submit' value='Validar' class='btn-send'>
                  </div>
                </div> -->
              </div>
              <!-- Anti-Spam -->
              <input type='text' name='url-form' class='url-form' value=' ' />
        </form>
    </div>
  </div>
</div>
<div class="modal-footer">
  <span class="error info-texto" style="display:none;">ERRO! PREENCHA OS DADOS PARA PROSSEGUIR.</span>
  <button type="button" class="btn btn-primary btn-prosseguir">Prosseguir</button>
</div>