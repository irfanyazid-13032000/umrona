<template>
    <Head title="User" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">create post</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                 
          
  <form @submit.prevent="form.post('/posts')" class="bg-white shadow-md rounded px-8 py-6 max-w-md">
    <h2 class="text-2xl font-bold mb-4">Create Post</h2>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
        title
      </label>
      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter title" v-model="form.title">
      <div class="text-red-500  mt-1" v-if="form.errors.title">{{form.errors.title}}</div>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        content
      </label>
      <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="form.content"></textarea>
      <div class="text-red-500 mt-1" v-if="form.errors.content">{{form.errors.content}}</div>
    </div>
   
    <div class="flex items-center justify-between">
      <button class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 hover:bg-gradient-to-r hover:from-pink-500 hover:via-purple-500 hover:to-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Add Post
      </button>
    </div>
  </form>

            </div>
        </div>
    </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link,useForm } from '@inertiajs/vue3';

const form = useForm({
  title:'',
  content:'',
})

defineProps({
  posts: Object
})


</script>
