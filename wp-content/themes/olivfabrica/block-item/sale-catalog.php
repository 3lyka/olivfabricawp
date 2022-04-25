<main class="popular__slider bg-light mb-5">
<div class="container">
<div class="row mb-5">
<h1 class="mt-5 center__h1__popular">
Акции
</h1>
<div class="swiper mySwiper">
<div class="swiper-wrapper mb-5">

<?php
$slide = get_slide_all ();
foreach ($slide as $slide): ?>
<?php $category_name = get_category_by_id($slide["category_id"]); ?>
<div class="swiper-slide mb-5">
<div class="card b-0 rounded-0">
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
<a href="/catalog/card-tov-page/card-tov-<?php echo $slide ["group_category"];?>.php?id=<?php echo $slide ["id"];?>"
class="btn btn-primary btn-danger b-0 rounded-0 mt-3 ms-2 d-flex justify-content-center"
style="padding: 1% 2% 1% 2%;">от <?php echo $slide ["price"];?> ₽ &#8594;</a>
</div>
</div>
</div>

<?php endforeach; ?>

</div>

<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

<div class="swiper-pagination"></div>
</div>
</div>
</div>
</main>