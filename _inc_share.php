<?php 
  $server = $_SERVER['SERVER_NAME'];
  $endereco = $_SERVER ['REQUEST_URI'];
  $link = "http://".$server.$endereco; 
?>
                        

<ul class="redes">
<li class="gplus">
    <!-- Google +1 : Inicio -->
    <div style="width:45px; z-index:1">
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
     {lang: 'pt-BR',parsetags: 'onload'}
    </script>
    <g:plusone href="<?php echo $link; ?>" align="left" annotation="none" size="medium"></g:plusone>
    </div> 
    <!-- Google +1 : Fim -->
</li>
<li class="twitter">
    <!-- Twitter : Inicio -->
    <div style="width:100px; z-index:1">
    <a href="https://twitter.com/share" class="twitter-share-button" data-text="<?= $conteudos['referencia'].","?>" data-lang="pt">Tweetar</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <!-- Twitter : Inicio -->
</li>
<li class="face">
    <!-- Facebook : Inicio -->
    <div style="width:100px; z-index:10">
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <div align="left" class="fb-like" data-href="<?php echo $link; ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-action="like" data-font="arial"></div>
    </div>
    <!-- Facebook : Fim -->
</li>
</ul>