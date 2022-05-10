var app = new Vue({
    el: '#app',
    data: {
        arrayDisk: [],
    },
    created() {
        axios.get('http://localhost/4%20-%20php%20dischi/php-ajax-dischi/milestone2/api/dischi.php')
            .then((res) => {
                console.log(res.data);
                this.arrayDisk = res.data;
        })
    }

})