<template>
  <div>
      <ul>
          <li v-for="book in books" :key="book.id">
              {{ book.name }}
          </li>
      </ul>
  </div>
</template>

<script>
export default {
  props: {
      books: {
          type: Array,
          required: true
      }
  }
};
</script>

  
  