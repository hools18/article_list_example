<template>
  <div class="bg-gray-100" v-if="articles !== null">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl font-bold text-gray-900">Список статей</h2>
      <div class="mx-auto max-w-2xl lg:max-w-none">
        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">

          <div class="group relative" v-for="article in articles" :key="article.id">
            <div
                class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
              <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg"
                   alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                   class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">{{ article.name }}</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
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
      axios.get('/api/articles', {
        params: {
          limit: 3,
        }
      }).then(response => {
        this.articles = response.data
      });
    }
  }
}
</script>
