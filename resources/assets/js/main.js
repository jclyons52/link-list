import Vue from "vue"
import VueResource from "vue-resource"
import LinkPreview from "./components/LinkPreview/LinkPreview"

Vue.use(VueResource)

new Vue({
  el: "body",
  
  components: {
    LinkPreview
  }
});