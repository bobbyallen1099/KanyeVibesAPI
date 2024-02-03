<template>
    <div class="flex flex-col justify-center">
        <Quotes :data="quotes" v-if="quotes" />

        <button :class="{'text-white text-center m- p-3 bg-indigo-700 rounded': true, 'bg-indigo-500 cursor-not-allowed': loading}" @click="fetchQuotes(true)" >
            <template v-if="!loading">
                ✨ Refresh The Vibe ✨
            </template>
            <template v-else>
                ✨ Getting the vibe, please wait... ✨
            </template>
        </button>
    </div>
</template>

<script>
import Quotes from "./Quotes.vue";
import axios from 'axios'
export default {
    name: "App",
    components: {Quotes},
    data: function() {
        return {
            quotes: null,
            loading: true,
        }
    },
    methods: {
        fetchQuotes(refresh = false){
            this.loading = true;
            axios
                .post('/api/quotes', {refresh: refresh})
                .then(response => {
                    this.quotes = response.data;
                    this.loading = false
                 })
        }
    },
    mounted() {
        this.fetchQuotes();
    }
}
</script>
