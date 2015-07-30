<?php

    include('_config.php');

    // Cofiguração da Página
    $page = new stdClass();
    $page->title = 'Leitura';
    $page->desc = 'Descrição';

    // Adiciona o nome do site ao Título
    $page->title = $page->title.' | '.$site->name;

?>

<!-- Header -->
<?php include('header.php') ?>

    <!-- Page Content -->

    <section>
        <div class='container'>
            <div class='row'>
                <article class='col-xs-12'>
                    <!-- Section Container -->
                    <h1>Titulo</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam harum, expedita labore dolor nobis sit quos ipsam perferendis repellendus consequuntur ea praesentium delectus accusamus, tenetur architecto eligendi? Recusandae debitis, voluptatum!</p>
                </article>
            </div>
        </div>
    </section>

<!-- Footer -->
<?php include('footer.php') ?>
