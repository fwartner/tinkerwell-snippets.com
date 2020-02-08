<template>
    <div>
        <form class="w-full max-w-full">
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="snippet-title">
                        Snippet Title
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="snippet-title" type="text" placeholder="My Awesome Snippet" v-model="snippet.title">
                </div>
            </div>

            <div class="flex flex-wrap mb-2">
                <div class="w-full md:w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="snippet-category">
                        Category
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="snippet-category" v-model="snippet.category_id">
                            <option v-for="category in categories" :value="category.id">{{ category.title }}</option>
                        </select>

                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="snippet-description">
                        Snippet Description
                    </label>
                    <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="snippet-description" placeholder="This snippet does awesome stuff..." v-model="snippet.description"></textarea>
                </div>
            </div>

            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="snippet-code">
                        Snippet Code
                    </label>
                    <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="snippet-code" placeholder="echo 'Hello Tinkerwell!';" v-model="snippet.snippet"></textarea>
                </div>
            </div>

            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-full px-3">
                    <button @click="createSnippet" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded">
                        Submit Snippet
                    </button>
                </div>
            </div>
        </form>
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
            },

            async createSnippet(e) {
                e.preventDefault();
                let self = this;
                await axios.post('/api/snippets', this.snippet)
                    .then(function (response) {
                        Swal.fire({
                            title: 'Hooraay!',
                            text: 'Your snippet has successfully been created',
                            icon: 'success',
                        });
                    })
                    .catch(function (error) {
                        Swal.fire({
                            title: 'Nooraay!',
                            text: 'There was an error',
                            icon: 'error',
                        });
                    });
            }
        }
    }
</script>

<style scoped>

</style>
