import { AdaptiveAccordion } from '../accordion/AdaptiveAccordion'
import { clear } from 'webpack-hot-middleware/client-overlay'

export default () => {
  const headerModalMenu = document.querySelector('.header-modal-menu'),
    header = document.querySelector('.header'),
    page = document.querySelector('.page'),
    headerModal = document.querySelector('.header-modal')

  let resizeTimer

  if (header) {
    let windowScroll = window.scrollY

    checkHeader()

    window.addEventListener('scroll', () => {
      if (window.scrollY > 0) {
        header.classList.add('header_scroll')
      } else {
        header.classList.remove('header_scroll')
      }

      if (window.scrollY < windowScroll) {
        header.classList.add('header_scroll-up')
      } else {
        header.classList.remove('header_scroll-up')
      }
    }, {passive: true})
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer)

      resizeTimer = setTimeout(() => {
        checkHeader()
      }, 250)
    })
  }

  if (headerModalMenu) {
    new AdaptiveAccordion({
      selectors: {
        accordion: '.header-modal-menu',
        item: '.header-modal-menu-section',
        trigger: '.header-modal-menu-section-top',
        hidden: '.header-modal-menu-section-hidden'
      },
      classes: {
        opened: 'header-modal-menu-section_opened'
      },
      defaultOpenIndexes: [0],
      breakpoint: 768
    })
  }

  if (headerModal) {
    const toggle = document.querySelector('.header__toggle'),
      close = document.querySelector('.header-modal__close'),
      headerModalOverlay = document.querySelector('.header-modal-overlay')

    window.addEventListener('load', () => {
      headerModal.classList.add('header-modal_ready')

      if (headerModalOverlay) headerModalOverlay.classList.add('header-modal-overlay_ready')
    })

    if (toggle) {
      toggle.addEventListener('click', () => {
        if (page) {
          if (page.classList.contains('page_menu-opened')) {
            page.classList.remove('page_menu-opened')
          } else {
            page.classList.add('page_menu-opened')
          }
        }
      })
    }

    if (close) {
      close.addEventListener('click', () => {
        if (page) page.classList.remove('page_menu-opened')
      })
    }

    if (headerModalOverlay) {
      headerModalOverlay.addEventListener('click', () => {
        if (page) page.classList.remove('page_menu-opened')
      })
    }
  }

  function checkHeader() {
    const headerTop = header.querySelector('.header-top'),
      headerFloat = header.querySelector('.header-float')

    if (headerTop && headerFloat) {
      headerFloat.style.top = `${headerTop.scrollHeight}px`
    }
  }
}
