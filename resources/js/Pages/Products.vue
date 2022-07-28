<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import ProductCard from './ProductCard.vue'


</script>
<template>
  <BreezeAuthenticatedLayout>

    <Head title="Products" />
    <div class="bg-white">
      <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Products</h2>
        <div class="flex justify-center">
          <div class="search-block mb-3">
            <div class="input-group relative flex flex-wrap items-stretch w-full mt-4 mb-4">
              <input type="search" v-model="keyword" style="width: calc(101% - 68px);"
                class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
              <button
                class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                type="button" id="button-addon2">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                  </path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"
          v-if="products.length > 0">
           <ProductCard v-for="(product, productIndex) in products"  :image="product.image !== null ? product.image.src : ''" :title="product.title" :vendor="product.vendor" :created_at="product.created_at"  />
        </div>

        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 text-center" v-else>No Product Available</h2>
      </div>
    </div>

  </BreezeAuthenticatedLayout>

</template>

<script>
import axios from 'axios';
export default {
  name: 'GetProduct',
   components: {
    ProductCard
  },
  data() {
    return {
      keyword: null,
      products: [],
      allproducts: []
    }
  },
  watch: {
    keyword(after, before) {
      this.searchProduct();
    }
  },
  methods: {
    searchProduct() {
      this.products = this.allproducts.filter((product) => {
        return (
          product.title
            .toLowerCase()
            .indexOf(this.keyword.toLowerCase()) != -1
        );
      });
    }
  },
  mounted() {
    let reqRoute = route('api.products.index') //see routs/api.php
    axios
      .get(reqRoute)
      .then(result => {
        this.products = result.data;
        this.allproducts = result.data;
      }).catch(error=>{
        console.log(error);
      })

  },


}
</script>
<style>
.search-block .input-group {
  position: relative;
}

.search-block .input-group .btn {
  position: absolute;
  right: 0px;
  min-height: 38px;
  cursor: inherit;
}

.search-block {
  width: 100%;
}
</style>
