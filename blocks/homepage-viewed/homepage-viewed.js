import {Swiper} from 'swiper'
import {Navigation} from 'swiper/modules'

export default () => {
  const slider = document.querySelector('.homepage-viewed-slider')

  if (slider) {
    new Swiper(slider, {
      modules: [Navigation],
      spaceBetween: 2,
      slidesPerView: "auto",
      navigation: {
        prevEl: '.homepage-viewed-slider__arrow_prev',
        nextEl: '.homepage-viewed-slider__arrow_next',
        disabledClass: 'slider__arrow_disabled',
        lockClass: 'slider__arrow_lock',
      },
    })
  }
}
