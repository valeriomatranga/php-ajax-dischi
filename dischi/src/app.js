const app = new Vue({
    el: '#app',

    data:{
        dischi: null
    },

    mounted(){
        axios.get('./api/dischi.php')
        .then(resp => {
            this.dischi = resp.data
            //console.log(this.dischi);
        }).catch(e =>{
            console.log(e);
        })
    }
})