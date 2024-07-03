import {Accordion} from '../accordion/Accordion'

export default () => {
  const accordion = document.querySelector('.homepage-faq-list')

  if (accordion) {
    new Accordion({
      selectors: {
        accordion: '.homepage-faq-list',
        item: '.homepage-faq-item',
        trigger: '.homepage-faq-item-top',
        hidden: '.homepage-faq-item-hidden'
      },
      classes: {
        opened: 'homepage-faq-item_opened',
      },
    })
  }
}
