<template>
    <div>
        {{ client }}
        <button @click="createToken">Create Token</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tokenData: {
                    client_name: 'fake',
                },
                client: {}
            }
        },

        methods: {
            createToken() {
                let self = this;
                axios.post('/api/clients', this.tokenData)
                    .then(response => {
                        self.client = response.data.data;
                    })
                    .catch (response => {
                        // List errors on response...
                    });
            }
        }
    }
</script>

<style scoped>

</style>
