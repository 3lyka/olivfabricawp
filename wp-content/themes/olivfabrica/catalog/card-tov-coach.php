<?php
/*

Template Name: card-tov-coach

*/


?>
<?php get_header(); ?>


<?php $filter = get_filter_by_id($_GET['id']);?>
<?php $category_name = get_category_by_id($filters["category_id"]); ?>
<main style="margin-top: 150px;">

<div class="container mb-5">



<div class="row filter">

<h3><?php echo $filter ["tittle"];?></h3>
<div class="col-sm-6 mt-4">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<img src="<?php bloginfo('template_url'); ?>/assets/img/card_tov/<?php echo $filter ["img"];?>.png" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
<img src="<?php bloginfo('template_url'); ?>/assets/img/card_tov/<?php echo $filter ["img"];?>.png" class="d-block w-100" alt="...">
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
</div>
<div class="col-sm-6 mt-5">
<p><?php echo $filter ["description"];?></p>
<div class="card-body lh-lg">
<p class="card-text m-0">Стиль: <?php echo $filter ["style"];?></p>
<p class="card-text m-0">Цвет: <?php echo $filter ["color"];?></p>
<p class="card-text m-0">Материал: <?php echo $filter ["material"];?></p>
<p class="card-text m-0">Наполнение: lectus morbi rhoncus</p>
<p class="card-text m-0"><b>от <?php echo $filter ["price"];?> ₽</b></p>


<a href="<?php bloginfo('template_url'); ?>/page/payment"
class="btn btn-primary btn-danger b-0 rounded-0 mt-5 d-flex justify-content-center"
style="padding: 1% 1% 1% 1%;">Рассчитать стоимость &#8594;</a>
</div>
</div>
</div>

</div>
</main>


<?php get_footer(); ?>