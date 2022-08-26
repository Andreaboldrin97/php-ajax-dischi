const app = new Vue ({
    el : '#app',
    data : {
        albums : [],
        selectGenre : '',
        apiUrl : 'http://localhost:8888/ESERCIZI%20PHP/php-ajax-dischi/AXIOS/controller.php',
    },
    methods : {
        getAlbum : function(){
            

            axios.get( this.apiUrl , {params: {genre : this.selectGenre}})
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