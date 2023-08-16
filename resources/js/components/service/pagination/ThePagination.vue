<template>
    <div
        class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6"
        v-if="pagination.last_page > 1">
        <div class="flex flex-1 justify-between ">
            <button
                @click.prevent="changePage(prevPage)"
                :disabled="pagination.current_page === 1"
                :class="[ 'relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50']">
                Previous
            </button>
            <button
                :disabled="pagination.current_page === pagination.last_page"
                @click.prevent="changePage(nextPage)"
                :class="[ 'relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50']">
                Next
            </button>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        pagination: {
            type: Object,
            required: true
        },
    },
    computed: {
        pages: function () {
            let pages = [];

            for (let i = this.rangeStart; i <= this.rangeEnd; i++) {
                pages.push(i)
            }

            return pages
        },
        rangeStart: function () {
            let start = this.pagination.current_page - 1

            return (start > 0) ? start : 1
        },
        rangeEnd: function () {
            let end = this.pagination.current_page + 1

            return (end < this.pagination.last_page) ? end : this.pagination.last_page
        },
        nextPage: function () {
            return this.pagination.current_page + 1
        },
        prevPage: function () {
            return this.pagination.current_page - 1
        }
    },
    methods: {
        hasFirst: function () {
            return this.rangeStart !== 1
        },
        hasLast: function () {
            return this.rangeEnd < this.pagination.last_page
        },
        changePage: function (page) {
            this.pagination.current_page = page;
            this.$emit('page-changed', page)
        }
    }
}
</script>
