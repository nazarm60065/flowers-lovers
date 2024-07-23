import { Accordion } from '../../accordion/Accordion'


import './lk.sass'

document.addEventListener('DOMContentLoaded', () => {
  const menu = document.querySelector('.lk-menu')


  if (menu) {
    new Accordion({
      selectors: {
        accordion: '.lk-aside',
        item: '.lk-menu',
        trigger: '.lk-menu-top',
        hidden: '.lk-menu-hidden'
      },
      classes: {
        opened: 'lk-menu_opened',
      },
      defaultOpenIndexes: [0],
      oneOpen: false,
    })
  }
})