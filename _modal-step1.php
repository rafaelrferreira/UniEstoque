<!-- Modal -->
<div class="modal fade step-container" id="step1" tabindex="-1" role="dialog" aria-labelledby="step1" data-step-index="0">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- -->
      <div class="modal-breadcrumbs">
          <div class='lince-input activin'>
            <select name=''  class='input-select select-sub-steps' required>
            </select>
          </div>
          <div class="name-breadcrumbs">
            <p><span>></span> etapa de <span>></span></p>
          </div>
          <div class='lince-input lastin'>
            <p>5</p>
          </div>
        </div>
        <!-- -->
    <!-- inicio sub passo 1 -->
      <div class="sub-step active">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3>Merceria do Zeca<img src="assets/img/basico.png" alt="Premio Iniciante"></h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
                <h1>Bem-Vindo!</h1>
                <p>O principal objetivo da administração de recursos materiais, com relação ao controle de estoque, é tentar alcançar o cenário em que não falte produtos para venda, porém não haja excesso de produto armazenado. O Universidade Estoque irá guiá-lo nas melhores práticas de administração para que você compreenda profundamente o estoque da sua empresa, e possa reduzir custos de armazenagem e aumentar a satisfação dos clientes.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <h5>Clique em continue para ir para o próximo passo.</h5>
          <button type="button" class="btn btn-primary btn-continue next-sub-step">Continue</button>
        </div>
      </div>  
      <!-- fim sub passo 1 -->

      <!-- inicio sub passo 2 -->
      <div class="sub-step">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3>Merceria do Zeca<img src="assets/img/basico.png" alt="Premio Iniciante"></h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
                <h1>Gestão de Estoques</h1>
                <p>Administradores de recursos materiais devem ter conhecimento tanto na administração de recursos, como também em sistemas de controle de informação. Utilizar um sistema computadorizado que auxilia na administração pode diminuir os custos com mão de obra e com materiais, aumentar a produção, fornecer maior segurança das informações sobre o estoque, além de melhorar a comunicação entre as diferentes áreas da empresa.</p>
                <p>Para este fim, o tsEstoque está aqui para ajudar. No tsEstoque é possível controlar os produtos que você recebe dos fornecedores, gerenciar o estoque de forma organizada (através de relatórios personalizados) e monitorar para quais clientes os seus produtos estão indo.</p>
            </div>
          </div>
        </div> 
        <div class="modal-footer">
          <h5>Clique em continue para ir para o próximo passo.</h5>
          <button type="button" class="btn btn-primary btn-continue next-sub-step" >Continue</button>
        </div>
      </div>    
      <!-- fim sub passo 2 -->

      <!-- inicio sub passo 4 -->
      <div class="sub-step">
        <form class='form-cadastro'
              action=''
              method='post'
              enctype='multipart/form-data'
              data-sucess='<div class="premier">
                              <img src="assets/img/trofeu.png" alt="" class="trofeu">
                              <h2>PARABÉNS!</h2>
                              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</p>
                           </div>
                           <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiriaaatis santiiis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Saaapieen in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                           <div class="modal-footer wow">
                           <button type="button" class="btn btn-primary btn-download">Download</button>
                            <!-- <span>ou</span> -->
                            <button type="button" class="btn btn-primary btn-email">Enviar email</button>
                          </div>'
              data-error='Problemas ao enviar a mensagem'
               ><!-- data-step="3" -->
            <input type='hidden' name='recipient' value='<?php echo $site->email; ?>'>
            <input type='hidden' name='site' value='<?php echo "http://".$_SERVER["SERVER_NAME"].strtok($_SERVER ["REQUEST_URI"],"?"); ?>'>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3>Merceria do Zeca<img src="assets/img/basico.png" alt="Premio Iniciante"></h3>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12 txt nopadding">
                <!-- Input Text -->
                <div class="container-fluid nopadding">
                  <div class="col-md-6">
                    <div class='lince-input'>
                        <input type='text' name='nome' placeholder='Nome' id='input-nome' maxlength='100' class='input-alpha' required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class='lince-input'>
                        <input type='text' name='email' placeholder='E-mail' id='input-email' maxlength='100' class='input-email' required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class='lince-input'>
                        <input type='text' name='ocupacao' placeholder='Ocupação' id='input-ocup' maxlength='100' class='input-alpha' required>
                    </div>
                  </div>
                </div>
                <!-- Anti-Spam -->
                <input type='text' name='url-form' class='url-form' value=' ' />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <h5>Preencha o formulario para ir para o próximo passo.</h5>
            <input type="submit" class="btn btn-primary btn-continue next-sub-step btn-prosseguir form-send"  value="Enviar">
          </div>
        </form>
      </div>

      <!-- inicio sub passo 5 -->
      <div class="sub-step">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           <div class="premier">
              <img src="assets/img/medalha-1.png" alt="" class="trofeu">
              <h2>PARABÉNS!</h2>
              <p>Você completou a primeira etada do nosso treinamento.</p>
           </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
               <p>O certificado esta disponivel para download ou para receber no seu e-mail.</p>
               <div class="modal-footer wow">
                  <button type="button" class="btn btn-primary btn-download">Download</button>
                  <!-- <span>ou</span> -->
                  <button type="button" class="btn btn-primary btn-email">Enviar email</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <h5>Clique em conteinue para liberar a próxima fase do treinamento.</h5>
          <button type="button" class="btn btn-primary btn-continue  next-step" data-step="1">Continue</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade step-container" id="step2" tabindex="-1" role="dialog" aria-labelledby="step2" data-step-index="0">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-breadcrumbs">
          <div class='lince-input activin'>
            <select name=''  class='input-select select-sub-steps' required>
            </select>
          </div>
          <div class="name-breadcrumbs">
            <p><span>></span> etapa de <span>></span></p>
          </div>
          <div class='lince-input lastin'>
            <p>5</p>
          </div>
        </div>
    <!-- inicio sub passo 1 -->
      <div class="sub-step active">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3>Conhecendo meu estoque<img src="assets/img/intermediario.png" alt="Premio Iniciante"></h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
                <!-- <h1>Mussum ipsum cacilds, vidis litro.</h1> -->
                <p>O mercado de trabalho não para, e é certo que está cada vez mais competitivo, independentemente do seu setor de atuação. Por conta disso, os erros e as falhas na gestão de estoque devem ser diminuídos ao máximo, a ponto de que a sua empresa não sofra com o desperdício, com a ultrapassagem da concorrência e demais fatores que venham a prejudicar a produtividade, a equipe de funcionários, as vendas ou o negócio como um todo.</p>
                <p>Por conta disso, a gestão do seu negócio se torna cada vez mais importante, independentemente de qual seja o seu empreendimento. E, para lhe auxiliar na gestão de estoque do seu negócio, confira neste artigo quatro erros que devem ser totalmente evitados</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <h5>Clique em continue para ir para o próximo passo.</h5>
          <button type="button" class="btn btn-primary btn-continue next-sub-step">Continue</button>
        </div>
      </div>  
      <!-- inicio sub passo 2 -->
      <div class="sub-step">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3>Conhecendo meu estoque<img src="assets/img/intermediario.png" alt="Premio Iniciante"></h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
                <!-- <h1>Mussum ipsum cacilds, vidis litro.</h1> -->
                <p>Muitas são as empresas que ainda não abriram mão dos antigos sistemas para o controle do estoque do seu negócio, apostando em planilhas manuais ou relatórios não tão eficientes assim. E é por meio dessa atitude totalmente retrógrada para o seu negócio que a probabilidade de erros (principalmente na contagem de itens) é grandíssima.</p>
                <p>Ao apostar em um software que gera relatórios envolvendo o seu estoque, o controle será muito maior, possibilitando ainda a programação de novas compras, a realização de promoções com produtos que não são vendidos há muito tempo e um planejamento bem mais completo dos seus produtos de uma forma geral.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <h5>Clique em continue para liberar o próximo nivel.</h5>
          <button type="button" class="btn btn-primary btn-continue  next-sub-step">Continue</button>
        </div>
      </div>
      <div class="sub-step">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           <div class="premier">
              <img src="assets/img/medalha-2.png" alt="" class="trofeu">
              <h2>PARABÉNS!</h2>
              <p>Você completou a segunda etada do nosso treinamento.</p>
           </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
               <p>O certificado esta disponivel para download ou para receber no seu e-mail.</p>
               <div class="modal-footer wow">
                  <button type="button" class="btn btn-primary btn-download">Download</button>
                  <!-- <span>ou</span> -->
                  <button type="button" class="btn btn-primary btn-email">Enviar email</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <h5>Clique em conteinue para liberar a próxima fase do treinamento.</h5>
          <button type="button" class="btn btn-primary btn-continue  next-step" data-step="2">Continue</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade step-container" id="step3" tabindex="-1" role="dialog" aria-labelledby="step3" data-step-index="0">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-breadcrumbs">
          <div class='lince-input activin'>
            <select name=''  class='input-select select-sub-steps' required>
            </select>
          </div>
          <div class="name-breadcrumbs">
            <p><span>></span> etapa de <span>></span></p>
          </div>
          <div class='lince-input lastin'>
            <p>5</p>
          </div>
      </div>
    <!-- inicio sub passo 1 -->
      <div class="sub-step active">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3>Colocando a casa em ordem<img src="assets/img/avancado.png" alt="Premio Iniciante"></h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
                <!-- <h1>Mussum ipsum cacilds, vidis litro.</h1> -->
                <p>planejamento do que será feito unicamente nos próximos dias não é adequado, principalmente no que diz respeito à gestão do estoque. Nesse sentido, não se torna possível pensar apenas no presente: um planejamento a longo prazo pode ser a chave para evitar a falta ou o excesso de mercadorias.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <h5>Clique em continue para ir para o próximo passo</h5>
          <button type="button" class="btn btn-primary btn-continue next-sub-step">Continue</button>
        </div>
      </div>  
      <!-- fim sub passo 1 -->
    <!-- inicio sub passo 2 -->
      <div class="sub-step">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3>Colocando a casa em ordem<img src="assets/img/avancado.png" alt="Premio Iniciante"></h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
                <!-- <h1>Mussum ipsum cacilds, vidis litro.</h1> -->
                <p>A integração de todos os setores da sua empresa é essencial para que o controle do estoque também seja possível de maneira assertiva. O setor de marketing, vendas e financeiro, por exemplo, podem auxiliar nos oferecendo a informação de qual item está saindo com maior demanda, qual não está, e assim por diante.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <h5>Clique em continue para ir para o próximo passo</h5>
          <button type="button" class="btn btn-primary btn-continue next-sub-step">Continue</button>
        </div>
      </div>  
      <!-- fim sub passo 2 -->
      <!-- inicio sub passo 3 -->
      <div class="sub-step">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3>Colocando a casa em ordem<img src="assets/img/avancado.png" alt="Premio Iniciante"></h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
            <p>como funciona a Curva ABC aplicada à Gestão de Estoques
O método ABC é uma maneira interessante para os gestores que buscam mais informações para  tomada de decisão estratégica, e permite identificar o grau de atenção que se deve ter para cada grupo de itens.</p>
             <p>Esta é uma tarefa essencial para evitar a perda de itens de maior relevância ou descobrir a necessidade de se livrar deles antes do tempo ou não. Essa classificação não é difícil de ser executada, e dará ao gestor a informação necessária para otimizar a eficiência de toda a sua cadeia de suprimento.</p>   
                <h1>Como funciona?</h1>
                <p>Se o gestor pretende montar uma curva ABC, inicialmente deve levar em conta todos os produtos que estejam armazenados em determinado período (no nosso caso 12 meses). Depois, cada item precisa ser registrado de acordo com fatores diversos, como valor unitário, descrição, quantidade e valor total (multiplicação do preço unitário pela quantidade), dentre outras características.</p>
            </div>
          </div>
        </div> 
        <div class="modal-footer">
          <h5>Clique em continue para finalizar o módulo Iniciante</h5>
          <button type="button" class="btn btn-primary btn-continue  next-sub-step">Continue</button>
        </div>
      </div>  
      <div class="sub-step">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           <div class="premier">
              <img src="assets/img/medalha-3.png" alt="" class="trofeu">
              <h2>PARABÉNS!</h2>
              <p>Você completou a Terceira etada do nosso treinamento.</p>
           </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
               <p>O certificado esta disponivel para download ou para receber no seu e-mail.</p>
               <div class="modal-footer wow">
                  <button type="button" class="btn btn-primary btn-download">Download</button>
                  <!-- <span>ou</span> -->
                  <button type="button" class="btn btn-primary btn-email">Enviar email</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <h5>Clique em conteinue para liberar a próxima fase do treinamento.</h5>
          <button type="button" class="btn btn-primary btn-continue  next-step" data-step="3">Continue</button>
        </div>
      </div>  
      <!-- fim sub passo 3 -->
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="step4" tabindex="-1" role="dialog" aria-labelledby="step4">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Experiente</h3>
        <img src="assets/img/intermediario.png" alt="Premio Intermediario">
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 txt">
              <h1>Mussum ipsum cacilds, vidis litro.</h1>
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.Casamentiss faiz malandris se pirulitá, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im mé intende tudis nuam golada, vinho, uiski, carirí, rum da jamaikis, só num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
          <div class="col-md-12 form"></div>
        </div>
      </div>
      <div class="modal-footer">
        <h5>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</h5>
        <button type="button" class="btn btn-primary btn-continue next-step" data-step="4">Continue</button>
      </div>
    </div>
  </div>
</div>
