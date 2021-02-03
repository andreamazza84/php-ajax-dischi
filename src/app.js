let app = new Vue({
    el: '#root',
    data: {
        error: false,
        errorMessage: '',
        albums: [],
        filterAlbums: [],
        genres: ['Pop', 'Rock', 'Metal', 'Jazz', 'All'],
        visible: '',
        direction: 'left',
    },
    methods: {
        //Al click del mouse, fa apparire e scomparire il menu dei generi musicali
        appear: function () {
            if (this.visible === 'active') {
                //reset
                this.visible = '';
                this.direction = 'left';
            }
            else {
                this.visible = 'active';
                this.direction = 'right';
            }
        },
        //Filtra gli album che corrispondono al genere selezionato 
        filter: function (genre) {
            this.filterAlbums = this.albums.filter(element => {
                if (genre === 'All') {
                    return element;
                }
                else {
                    return element.genre === genre;
                }
            });
        }
    },
    mounted() {
        axios
            .get('https://flynn.boolean.careers/exercises/api/array/music')
            .then(response => {
                const albums = response.data.response;
                this.albums = albums;
                this.filterAlbums = albums;
            })
            .catch(error => {
                const errorCode = error.response.status;
                const errorText = error.response.statusText;
                this.error = true;
                this.errorMessage = `Error ${errorCode} Page ${errorText}`
            })
    },
});