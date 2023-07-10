

<template>
    <Head title="User" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">halaman create user</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                 
          
  <form @submit.prevent="form.post('/users')" class="bg-white shadow-md rounded px-8 py-6 max-w-md">
    <h2 class="text-2xl font-bold mb-4">Create Account</h2>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Name
      </label>
      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter name" v-model="form.name">
      <div class="text-red-500  mt-1" v-if="form.errors.name">{{form.errors.name}}</div>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter email" v-model="form.email">
      <div class="text-red-500 mt-1" v-if="form.errors.email">{{form.errors.email}}</div>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter password" v-model="form.password">
      <div class="text-red-500 mt-1" v-if="form.errors.password">{{form.errors.password}}</div>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 hover:bg-gradient-to-r hover:from-pink-500 hover:via-purple-500 hover:to-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Add User
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
  name:'',
  email:'',
  password:''
})

defineProps({
  users: Object
})


</script>
