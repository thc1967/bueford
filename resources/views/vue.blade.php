<script>
var v = new Vue({
    el: '#app',

    data: function () {
        return {
            @stack('vue.data')
        }
    },

    computed: {
        @stack('vue.computed')
    },

    methods: {
        @stack('vue.methods')
    },

    created: function () {
        console.log('vue created');
        @stack('vue.created')
    },

    mounted: function () {
        console.log('vue mounted');
        @stack('vue.mounted')
    }
});
</script>