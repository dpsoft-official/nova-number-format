Nova.booting((Vue, router, store) => {
  Vue.component('index-number-format', require('./components/IndexField'))
  Vue.component('detail-number-format', require('./components/DetailField'))
  Vue.component('form-number-format', require('./components/FormField'))
})
