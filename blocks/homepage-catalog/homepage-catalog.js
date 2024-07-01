import {Swiper} from 'swiper'
import {Navigation} from 'swiper/modules'

export default () => {
  const slider = document.querySelector('.homepage-catalog-slider')

  if (slider) {
    new Swiper(slider, {
      modules: [Navigation],
      spaceBetween: 2,
      slidesPerView: "auto",
      navigation: {
        prevEl: '.homepage-catalog-slider__arrow_prev',
        nextEl: '.homepage-catalog-slider__arrow_next',
        disabledClass: 'slider__arrow_disabled',
        lockClass: 'slider__arrow_lock',
      },
      breakpoints: {
        768: {
        }
      }
    })
  }
}
