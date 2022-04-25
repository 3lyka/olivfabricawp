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

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Добавить класс "show" (display:block) к отфильтрованным элементам и удалите класс "show" из элементов, которые не выбраны
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Показать отфильтрованные элементы
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Скрыть элементы, которые не выбраны
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Добавить активный класс к текущей кнопке управления (выделите ее)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
  $(document).mouseup(function (e){  
    var div = $(".close-on");  //класс элемента вне которого клик
    if (!div.is(e.target) && div.has(e.target).length === 0) {  
            div.removeClass('active');  
    }
  });
}

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