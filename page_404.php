<?php

    include('_config.php');

    // Cofiguração da Página
    $page = new stdClass();
    $page->title = '404';
    $page->desc = 'Erro 404';

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
                    <h1>Erro 404</h1>
                    <p>Nenhuma página foi encontrada,continue navegando <a href='<?php echo $site->url; ?>'>aqui</a>.</p>
                </div>
            </div>
        </div>
    </section>

<!-- Footer -->
<?php include('footer.php') ?>
