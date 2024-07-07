import catalogSection from '../../catalog-sections/catalog-sections'
import homepageViewed from '../../homepage-viewed/homepage-viewed'
import filter from '../../filter/filter'

import 'swiper/css'
import 'nouislider/dist/nouislider.min.css'
import './catalog.sass'

document.addEventListener('DOMContentLoaded', () => {
  catalogSection()
  homepageViewed()
  filter()
})