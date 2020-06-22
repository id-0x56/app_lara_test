<template>
    <div @mousedown="mouseDown" style="width:100%; height:480px; background: green;"></div>
</template>

<script>
    export default {

        data: function() {
            return {
                item: {
                    x: 0,
                    y: 0,
                    // Date: 0,
                }
            }
        },

        mounted() {
            //
        },

        methods: {
            mouseDown: function(event) {
                this.item.x = event.pageX;
                this.item.y = event.pageY;
                // this.item.Date = Date();

                axios.post('/click', this.item).then(response => {
                    //
                })
            }
        },

    }
</script>
