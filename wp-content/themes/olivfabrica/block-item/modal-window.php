<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border border-5 rounded-0 border-info">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Заявка на консультацию</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <p class="ms-3">Оставьте свои контакты и мы свяжемся <br> с вами в течении 10 минут.</p>
                <div class="modal-body">
                    <form class="form lh-lg" id="myForm" role="form">
                        <div class="mb-1">
                        <?php echo do_shortcode('[contact-form-7 id="14" title="Contact form"]'); ?>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>