<template>
    <div class="card mb-3">
        <div class="card-body">
            <p>Categoria: {{ categoryName }}</p>
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">{{ troncateText(50) }}</p>
            <div class="card-body">
                <router-link :to="{name: 'single-post', params: {slug: post.slug} }" class="card-link">Leggi</router-link>
            </div> 
        </div>
    </div>


</template>

<script>

export default {
    name: "PostCard",
    props: {
        post: Object,
    },
    computed: {
        categoryName() {
            return this.post.category ? this.post.category.name : 'nessuna';
        },
    },
    methods: {
        troncateText(maxCharNumber) {
            if (this.post.content.lenght > maxCharNumber) {
                return this.post.content.substr(0, maxCharNumber) + '...';
            }
            return this.post.content;
        },
    },

};


</script>



<style>
</style>