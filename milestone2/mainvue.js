
Vue.config.devtools = true;

var app = new Vue(
    {
        el: '#root',
        data: {
            dischi: []
        },
        methods: {
            
        },
        mounted() {
            axios.get("http://localhost/php-ajax-dischi/milestone2/dischi.php").then((resp) => {
                this.dischi = resp.data;
                console.log(this.dischi);
            })
        }
    }
);
