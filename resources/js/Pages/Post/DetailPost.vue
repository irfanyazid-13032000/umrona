

<template>
    <Head title="Detail Post" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">halaman detail post</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                 
          
  <form @submit.prevent="form.put(`/posts/${post.id}`)" class="bg-white shadow-md rounded px-8 py-6 max-w-md">
    <h2 class="text-2xl font-bold mb-4">Detail Post</h2>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        title
      </label>
      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter name" v-model="form.title">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        content
      </label>
      <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter email" v-model="form.content"></textarea>
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
  title:props.post.title,
  content:props.post.content,
})

const props = defineProps({
  post: Object
})


</script>
