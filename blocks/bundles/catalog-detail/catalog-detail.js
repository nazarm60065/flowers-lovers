import Swiper from 'swiper'
import {Pagination} from 'swiper/modules'
import homepageViewed from '../../homepage-viewed/homepage-viewed'
import catalogDelivery from '../../catalog-delivery/catalog-delivery'

import 'swiper/css'
import './catalog-detail.sass'

document.addEventListener('DOMContentLoaded', () => {
  const gallery = document.querySelector('.catalog-detail-gallery')

  let swiperObj

  if (gallery) {
    checkSlider()
  }

  catalogDelivery()
  homepageViewed()
  function checkSlider() {
    if (window.innerWidth >= 768 && swiperObj) {
      swiperObj.destroy()
      swiperObj = null
    }

    if (window.innerWidth < 768 && !swiperObj) {
      swiperObj = new Swiper(gallery, {
        modules: [Pagination],
        spaceBetween: 2,
        loop: true,
        pagination: {
          el: '.catalog-detail-gallery-dots',
          clickable: true,
          type: 'bullets',
          lockClass: 'slider-dots_lock'
        }
      })
    }
  }
})