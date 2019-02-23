"use strict";

/*==========================================================
debag
===========================================================*/
new Vue({
  el: '#debag',
  data: {
    show: false,
    width: 0,
    height: 0,
    scroll: 0,
    innerHTML: '',
  },
  created: function() {
    window.addEventListener('keydown', this.key)
  },
  methods: {
    debagInfo: function() {
      setInterval(function(){
        this.width = window.innerWidth
        this.height = window.innerHeight
        this.scroll = this.$el.getBoundingClientRect().bottom + window.pageYOffset
        this.innerHTML = `画面サイズ：
                          w: ${this.width}px
                          h: ${this.height}px
                          s: ${this.scroll}px`
       }.bind(this), 100) 
    },
    key: function(e) {
      if (e.keyCode == 65) {
        this.show = !this.show
        this.debagInfo()
      }
    },
  }
})

/*==========================================================
loading
===========================================================*/
new Vue({
  el: "#jsApp--loading",
  data: {
    isLoading: true,
  },
  mounted() {
    setTimeout(() => {
      this.isLoading = false;
    }, 1000);
  }
})
