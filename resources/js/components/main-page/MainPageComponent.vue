<template>
  <div>
    <ArticleComponent/>
    <AuthorComponent/>
  </div>
</template>

<script>
import ArticleComponent from './ArticleComponent.vue'
import AuthorComponent from './AuthorComponent.vue'

export default {
  data() {
    return {
      count: 0,
    }
  },
  components: {
    AuthorComponent, ArticleComponent
  }
}
</script>
