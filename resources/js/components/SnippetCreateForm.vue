<template>
    <div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                snippet: {},
                categories: []
            }
        },

        mounted() {
            this.getCategories();
        },

        methods: {
            async getCategories() {
                let self = this;
                await axios.get('/api/categories')
                    .then(function (response) {
                        self.categories = response.data.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>

<style scoped>

</style>
