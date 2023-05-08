const { createApp } = Vue

createApp({
    data() {
        return {
            disk_array: [],
        }
    },
    created() {
        axios.
            get("http://localhost/boolean/php-dischi-json/server/json_dischi.php")
            .then(resp => {
                this.disk_array = resp.data;
            });

    }
}).mount('#app')