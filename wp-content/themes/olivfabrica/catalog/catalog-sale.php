<?php
/*
Template Name: catalog-sale

*/


?>
<?php get_header(); ?>

<main style="margin-top:160px;">
<div class="container">
<div class="row">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item active "><a class="text-decoration-none fw-light text-secondary"
href="#">Главная</a></li>
<li class="breadcrumb-item active"><a class="text-decoration-none fw-light text-secondary"
href="#">Каталог</a></li>
<li class="breadcrumb-item active"><a class="text-decoration-none fw-light text-secondary"
href="#">Акции</a></li>
</ol>
</nav>
<h3>Акции</h3>
<div class="flex-row bd-highlight mb-4 catalog__button col-md-12">
<button type="button" class="btn border border-info m-1 border-3 rounded-0 text-info">Классический стиль</button>
<button type="button" class="btn border border-light m-1 border-3 rounded-0">Хай-тек</button>
<button type="button" class="btn border border-light m-1 border-3 rounded-0">Модерн</button>
<button type="button" class="btn border border-light m-1 border-3 rounded-0">Современный стиль</button>
<button type="button" class="btn border border-light m-1 border-3 rounded-0">Скандинавский стиль</button>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="accordion col-md-3 col-sm-12" id="accordionExample">
<div class="accordion-item mb-3">
<h2 class="accordion-header" id="headingOne">
<button class="accordion-button collapsed text-info fw-bold border border-2 rounded-0 border-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
Кухни
</button>
</h2>
<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
data-bs-parent="#accordionExample">
<div class="accordion-body">
<ul class="list-unstyled lh-lg">
<li><a class="text-decoration-none text-dark" href="#">Классический стиль</a></li>
<li><a class="text-decoration-none text-dark" href="#">Современный стиль</a></li>
<li><a class="text-decoration-none text-dark" href="#">Хай-тек кухни</a></li>
<li><a class="text-decoration-none text-dark" href="#">Кухни в стиле модерн</a></li>
<li><a class="text-decoration-none text-dark" href="#">Скандинавский стиль</a></li>
</ul>
</div>
</div>
</div>

</div>
<div class="accordion col-md-3 col-sm-12" id="accordionExample">
<div class="accordion-item mb-3">
<h2 class="accordion-header" id="headingTwo">
<button class="accordion-button collapsed text-info fw-bold border border-2 rounded-0 border-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
Шкаф купе
</button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
data-bs-parent="#accordionExample">
<div class="accordion-body">
<ul class="list-unstyled lh-lg">
<li><a class="text-decoration-none text-dark" href="#">Custom menu</a></li>
<li><a class="text-decoration-none text-dark" href="#">Custom menu</a></li>
<li><a class="text-decoration-none text-dark" href="#">Custom menu</a></li>
<li><a class="text-decoration-none text-dark" href="#">Custom menu</a></li>
</ul>
</div>
</div>
</div>

</div>
<div class="accordion col-md-3 col-sm-12" id="accordionExample">
<div class="accordion-item">
<h2 class="accordion-header" id="headingThree">
<button class="accordion-button collapsed text-info fw-bold border border-2 rounded-0 border-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
Техника
</button>
</h2>
<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
data-bs-parent="#accordionExample">
<div class="accordion-body">
<ul class="list-unstyled lh-lg">
<li><a class="text-decoration-none text-dark" href="#">Мойки</a></li>
<li><a class="text-decoration-none text-dark" href="#">Смесители</a></li>
<li><a class="text-decoration-none text-dark" href="#">Варочные панели</a></li>
<li><a class="text-decoration-none text-dark" href="#">Вытяжки</a></li>
<li><a class="text-decoration-none text-dark" href="#">Посудомойки</a></li>
</ul>
</div>
</div>
</div>

</div>

<div class="accordion accordion mb-3 col-md-3 col-sm-12" id="accordionFlushExample">
<div class="accordion-item">
<h2 class="accordion-header" id="flush-headingOne">
<button class="accordion-button collapsed text-info fw-bold border border-2 rounded-0 border-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
Фильтр
</button>
</h2>
<div id="flush-collapseOne" class="accordion-collapse collapse"
aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
<div class="accordion-body">Placeholder content for this accordion, which is intended to
demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
body.</div>
</div>
</div>
</div>
</div>
<div class="container mt-4 p-0 m-0 m-auto">
<div class="row">

<?php
$slide = get_slide_all ();
foreach ($slide as $slide): ?>

<?php $category_name = get_category_by_id($slide["category_id"]); ?>

<div class="filter col-lg-3 col-sm-6 mb-3 center_card <?php echo $slide ["color_id"];?> <?php echo $category_name; ?>">
<div class="card mb-2 b-0 rounded-0">
<!--Карточка с акцией-->
<p class="m-0 p-2 position-absolute top-0 start-0 text-white b-0"
style="background-color: #07607C;"><?php echo $slide ["sale"];?>%</p>
<!--Карточка с акцией-->
<img src="<?php bloginfo('template_url'); ?>/assets/img/card_tov/<?php echo $slide ["img"];?>.png" class="card-img-top p-0 b-0 rounded-0" alt="..." style="height: 14em;">
<div class="card-body">
<h5 class="card-title m-0">Название: <?php echo $slide ["tittle"];?></h5>
<p class="card-text m-0">Стиль: <?php echo $slide ["style"];?></p>
<p class="card-text m-0">Цвет: <?php echo $slide ["color"];?></p>
<p class="card-text m-0">Материал: <?php echo $slide ["material"];?></p>
<a href="<?php bloginfo('template_url'); ?>/card-tov-<?php echo $slide ["group_category"];?>?id=<?php echo $slide ["id"];?>"
class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
style="padding: 1% 2% 1% 2%;">от <?php echo $slide ["price"];?> ₽ &#8594;</a>
</div>
</div>
</div>

<?php endforeach; ?>

</div>
</div>
</main>
<?php get_footer(); ?>