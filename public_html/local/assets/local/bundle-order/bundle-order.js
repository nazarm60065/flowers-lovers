(()=>{"use strict";var e={p:"/local/assets/"};const t=function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:500;e&&(e.dataset.timeoutId&&clearTimeout(e.dataset.timeoutId),e.style.transitionProperty="height, margin, padding",e.style.transitionDuration=t+"ms",e.style.height=e.scrollHeight+"px",e.scrollHeight,e.style.overflow="hidden",e.style.height=0,e.style.paddingTop=0,e.style.paddingBottom=0,e.style.marginTop=0,e.style.marginBottom=0,e.dataset.timeoutId=window.setTimeout((()=>{e.style.display="none",e.style.removeProperty("height"),e.style.removeProperty("padding-top"),e.style.removeProperty("padding-bottom"),e.style.removeProperty("margin-top"),e.style.removeProperty("margin-bottom"),e.style.removeProperty("overflow"),e.style.removeProperty("transition-duration"),e.style.removeProperty("transition-property")}),t))},s=function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:500;if(e){e.dataset.timeoutId&&clearTimeout(e.dataset.timeoutId),e.style.removeProperty("display");let s=window.getComputedStyle(e).display;"none"===s&&(s="block"),e.style.display=s;let o=e.scrollHeight;e.style.overflow="hidden",e.style.height=0,e.style.paddingTop=0,e.style.paddingBottom=0,e.style.marginTop=0,e.style.marginBottom=0,e.scrollHeight,e.style.transitionProperty="height, margin, padding",e.style.transitionDuration=t+"ms",e.style.height=o+"px",e.style.removeProperty("padding-top"),e.style.removeProperty("padding-bottom"),e.style.removeProperty("margin-top"),e.style.removeProperty("margin-bottom"),e.dataset.timeoutId=window.setTimeout((()=>{e.style.removeProperty("height"),e.style.removeProperty("overflow"),e.style.removeProperty("transition-duration"),e.style.removeProperty("transition-property")}),t)}};class o{constructor(e){this.params={selectors:{accordion:".accordion",item:".accordion-item",trigger:".accordion__trigger",hidden:".accordion-hidden"},classes:{opened:"accordion-hidden_opened",initialItem:""},transitionDuration:300,defaultOpenIndexes:[],oneOpen:!0,hideOnStart:!0,closeOnBlur:!1,onExpand:null,onCollapse:null,_active:!0,...e},this.init()}init(){this.selectors=this.params.selectors,this.classes=this.params.classes,this.openDefaultItemByIndex=this.openDefaultItemByIndex.bind(this),this.openDefaultItemByClass=this.openDefaultItemByClass.bind(this),this.initAccordion()}initAccordion(){this.accordion=document.querySelector(this.selectors.accordion),this.accordion&&(this.hiddenList=this.accordion.querySelectorAll(this.selectors.hidden),this.itemList=this.accordion.querySelectorAll(this.selectors.item),this.params._active=!0,this.attachEvents(),this.params.hideOnStart&&this.hiddenList.forEach((e=>e.style.display="none")),this.checkDefault())}hideAll(){this.itemList.forEach((e=>this.collapse(e)))}openAll(){this.itemList.forEach((e=>this.expand(e)))}attachEvents(){this.accordion.addEventListener("click",this.accordionClickHandler.bind(this)),this.params.closeOnBlur&&document.addEventListener("click",this.documentClick.bind(this)),this.params.oneOpen&&document.addEventListener("accordion.closeAll",this.closeAllHandler.bind(this))}checkDefault(){this.params.defaultOpenIndexes?this.params.defaultOpenIndexes.forEach(this.openDefaultItemByIndex):this.params.classes.initialItem&&this.openDefaultItemByClass()}openDefaultItemByIndex(e){this.expand(this.itemList[e])}openDefaultItemByClass(){const e=Array.prototype.find.call(this.itemList,(e=>e.classList.contains(this.params.classes.initialItem)));e&&this.expand(e)}accordionClickHandler(e){if(this.params._active){let t=e.target.closest(this.selectors.trigger);if(t){let e=t.closest(this.selectors.item);e.classList.contains(this.classes.opened)?this.collapse(e):(this.params.oneOpen&&document.dispatchEvent(new Event("accordion.closeAll")),this.expand(e))}}}documentClick(e){if(this.params._active){if(!e.target.closest(this.selectors.item)){let e=this.accordion.querySelectorAll("."+this.classes.opened);e&&this.collapse(e)}}}expand(e){let t=e.querySelector(this.selectors.hidden);t&&s(t,this.params.transitionDuration),e.classList.add(this.classes.opened),this.params.onExpand&&"function"==typeof this.params.onExpand&&this.params.onExpand(e)}collapse(e){let s=e.querySelector(this.selectors.hidden);s&&t(s,this.params.transitionDuration),e.classList.remove(this.classes.opened),this.params.onCollapse&&"function"==typeof this.params.onCollapse&&this.params.onCollapse(e)}destroy(){this.params._active=!1,this.hiddenList.forEach((e=>e.style.display="")),this.itemList.forEach((e=>e.classList.remove(this.classes.opened)))}closeAllHandler(){this.itemList.forEach((e=>this.collapse(e)))}}e.p;class i{constructor(e){this.params={selectors:{dropdown:".dropdown",current:".dropdown-current",currentText:".dropdown-current__text",value:".dropdown__value"},defaultCurrentText:"Выберите элемент",animationSpeed:400,oneOpen:!1,multiple:!1,_active:!0,classes:{dropdownExpand:"dropdown_expand",dropdownHasValue:"dropdown_has-value",valueSelected:"dropdown__value_selected",valueDisabled:"dropdown__value_disabled",disabled:"dropdown_disabled"},onInit:!1,onOpen:!1,onClose:!1,onChange:!1,...e},this.init()}init(){this.selectors=this.params.selectors,this.classes=this.params.classes,this.dropdown="object"==typeof this.selectors.dropdown?this.selectors.dropdown:document.querySelector(this.selectors.dropdown),this.params.onInit&&"function"==typeof this.params.onInit&&this.params.onInit(this.dropdown),this.attachEvents()}attachEvents(){this.dropdown.addEventListener("click",this.dropdownClickHandler.bind(this)),this.params.oneOpen&&(document.addEventListener("click",this.documentClickHandler.bind(this)),document.addEventListener("dropdown.collapseAll",this.dropdownCollapseAll.bind(this)))}currentClickHandler(e){this.dropdown.classList.contains(this.classes.disabled)||this.listToggle(this.dropdown)}listToggle(e){this.params._active&&(e.classList.contains(this.classes.dropdownExpand)?this.dropdownCollapse(e):(this.params.oneOpen&&this.dropdownCollapseAll(),this.dropdownExpand(e)))}dropdownExpand(e){e.classList.add(this.classes.dropdownExpand),this.params.onOpen&&"function"==typeof this.params.onOpen&&this.params.onOpen(e)}dropdownCollapse(e){e.classList.remove(this.classes.dropdownExpand),this.params.onClose&&"function"==typeof this.params.onClose&&this.params.onClose(e)}dropdownCollapseAll(){this.dropdownCollapse(this.dropdown)}valueClickHandler(e){if(!e.classList.contains(this.classes.valueDisabled)){const t=e.dataset.value;let s=this.dropdown.querySelector("."+this.classes.valueSelected),o=this.dropdown.querySelector(this.selectors.currentText);t?(this.dropdown.classList.add(this.classes.dropdownHasValue),this.setCurrentValue(o,t)):this.dropdown.classList.remove(this.classes.dropdownHasValue),s&&s.classList.remove(this.classes.valueSelected),e.classList.add(this.classes.valueSelected),this.params.onChange&&"function"==typeof this.params.onChange&&this.params.onChange(e,this.dropdown),this.params.multiple||this.dropdownCollapse(this.dropdown)}}dropdownClickHandler(e){if(this.params._active){let t=e.target,s=t.closest(this.selectors.current);if(s)return this.currentClickHandler(s),!0;let o=t.closest(this.selectors.value);if(o)return this.valueClickHandler(o),!0}}setCurrentValue(e,t){e.innerText=t||this.params.defaultCurrentText}documentClickHandler(e){if(this.params._active){e.target.closest("."+this.classes.dropdownExpand)||document.dispatchEvent(new Event("dropdown.collapseAll"))}}dropdownReset(){let e=this.dropdown.querySelector("."+this.classes.valueSelected),t=this.dropdown.querySelector(this.selectors.currentText);e.length&&(e.classList.remove(this.classes.valueSelected),this.setCurrentValue(t))}}document.addEventListener("DOMContentLoaded",(()=>{const e=document.querySelectorAll(".dropdown");new o({selectors:{accordion:".order-wrapper",item:".order-section-accordion",trigger:".order-section-top",hidden:".order-section-hidden"},classes:{opened:"order-section_opened"},defaultOpenIndexes:[0],oneOpen:!1}),e.length&&e.forEach((e=>{new i({selectors:{dropdown:e,current:".order-props-dropdown-current",currentText:".order-props-dropdown-current__text",value:".order-props-dropdown-item__value"},oneOpen:!0,onChange:(e,t)=>{const s=t.closest(".order-props-group");if(s){const t=s.querySelector("input.order-props__control");if(t){const s=e.dataset.value;t.value=s}}}})}))}))})();