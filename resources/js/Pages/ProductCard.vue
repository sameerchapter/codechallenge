<!-- ProductCard.vue -->
<script>
import moment from 'moment';

export default {
  props:{  
    title: String,
    image: String,
    created_at: String,
    vendor: String,
  },
  methods: {
  formatDate(value) {
      if (value) {
        return moment(String(value)).format('YYYY.MM.DD')
      }
    },
  }
}
</script>

<template>
 <div class="group relative">
            <div
              class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
         <img v-bind:src="image" alt="Front of men's Basic Tee in black."
                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    <span v-html="title"></span>
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">{{ formatDate(created_at) }}</p>
              </div>
              <p class="text-sm font-medium text-gray-900">{{ vendor }}</p>
            </div>
          </div>
</template>