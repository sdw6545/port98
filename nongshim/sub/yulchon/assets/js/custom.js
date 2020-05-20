var mySwiper = new Swiper('#banner .swiper-container', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: 'true',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 5000,
      }
})

var mySwiper2 = new Swiper('.notice .swiper-container', {
    loop: true,
    spaceBetween: 60,
    slidesPerView: 'auto',
    centeredSlides: true
})

var mySwiper3 = new Swiper('.story .swiper-container', {
    loop: true,
    slidesPerView: 'auto',
    centeredSlides: true,
})




