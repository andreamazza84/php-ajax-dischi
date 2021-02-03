let app = new Vue({
    el: '#root',
    data: {
        error: false,
        errorMessage: '',
        albums: [],
        authors: [],
        filterbyauthor: [],
        direction: 'left',
        visible: '',
    },
    // Bonus
    computed: {
        getauthors: function () {
            const authors = this.albums.map(element => {
                return element.author;
            });
            authors.push("All");
            return authors; 
        },
    },
    // /Bonus
    methods:{
        appear: function(){
            if(this.visible === 'active'){
                //reset
                this.visible = '';
                this.direction= 'left';
            }
            else{
                this.visible = 'active';
                this.direction= 'right';
            }
        },
        filter: function(author) {
            this.filterbyauthor = this.albums.filter(element => {
                if (author === 'All') {
                    return element;
                }
                else {
                    return element.author === author;
                }
            });
        }
    },
    mounted(){
        axios
            .get('http://localhost:8880/Esercizi/php-ajax-dischi/Milestone2/db.php', {
                headers: {
                    'Authorization': '*'
                }
            })
        .then(response => {
            const albums = response.data;
            this.albums = albums;
            this.filterbyauthor = albums;
        })
        .catch(error => {
            const errorCode = error.response.status;
            const errorText = error.response.statusText;
            this.error = true;
            this.errorMessage = `Error ${errorCode} Page ${errorText}`
        })
    },
});