import LinkPreview from './LinkPreview.html'

export default {
  
  template: LinkPreview,
  
  data () {
    return {
      newLink: '',
      links: []
    }
  },
  
  methods: {
    upload () {
      let that = this;
      fetch(`/previews?link=${encodeURIComponent(this.newLink)}`)
        .then(function(response) {
          return response.json();
        })
        .then((response) => {
        console.log(response)
        that.links.push(response)
      })
    }
  }
}