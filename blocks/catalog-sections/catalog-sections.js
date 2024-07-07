import Swiper from 'swiper'

export default () => {
  const slider = document.querySelector('.catalog-sections')

  let swiperObj, resizeTimer

  if (slider) {
    checkSlider()

    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer)

      resizeTimer = setTimeout(checkSlider, 250)
    })
  }

  function checkSlider() {
    if (window.innerWidth >= 1280 && swiperObj) {
      swiperObj.destroy(true)
      swiperObj = null
    }

    if (window.innerWidth < 1280 && !swiperObj) {
      initSlider()
    }
  }

  function initSlider() {
    swiperObj = new Swiper(slider, {
      slidesPerView: "auto",
      spaceBetween: 10,
    })
  }
}
