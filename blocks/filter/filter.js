import noUiSlider from 'nouislider'
import AutoNumeric from 'autonumeric'

export default () => {
  const rangeList = document.querySelectorAll('.filter-range')
  const filterModal = document.querySelector('.filter-modal')

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
    const filterToggle = document.querySelector('.catalog__filter-toggle')

    filterModal.classList.add('filter-modal_ready')

    if (filterToggle) {
      filterToggle.addEventListener('click', toggleFilter)
    }
  }

  function toggleFilter() {
    if (filterModal.classList.contains('filter-modal_opened')) {
      closeFilter()
    } else {
      openFilter()
    }
  }

  function closeFilter() {
    filterModal.classList.remove('filter-modal_opened')
  }

  function openFilter() {
    filterModal.classList.add('filter-modal_opened')
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
