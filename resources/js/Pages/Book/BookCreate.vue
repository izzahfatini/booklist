<script setup>
    import { useForm } from '@inertiajs/vue3';
    import Toastr from 'vue-toastr'

    const form = useForm({
        name: '',
        genre: '',
        isbn: '',
        author: '',
        description: '',
    });

    const submit = () => {
        form.post(route('books.store'), {
            onFinish: () => {
                form.reset();
            },
        });
    };
</script>

<template>
    <div>
        <h2><strong>Create a New Book</strong></h2>

        <form @submit.prevent="submit">
            <label for="name">Name:</label>
            <input type="text" id="name" v-model="form.name" required> <br>
            <label for="genre">Genre:</label> 
            <input type="text" id="genre" v-model="form.genre" required> <br>
            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" v-model="form.isbn" required> <br>
            <label for="author">Author:</label> 
            <input type="text" id="author" v-model="form.author" required> <br>
            <label for="description">Description:</label> <br>
            <textarea id="description" v-model="form.description" required></textarea> <br>
    
            <button type="submit" :disabled="form.processing">Submit</button>
        </form>

    </div>
</template>
  
<style scoped>
    h2  {
        margin: 5px 10px;
    }

    label   {
        padding: 10px;
    }

    input   {
        padding: 5px;
        margin: 5px;
    }

    button  {
        padding: 5px;
        margin: 10px;
        border: 1px solid black;
        border-radius: 6px;
    }

    textarea   {
        padding: 5px;
        margin: 5px 10px;
        width: 250px;
        height: 100px;
    }
</style>