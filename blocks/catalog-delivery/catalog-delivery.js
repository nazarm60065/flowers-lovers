import { Accordion } from '../accordion/Accordion'

export default () => {
    const accordion = document.querySelector('.catalog-delivery')

  if (accordion) {
    new Accordion({
      selectors: {
        accordion: '.catalog-delivery',
        item: '.catalog-delivery-item',
        trigger: '.catalog-delivery-item-top',
        hidden: '.catalog-delivery-item-hidden'
      },
      classes: {
        opened: 'catalog-delivery-item_opened',
      },
      defaultOpenIndexes: [0],
    })
  }
}
