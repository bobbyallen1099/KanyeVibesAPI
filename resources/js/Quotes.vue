<template>
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="bg-gray-800 p-6" v-for="(quote, index) in data" :key="index">
            <div class="flex justify-start items-center">
                <svg width="30" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"><path fill="#ffffff" d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/></svg>
                <div class="ml-4">
                    <div class="text-gray-400 text-sm">{{quote}}</div>
                    <div class="text-gray-600 text-sm">- Kayne West</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "quotes",
    props: {
        data: Array
    },
    mounted() {

    }
}
</script>
