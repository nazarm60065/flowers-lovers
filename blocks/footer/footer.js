import {AdaptiveAccordion} from '../accordion/AdaptiveAccordion'

export default () => {
  const footerMenu = document.querySelector('.footer-menu')

  if (footerMenu) {
    new AdaptiveAccordion({
      selectors: {
        accordion: '.footer-menu',
        item: '.footer-menu-section',
        trigger: '.footer-menu-section-top',
        hidden: '.footer-menu-section-hidden'
      },
      classes: {
        opened: 'footer-menu-section_opened',
      },
      transitionDuration: 300,
      defaultOpenIndexes: [0],
      breakpoint: 1280,
    })
  }
}
