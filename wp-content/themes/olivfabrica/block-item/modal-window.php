<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border border-5 rounded-0 border-info">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Заявка на консультацию</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <p class="ms-3">Оставьте свои контакты и мы свяжемся <br> с вами в течении 10 минут.</p>
                <div class="modal-body">
                    <form class="form" id="myForm" role="form">
                        <div class="mb-1">
                            <label for="inputName">Введите имя:</label>
                            <input type="text" class="form-control" name="name" id="inputName" placeholder="Введите имя">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-tel" class="col-form-label">Номер телефона:</label>
                            <input
                                type="tel"
                                class="phone-field form-control rounded-0"
                                name="phone"
                                placeholder="+7(___)___-____"
                                data-rule-required="true"
                                data-rule-minlength="10"
                                data-msg="Введите номер телефона"
                            />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn rounded-0 text-white start-0" style="background-color:#07607C" >Оставить заявку</button>
                </div>
            </div>
        </div>
    </div>