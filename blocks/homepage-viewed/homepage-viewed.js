import {Swiper} from 'swiper'
import {Navigation} from 'swiper/modules'
import { sliderEdgeHandler } from '../helpers/sliderEdgeHandler'

export default () => {
  const slider = document.querySelector('.homepage-viewed-slider')

  let activeTab, slidesList = [], sliderObj

  if (slider) {
    const tabsList = document.querySelectorAll('.homepage-viewed-tab__button'),
      slidesList = slider.querySelectorAll('.catalog-card')
    if (tabsList.length) {
      activeTab = document.querySelector('.homepage-viewed-tab__button_active')

      if (activeTab) filterSlides(activeTab.dataset['tab'])

      document.addEventListener('click', event => {
        const tabButton = event.target.closest('.homepage-viewed-tab__button')

        if (tabButton && !tabButton.classList.contains('homepage-viewed-tab__button_active')) {
          activeTab.classList.remove('homepage-viewed-tab__button_active')
          tabButton.classList.add('homepage-viewed-tab__button_active')
          activeTab = tabButton
          filter(tabButton.dataset['tab'])
        }
      })
    }

    sliderObj = new Swiper(slider, {
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

    function filter(tab = '') {
      if (slider && tab) {
        slider.classList.add('homepage-viewed-slider_hide')

        setTimeout(() => {
          filterSlides(tab)
          slider.classList.remove('homepage-viewed-slider_hide')
        }, 300)
      }
    }

    function filterSlides(tab = '') {
      if (slidesList.length && tab) {
        slidesList.forEach(slide => {
          if (slide.dataset['tab'] === tab) {
            slide.classList.add('swiper-slide')
            slide.style.display = ''
          } else {
            slide.classList.remove('swiper-slide')
            slide.style.display = 'none'
          }
        })
      }
    }
  }
}
