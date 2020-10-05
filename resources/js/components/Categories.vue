<template>
    <div class="container">
        <div v-for="category in this.category">
            <h4>{{ category.categoryname }}</h4>
            <ul>
                <li v-for="subcat in category.subcategory">{{ subcat.subcategoryname }}</li>
            </ul>
        </div>
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
