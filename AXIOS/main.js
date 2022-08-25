const app = new Vue ({
    el : '#app',
    data : {
        albums : [],
        selectGenre : '',

    },
    methods : {
        getAlbum : function(){
            let apiUrl = 'http://localhost:8888/ESERCIZI%20PHP/php-ajax-dischi/AXIOS/controller.php'

            if(this.selectGenre != 'genre'){
              apiUrl += '?'
            }
            axios.get(apiUrl)
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