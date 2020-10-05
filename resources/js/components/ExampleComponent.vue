<template>
    <div class="container">
        <h4 v-for="category in this.category">{{ category.categoryname }}</h4>
    </div>
</template>

<script>
    export default {
        props: ['category'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
