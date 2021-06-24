const app = new Vue({
    el: '#app',

    data:{
        dischi: null,
        genereMusicale: 'All',
    },

    mounted(){
        axios.get('./api/dischi.php')
        .then(resp => {
            this.dischi = resp.data
            //console.log(this.dischi);
        }).catch(e =>{
            console.log(e);
        })
    },

    
    computed:{
        categoria(){
            if (this.genereMusicale === 'All'){
                return this.dischi
            }else{
                return this.dischi.filter(dischi => {
                    return dischi.genre === this.genereMusicale
                })
            }
        }
    }

})