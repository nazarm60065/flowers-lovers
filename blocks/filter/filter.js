import noUiSlider from 'nouislider'
import AutoNumeric from 'autonumeric'
import { Accordion } from '../accordion/Accordion'

export default () => {
  const rangeList = document.querySelectorAll('.filter-range'),
    filterModal = document.querySelector('.filter-modal'),
    filterAccordion = document.querySelector('.filter-modal-inner'),
    page = document.querySelector('.page')

  if (rangeList.length) {
    rangeList.forEach(range => {
      const rangeSlider = range.querySelector('.filter-range-slider'),
        rangeMinControl = range.querySelector('.filter-range-min__control'),
        rangeMaxControl = range.querySelector('.filter-range-max__control')

      if (rangeSlider) initRangeSlider(rangeSlider)

      rangeSlider.noUiSlider.on('change', function (value) {
        if (Array.isArray(value)) {
          if (rangeMinControl) AutoNumeric.set(rangeMinControl, +value[0])
          if (rangeMaxControl) AutoNumeric.set(rangeMaxControl, +value[1])
        } else {
          if (rangeMinControl) AutoNumeric.set(rangeMinControl, +value)
        }
      });

      if (rangeMinControl) {
        new AutoNumeric(rangeMinControl, {
          decimalCharacter : '.',
          digitGroupSeparator : ' ',
          decimalPlaces: 0,
        })

        if (rangeSlider) {
          rangeMinControl.addEventListener('input', event => {
            let value = +event.target.value.replaceAll(/[^\d\.+-]/gm, '') || 0

            rangeSlider.noUiSlider.set([value, null]);
          })
        }
      }

      if (rangeMaxControl) {
        new AutoNumeric(rangeMaxControl, {
          decimalCharacter : '.',
          digitGroupSeparator : ' ',
          decimalPlaces: 0,
        })

        if (rangeSlider) {
          rangeMaxControl.addEventListener('input', event => {
            let value = +event.target.value.replaceAll(/[^\d\.+-]/gm, '') || 0

            rangeSlider.noUiSlider.set([null, value]);
          })
        }
      }
    })
  }

  if (filterModal) {
    const filterToggle = document.querySelector('.catalog__filter-toggle'),
      filterClose = filterModal.querySelector('.filter-modal__close'),
      filterModalOverlay = document.querySelector('.filter-modal-overlay')

    filterModal.classList.add('filter-modal_ready')

    if (filterModalOverlay) {
      filterModalOverlay.classList.add('filter-modal-overlay_ready')

      filterModalOverlay.addEventListener('click', () => {
        closeFilter()
      })
    }

    if (filterToggle) {
      filterToggle.addEventListener('click', toggleFilter)
    }

    if (filterClose) {
      filterClose.addEventListener('click', closeFilter)
    }
  }

  if (filterAccordion) {
    new Accordion({
      selectors: {
        accordion: '.filter-modal-inner',
        item: '.filter-group',
        trigger: '.filter-group-top',
        hidden: '.filter-group-hidden',
      },
      classes: {
        opened: 'filter-group_opened',
      },
      defaultOpenIndexes: [0],
      oneOpen: false,
    })
  }

  function toggleFilter() {
    if (page.classList.contains('page_filter-opened')) {
      closeFilter()
    } else {
      openFilter()
    }
  }

  function closeFilter() {
    page.classList.remove('page_filter-opened')
  }

  function openFilter() {
    page.classList.add('page_filter-opened')
  }

  function initRangeSlider(rangeSlider) {
    if (rangeSlider.dataset['max']) {
      let max = +rangeSlider.dataset['max'] || 1,
        min = +rangeSlider.dataset['min'] || 0,
        start = rangeSlider.dataset['start'],
        step = +rangeSlider.dataset['step'] || 1

      if (start) {
        start = start.split(',')
      }

      noUiSlider.create(rangeSlider, {
        start,
        step,
        range: {
          min,
          max
        }
      })
    }
  }
}
