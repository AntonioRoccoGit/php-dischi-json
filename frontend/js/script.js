const { createApp } = Vue

createApp({
    data() {
        return {
            disks_array: [],
            overlay_show: false,
            item_overlay: Object
        }
    },
    created() {
        axios.
            get("http://localhost/boolean/php-dischi-json/server/json_dischi.php")
            .then(resp => {
                this.disks_array = resp.data;
            });

    },
    methods: {
        handle_overlay(item) {
            this.item_overlay = item;
            this.overlay_show = true;
        }
    }
}).mount('#app')