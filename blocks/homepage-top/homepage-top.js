import Swiper from 'swiper'
import {Navigation, Pagination, Controller, EffectFade} from 'swiper/modules'

export default () => {
  const slider = document.querySelector('.homepage-top-slider'),
    cards = document.querySelector('.homepage-top-cards')

  let sliderSwiperObj,cardsSwiperObj

  if (slider) {
    sliderSwiperObj = new Swiper(slider, {
      modules: [Navigation, Controller, EffectFade],
      loop: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      navigation: {
        prevEl: '.homepage-top-slider__arrow_prev',
        nextEl: '.homepage-top-slider__arrow_next',
        disabledClass: 'slider-arrow_disabled',
        lockClass: 'slider-arrow_lock',
      }
    })
  }

  if (cards) {
    cardsSwiperObj = new Swiper(cards, {
      modules: [Pagination, Controller, Navigation],
      spaceBetween: 16,
      loop: true,
      pagination: {
        el: '.homepage-top-cards-dots',
        type: 'bullets',
        clickable: true,
        lockClass: 'slider-dots_lock',
      },
      navigation: {
        prevEl: '.homepage-top-cards__arrow_prev',
        nextEl: '.homepage-top-cards__arrow_next',
        disabledClass: 'slider-arrow_disabled',
        lockClass: 'slider-arrow_lock',
      },
      controller: {
        control: sliderSwiperObj,
      },
    })

    if (sliderSwiperObj) sliderSwiperObj.controller.control = cardsSwiperObj
  }
}
