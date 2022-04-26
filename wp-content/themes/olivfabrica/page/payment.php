<?php
/*
Template Name: payment

*/


?>
<?php get_header(); ?>


<main style="margin-top: 150px;">
<div class="container">
<div class="row">
<h1>Расчет стоимости кухни</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item active "><a class="text-decoration-none fw-light text-secondary"
href="#">Главная</a></li>
<li class="breadcrumb-item active"><a class="text-decoration-none fw-light text-secondary"
href="#">Каталог</a></li>
<li class="breadcrumb-item active"><a class="text-decoration-none fw-light text-secondary"
href="#">Расчет стоимости</a></li>
</ol>
</nav>
<div class="m-0 m-auto mb-5 mt-5">
<div class="multisteps-form__progress">
<button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Расчет кухни</button>
<button class="multisteps-form__progress-btn" type="button" title="Address">Укажите размер вашей кухни по каждой стене</button>
<button class="multisteps-form__progress-btn" type="button" title="Order Info">Ваши контакты</button>
</div>
</div>
</div>
<!--form panels-->
<div class="row">
    <form class="multisteps-form__form">
        <!--single form panel-->
        <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
          <h3 class="multisteps-form__title">Выбор кухни</h3>
          <div class="multisteps-form__content">
<div class="form-row">
<div class="row d-flex justify-content-center">
  <div class="card col-sm-3 col-md-12 m-2 p-0 border-0" style="width: 14rem;height: 18em;">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/coach-vybor.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Прямая кухня <input class="form-check-input mt-2 ms-3" type="radio" name="radioNoLabel" id="radioNoLabel1" value="" aria-label="..."></p>
    </div>
  </div>
  <div class="card col-sm-3 col-md-12 m-2 p-0 border-0" style="width: 14rem;height: 18em;">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/coach-vybor.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Прямая кухня <input class="form-check-input mt-2 ms-3" type="radio" name="radioNoLabel" id="radioNoLabel2" value="" aria-label="..."></p>
    </div>
  </div>
  <div class="card col-sm-3 col-md-12 m-2 p-0 border-0" style="width: 14rem;height: 18em;">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/coach-vybor.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Прямая кухня <input class="form-check-input mt-2 ms-3" type="radio" name="radioNoLabel" id="radioNoLabel3" value="" aria-label="..."></p>
    </div>
  </div>
  <div class="card col-sm-3 col-md-12 m-2 p-0 border-0" style="width: 14rem;height: 18em;">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/coach-vybor.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Прямая кухня <input class="form-check-input mt-2 ms-3" type="radio" name="radioNoLabel" id="radioNoLabel4" value="" aria-label="..."></p>
    </div>
  </div>
</div>
</div>

<!--Конец 1 шага формы-->

            <div class="button-row d-flex mt-4">
              <button class="btn bg-info text-white border-0 rounded-0 ml-auto js-btn-next" type="button" title="Next">Далее</button>
            </div>
          </div>
        </div>
        <!--single form panel-->
        <div class="multisteps-form__panel shadow p-4 rounded bg-white lh-lg" data-animation="scaleIn">
          <h3 class="multisteps-form__title">Размеры кухни</h3>
          <p class="mt-1">Пожалуйста, укажите размер вашей кухни по каждой стене </p>
          <div class="multisteps-form__content">
                <div class="form-row">
                  <div class="row d-flex justify-content-center m-4">
                    <div class="col-sm-3">
                      <p>Длина первой столешницы</p>
                      <input type="text" class="form-control" placeholder="см" aria-label="First name">
                    </div>
                    <div class="col-sm-3">
                      <p>Длина второй столешницы</p>
                      <input type="text" class="form-control" placeholder="см" aria-label="First name">
                    </div>
                    <div class="col-sm-3">
                      <p>Длина третьей столешницы</p>
                      <input type="text" class="form-control" placeholder="см" aria-label="First name">
                    </div>
                  </div>
                </div>
            <div class="button-row d-flex mt-4">
              <button class="btn js-btn-prev" type="button" title="Prev">Назад</button>
              <button class="btn btn bg-info text-white border-0 rounded-0 ml-auto js-btn-next" type="button" title="Next">Далее</button>
            </div>
          </div>
        </div>
        <!--single form panel-->
        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
          <h3 class="multisteps-form__title">Контактный данные</h3>
          <div class="multisteps-form__content">
            <div class="form-row">
              <div class="row d-flex justify-content-center">
                <div class="col-md-6 p-4">
                  <form class="form" id="myForm" role="form">
                      <div class="mb-3">
                      <?php echo do_shortcode('[contact-form-7 id="14" title="Contact form"]'); ?>
                  </form>
              </div>
              </div>
            </div>
            <div class="button-row d-flex mt-4">
              <button class="btn js-btn-prev" type="button" title="Prev">Назад</button>
            </div>
          </div>
        </div>
      </form>
</div>
</div>
</div>
</main>



<!--внутренний скрипт-->
<script>
  //DOM elements
const DOMstrings = {
  stepsBtnClass: 'multisteps-form__progress-btn',
  stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
  stepsBar: document.querySelector('.multisteps-form__progress'),
  stepsForm: document.querySelector('.multisteps-form__form'),
  stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
  stepFormPanelClass: 'multisteps-form__panel',
  stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
  stepPrevBtnClass: 'js-btn-prev',
  stepNextBtnClass: 'js-btn-next' };

//remove class from a set of items
const removeClasses = (elemSet, className) => {
  elemSet.forEach(elem => {
    elem.classList.remove(className);
  });
};
//return exect parent node of the element
const findParent = (elem, parentClass) => {
  let currentNode = elem;
  while (!currentNode.classList.contains(parentClass)) {
    currentNode = currentNode.parentNode;
  }
  return currentNode;
};
//get active button step number
const getActiveStep = elem => {
  return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};
//set all steps before clicked (and clicked too) to active
const setActiveStep = activeStepNum => {
  //remove active state from all the state
  removeClasses(DOMstrings.stepsBtns, 'js-active');
  //set picked items to active
  DOMstrings.stepsBtns.forEach((elem, index) => {
    if (index <= activeStepNum) {
      elem.classList.add('js-active');
    }
  });
};
//get active panel
const getActivePanel = () => {
  let activePanel;
  DOMstrings.stepFormPanels.forEach(elem => {
    if (elem.classList.contains('js-active')) {
      activePanel = elem;
    }
  });
  return activePanel;
};
//open active panel (and close unactive panels)
const setActivePanel = activePanelNum => {
  //remove active class from all the panels
  removeClasses(DOMstrings.stepFormPanels, 'js-active');
  //show active panel
  DOMstrings.stepFormPanels.forEach((elem, index) => {
    if (index === activePanelNum) {
      elem.classList.add('js-active');
      setFormHeight(elem);
    }
  });
};
//set form height equal to current panel height
const formHeight = activePanel => {
  const activePanelHeight = activePanel.offsetHeight;
  DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
};
const setFormHeight = () => {
  const activePanel = getActivePanel();
  formHeight(activePanel);
};
//STEPS BAR CLICK FUNCTION
DOMstrings.stepsBar.addEventListener('click', e => {
  //check if click target is a step button
  const eventTarget = e.target;
  if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
    return;
  }
  //get active button step number
  const activeStep = getActiveStep(eventTarget);
  //set all steps before clicked (and clicked too) to active
  setActiveStep(activeStep);
  //open active panel
  setActivePanel(activeStep);
});
//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener('click', e => {
  const eventTarget = e.target;
  //check if we clicked on `PREV` or NEXT` buttons
  if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))
  {
    return;
  }
  //find active panel
  const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
  let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
  //set active step and active panel onclick
  if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
    activePanelNum--;
  } else {
    activePanelNum++;
  }
  setActiveStep(activePanelNum);
  setActivePanel(activePanelNum);
});
//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener('load', setFormHeight, false);
//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener('resize', setFormHeight, false);
</script>

<?php get_footer(); ?>