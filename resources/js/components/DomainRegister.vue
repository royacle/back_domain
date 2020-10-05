<template>
    <div class="container">
        <form action="">
            <div class="form-group">
                <label for="category">Select a Category</label>
                <select class="form-control" id="category">
                </select>
            </div>

            <div class="form-group">
                <label for="subcategory">Select a Sub-Category</label>
                <select class="form-control" id="subcategory">
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="you@your-domain.com">
                </div>
                <div class="form-group col-md-6">
                    <label for="domain url">Domain URL</label>
                    <input type="text" class="form-control" placeholder="https://your-domain.com">
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="file" id="img" class="form-control-file">
            </div>
            <div class="form-group">
                    <label for="domain title">Domain Title</label>
                <input type="text" class="form-control" placeholder="Domain title">
            </div>
            <div class="form-group">
                <label for="short description">Short Description</label>
                <input type="text" class="form-control" placeholder="Short description">
            </div>
            <div class="form-group">
                <label for="long description">Long Description</label>
                <vue-editor />
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</template>

<script>
   
    export default {
        props: ['categories', 'subcategories'],
        data(){
            return{
                form: new form({
                    cat_id: '',
                    subcat: '',
                    email: '',
                    title: '',
                    url: '',
                    short: '',
                    long: '',
                })
            }
        }
    }
</script>
