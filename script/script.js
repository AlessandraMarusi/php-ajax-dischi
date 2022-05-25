const app = new Vue({
    el: '#app',
    data:{
        dischi:[],
        genres:[],
        checkedGenre: '',
        apiPath: './server.php'
    },
    methods:{
        filter(){
            this.getData(this.checkedGenre);
        },
        getData(genre=null){
            let path = this.apiPath;
            if(genre){
              path = `${this.apiPath}?genre=${genre}`;
            }
            axios.get(path).then((res)=>{
                this.dischi = res.data;
                if(this.genres.length < 1){
                    this.dischi.forEach((disco)=>{
                        if(!this.genres.includes(disco.genre)){
                            this.genres.push(disco.genre);
                        }
                    })
                }
            })
        }
    },
    mounted(){
        this.getData();
    }
});