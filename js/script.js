const { createApp } = Vue;

createApp({
    data() {
        return {
            serverUrl: './assets/db/server.php',
            discsInfos : [],
            discsInfosActiveIndex: 0,
            isClickedADisc : false,
        }
    },

    methods: {
        getDiscsInfos() {
            axios.get(this.serverUrl)
                .then(response => {
                    this.discsInfos =response.data;
                })
                .catch(err => {
                    console.log(err);
                })
        },

        showActiveDisc(index){
            this.isClickedADisc = true;
            this.discsInfosActiveIndex = index;
        },

        hideActiveDisc(){
            this.isClickedADisc = false;
        }
    },

    created() {
        this.getDiscsInfos()
    }
}).mount('#app')