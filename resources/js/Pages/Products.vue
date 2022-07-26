<script setup>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
    import { Head } from '@inertiajs/inertia-vue3';
</script>
<template>
    <BreezeAuthenticatedLayout>
        <Head title="Products"/>

        <!-- 
            TO DO
            Add a searchbar and a resultsarea here
        -->
    </BreezeAuthenticatedLayout>
    
</template>

<script>
export default {
    data() {
        return {
            searchterm:null,
            products:[]
        }
    },
    methods: {
        async getProducts()
        {
            let reqRoute = route('api.products.index') //see routs/api.php

            /**
             * Call the route through axios and don't forget to console.log potential errors from the api
             */
        },
    }
}
</script>