import catalogSection from '../../catalog-sections/catalog-sections'
import homepageViewed from '../../homepage-viewed/homepage-viewed'
import filter from '../../filter/filter'
import {Dropdown} from '../../dropdown/Dropdown'

import 'swiper/css'
import 'nouislider/dist/nouislider.min.css'
import './catalog.sass'

document.addEventListener('DOMContentLoaded', () => {
  const catalogSort = document.querySelector('.catalog-sort')

  catalogSection()
  homepageViewed()
  filter()

  if (catalogSort) {
    new Dropdown({
      selectors: {
        dropdown: '.dropdown',
        current: '.catalog__sort-toggle',
        currentText: '.dropdown-current__text',
        value: '.catalog-sort-item'
      },
      defaultCurrentText: 'Сортировка',
      oneOpen: true,
    })
  }
})