
const app = new Vue({
    el :'#app',
    data : {
        title:'stronzo',
        discs:[],
        

    },
    methods:{
        fetchData: function(){
            axios.get('./db.php')
            .then(res => {
                this.discs = res.data;
            })
        }

    },
    mounted(){
        this.fetchData()
    }
})