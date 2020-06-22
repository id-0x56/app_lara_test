<template>
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-between">
                <div class="col-auto mr-auto">
                    Coordinates
                </div>
                <div class="col-auto">
                    <button @click="update" class="btn btn-primary btn-sm">Update</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <line-chart :chart-data="data" :height="120" :options="{responsive: true, maintainAspectRatio: true}"></line-chart>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart.js'

    export default {

        components: {
            LineChart
        },

        data: function () {
            return {
                data: [],
            }
        },

        methods: {
            update: function () {
                axios.get('/dashboard/line-chart').then(response => {
                    this.data = response.data
                })
            },
        },

        mounted() {
            this.update()
        },

    }
</script>
