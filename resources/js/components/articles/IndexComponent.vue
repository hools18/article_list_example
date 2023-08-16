<template>
    <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900">Список статей</h2>
            <div class="mx-auto max-w-2xl lg:max-w-none">
                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                    <ArticleBlock :article="article" v-for="article in articles" :key="article.id"/>
                </div>
            </div>
            <ThePagination :pagination="pagination" @page-changed="retrieveArticles"/>
        </div>
    </div>
</template>

<script>

import {defineComponent} from "vue";
import ArticleBlock from "@/components/block/ArticleBlock.vue";
import ThePagination from "@/components/service/pagination/ThePagination.vue";

export default defineComponent({
    components: {ThePagination, ArticleBlock},
    data() {
        return {
            articles: null,
            pagination: false,
        }
    },
    mounted() {
        this.retrieveArticles()
    },
    methods: {
        retrieveArticles(page = 1) {
            axios.get('/api/articles', {
                params: {
                    page: page
                }
            }).then(response => {
                this.articles = response.data.data[0]
                this.pagination = response.data.meta

            });
        }
    }
})
</script>
