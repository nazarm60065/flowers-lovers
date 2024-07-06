import './templates'

import homepageTop from '../../homepage-top/homepage-top'
import homepageCatalog from '../../homepage-catalog/homepage-catalog'
import homepageCollection from '../../homepage-collection/homepage-collection'
import homepageFaq from '../../homepage-faq/homepage-faq'
import homepageViewed from '../../homepage-viewed/homepage-viewed'

import 'swiper/css'
import 'swiper/css/effect-fade'
import './homepage.sass'


document.addEventListener('DOMContentLoaded', () => {
  homepageTop()
  homepageCatalog()
  homepageCollection()
  homepageFaq()
  homepageViewed()
})