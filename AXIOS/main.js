const app = new Vue ({
    el : '#app',
    data : {
        albums : [],
        selectArtist : '',

    },
    methods : {
        getAlbum : function(){
            axios.get('http://localhost:8888/ESERCIZI%20PHP/php-ajax-dischi/AXIOS/controller.php')
            .then((element) => {
                this.albums= element.data
                console.log(this.albums)
            })
        }
    },
    created(){
        this.getAlbum()
      }
    
})