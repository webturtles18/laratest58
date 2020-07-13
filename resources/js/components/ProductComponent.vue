<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Product Component</div>
                    <div class="card-body">
                        <ul id="products">
                            <li v-for="item in products" :key="item.id">
                                {{ item.name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return { products: null }
        },
        mounted() {
            axios.get('/api/products')
                .then(response => {
                    this.products = response.data.data;
                })
        },
    }
</script>
