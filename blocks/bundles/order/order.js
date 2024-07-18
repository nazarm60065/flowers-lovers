import { Accordion } from '../../accordion/Accordion'
import { Dropdown } from '../../dropdown/Dropdown'

import './order.sass'


document.addEventListener('DOMContentLoaded', () => {
  const dropdownList = document.querySelectorAll('.dropdown')

  new Accordion({
    selectors: {
      accordion: '.order-wrapper',
      item: '.order-section-accordion',
      trigger: '.order-section-top',
      hidden: '.order-section-hidden',
    },
    classes: {
      opened: 'order-section_opened',
    },
    defaultOpenIndexes: [0],
    oneOpen: false,
  })

  if (dropdownList.length) {
    dropdownList.forEach(dropdown => {
      new Dropdown({
        selectors: {
          dropdown: dropdown,
          current: '.order-props-dropdown-current',
          currentText: '.order-props-dropdown-current__text',
          value: '.order-props-dropdown-item__value'
        },
        oneOpen: true,
        onChange: (valueEl, dropdown) => {
          const group = dropdown.closest('.order-props-group')

          if (group) {
            const control = group.querySelector('input.order-props__control')

            if (control) {
              const value = valueEl.dataset['value']

              control.value = value
            }
          }
        }
      })
    })
  }
})