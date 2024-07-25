import {Fancybox} from "@fancyapps/ui"
import '@fancyapps/ui/dist/fancybox/fancybox.css'

window.Fancybox = Fancybox

export const fbInit = () => {


  Fancybox.bind("[data-fancybox]", {
    mainClass: "custom-fancybox",
    defaultDisplay: 'flex',
    dragToClose: false,
    trapFocus: false,
    autoFocus: false,
  })

  Fancybox.bind("[data-fancybox-slide]", {
    mainClass: "custom-fancybox",
    showClass: "f-classicIn from-next",
    hideClass: "f-classicOut to-next",
    defaultDisplay: 'flex',
    dragToClose: false,
    trapFocus: false,
    autoFocus: false,
  })
}

export const fbCLickCloseHandler = () => {
  document.addEventListener('click', event => {
    let close = event.target.closest('[data-fancybox-close]')

    if (close) Fancybox.close()
  })
}

export const fbInitAll = () => {
  fbInit()
  fbCLickCloseHandler()
}