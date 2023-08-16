<template>
    <div class="bg-gray-100" v-if="articles !== null">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900">Список статей</h2>
            <div class="mx-auto max-w-2xl lg:max-w-none">
                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                    <ArticleBlock :article="article" v-for="article in articles" :key="article.id"/>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import ArticleBlock from "@/components/block/ArticleBlock.vue";

export default {
    components: {ArticleBlock},
    data() {
        return {
            articles: null,
        }
    },
    mounted() {
        this.retrieveArticles()
    },
    methods: {
        retrieveArticles() {
            axios.get('/api/articles/get_articles_in_block', {
                params: {
                    limit: 3,
                    withoutPaginate: true
                }
            }).then(response => {
                this.articles = response.data
            });
        }
    }
}
</script>
