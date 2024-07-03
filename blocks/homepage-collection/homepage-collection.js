import { Swiper } from 'swiper'
import { Navigation } from 'swiper/modules'
import { sliderEdgeHandler } from '../helpers/sliderEdgeHandler'
import { clear } from 'webpack-hot-middleware/client-overlay'

export default () => {
  const tabs = document.querySelector('.homepage-collection-tabs'),
    slider = document.querySelector('.homepage-collection-slider')

  let activeTab, timer, slidesList = [], tabSwiperObj

  if (tabs) {
    tabSwiperObj = new Swiper(tabs, {
      modules: [Navigation],
      slidesPerView: 'auto',
      spaceBetween: 20,
      centerInsufficientSlides: true,
      on: {
        init: sliderEdgeHandler({}),
        slideChange: sliderEdgeHandler({}),
        transitionStart: sliderEdgeHandler({}),
        transitionEnd: sliderEdgeHandler({}),
      },
      navigation: {
        prevEl: '.homepage-collection-tabs__arrow_prev',
        nextEl: '.homepage-collection-tabs__arrow_next',
        disabledClass: 'homepage-collection-tabs__arrow_disabled',
        lockClass: 'slide__arrow_lock'
      }
    })
  }

  if (slider) {
    slidesList = slider.querySelectorAll('.homepage-catalog-slide')

    new Swiper(slider, {
      spaceBetween: 2,
      slidesPerView: 'auto',
      centerInsufficientSlides: true,
    })

    if (tabs) {
      activeTab = document.querySelector('.homepage-collection-tab_active')

      if (activeTab) filterSlides(activeTab.dataset['tab'])
      if (tabSwiperObj) tabSwiperObj.slideTo(activeTab.dataset['index'] - 1)

      document.addEventListener('click', event => {
        const tabButton = event.target.closest('.homepage-collection-tab')

        if (tabButton && !tabButton.classList.contains('homepage-collection-tab_active')) {
          activeTab.classList.remove('homepage-collection-tab_active')
          tabButton.classList.add('homepage-collection-tab_active')
          activeTab = tabButton
          filter(tabButton.dataset['tab'])
        }
      })
    }
  }

  function filter(tab = '') {
    if (slider && tab) {
      slider.classList.add('homepage-collection-slider_hide')

      setTimeout(() => {
        filterSlides(tab)
        slider.classList.remove('homepage-collection-slider_hide')
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
