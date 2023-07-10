

<template>
    <Head title="Posts" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Halaman Posts</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                 <Link href="posts/create" class="mt-2 bg-purple-700 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded ml-2">
                    Create Post
                  </Link>
               
                   <table class="mt-3 min-w-full bg-white border border-gray-300">
                        <tr>
                          <th class="py-2 px-4 border-b">Title</th>
                          <th class="py-2 px-4 border-b">Content</th>
                          <th class="py-2 px-4 border-b">Action</th>
                        </tr>
                        <tr v-for="post in posts.data" :key="post.id">
                          <td class="py-2 px-4 border-b text-center">{{post.title}}</td>
                          <td class="py-2 px-4 border-b text-center">{{post.content}}</td>
                          <td class="py-2 px-4 border-b text-center">
                            <Link :href="`/posts/${post.id}/edit`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                              Edit
                            </Link>
                            <Link :href="`/posts/${post.id}/detail`" class="hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2" style="background-color: rgb(99 102 241);">
                              Detail
                            </Link>
                            
                            <Link :href="`/posts/${post.id}`" method="delete" onclick="return confirm('are you sure?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                              Delete
                            </Link>
                          </td>
                        </tr>
                       
                      </table>

                      <Pagination :data="posts"/>

            </div>
        </div>
    </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import Pagination from '@/components/Pagination.vue'


defineProps({
  posts: Object
})


</script>
