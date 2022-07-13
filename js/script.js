const app = new Vue({
    el: '#app',
    data: {
        cards: [],
        genres: [],
        query: 'all',
    },
    created() {
        this.getCards();
        setTimeout(() => {
            this.cards.forEach(element => {
                if (!this.genres.includes(element.genre)) {  
                    this.genres.push(element.genre);  
                }
            });
            
        }, 1000);
    },
    watch: {
    },
    methods: {
        getCards() {
            const params = {
            query: this.query,
        }
            axios
        .get('http://localhost/php-ajax-dischi/server/controller.php', {params})
        .then((result) => {
            this.cards = result.data.response;
            })
        .catch((err) => {
                console.log(err);
        });
        } 
    }
});