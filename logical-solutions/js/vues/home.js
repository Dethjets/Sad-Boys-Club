module.exports = {
  data: {
    stepsSlideNumber: 1,
    productSlideNumber: 1,
    industrySlideNumber: 1,
    caseSlideNumber: 1,
  },
  methods: {
    showSlide: function(slideName, slideNum) {
      this[slideName + 'SlideNumber'] = slideNum
    }
  }
}