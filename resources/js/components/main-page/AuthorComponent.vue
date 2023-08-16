<template>
  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
      <div class="max-w-2xl">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Список авторов</h2>
      </div>
      <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
        <li v-for="author in authors">
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full"
                 :src="author.avatar"
                 alt="">
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{
                      author.full_name
                  }}</h3>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
        authors: [],
    }
  },
  mounted() {
      axios.get('/api/authors/get_authors_in_block')
          .then((response)=> {
              this.authors = response.data
          })
  }
}
</script>
