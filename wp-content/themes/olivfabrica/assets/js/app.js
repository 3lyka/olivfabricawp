/* js Элементы */
//swiper товаров


var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  watchOverflow:true,
  slidesPerColumn:3,
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    "@0.00": {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    "@0.75": {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    "@1.00": {
      slidesPerView: 3,
      spaceBetween: 40,
    },
    "@1.50": {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  },
});



var containerEl = document.querySelector('[data-ref~="mixitup-container"]');

var mixer = mixitup(containerEl, {
    selectors: {
        target: '[data-ref~="mixitup-target"]'
    }
});

//валидация модального окна

      // вешаем маску на телефон
      $('.phone-field').inputmask("+7(999)999-9999");
    
      // добавляем правило для валидации телефона
      jQuery.validator.addMethod("checkMaskPhone", function(value, element) {
          return /\+\d{1}\(\d{3}\)\d{3}-\d{4}/g.test(value); 
      });
      
      // получаем нашу форму по class
      var form = $('.form-request');
      
      // включаем валидацию в форме
      form.validate();
      
      // вешаем валидацию на поле с телефоном по классу
      $.validator.addClassRules({
          'phone-field': {
              checkMaskPhone: true,
          }
      });
      
      // Проверка на валидность формы при отправке, если нужно
      form.submit(function(e){
          e.preventDefault();
          if (form.valid()) {
              alert('Форма отправлена');
          }
          return;
      });


//мегаменю

//dom start

      document.addEventListener("DOMContentLoaded", function(){
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element){
        	element.addEventListener('click', function (e) {
        		e.stopPropagation();
        	});
        })
    }); 


    

	// DOMContentLoaded  end