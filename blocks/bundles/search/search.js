import { Dropdown } from '../../dropdown/Dropdown'
import homepageViewed from '../../homepage-viewed/homepage-viewed'

import 'swiper/css'
import './search.sass'

document.addEventListener('DOMContentLoaded', () => {
  const catalogSort = document.querySelector('.catalog-sort')

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

  homepageViewed()
})