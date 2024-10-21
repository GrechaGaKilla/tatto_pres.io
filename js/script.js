$('.owl-carousel').owlCarousel({
    loop:true,
    stagePadding: 100,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout: 2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

// Открываем меню
function openMenu() {
    let overlay = document.querySelector(".overlay");
    let overlayContainer = document.querySelector(".overlay_header");
    let menuLine = document.querySelectorAll(".small_menu_line");
    let header2 = document.querySelector(".header");
    let bgFix = document.querySelector(".full_width_img ");
 
    overlayContainer.classList.toggle("show");
    overlayContainer.classList.toggle("show2");
    overlay.classList.toggle("show");
    menuLine.forEach((line) => {
      line.classList.toggle("menuActive");
    });
  }
  
  function removeClass() {
    let overlay = document.querySelector(".overlay");
    let overlayContainer = document.querySelector(".overlay_header");
    let menuLine = document.querySelectorAll(".small_menu_line");
    menuLine.forEach((element) => element.classList.remove("menuActive"));
    overlayContainer.classList.remove("show");
    overlayContainer.classList.remove("show2");
    overlay.classList.remove("show");
  }
  
  window.addEventListener("resize", checkWidthMenu);
  
  // Проверяем ширину экрана и вызываем функцию для удаления класса
  function checkWidthMenu() {
    if (window.innerWidth > 900) {
      removeClass();
    }
  }
  

  let popUpSignIn = document.querySelector(".popUp");
  let body = document.querySelector("body");

  function openPopUp() {
    
    popUpSignIn.classList.toggle("show");
    body.classList.toggle("lock");
  }


  function closePopUp() {
    popUpSignIn.classList.remove("show");
    body.classList.remove("lock");
  }

  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()



  function changePopUp () {
    let popUpLogin = document.querySelector(".popUp_container_auth");
    let popUpReg = document.querySelector(".popUp_container_reg");

    popUpLogin.classList.toggle("hidden");
    popUpReg.classList.toggle("hidden");
  }