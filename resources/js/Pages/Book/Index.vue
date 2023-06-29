<template>
  <div>
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Name</th>
          <th>Genre</th>
          <th>ISBN</th>
          <th>Author</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="book in books" :key="book.id" @click="openModal(book)" class="row" :class="{ 'row-hover': hoveredRow === book.id }"
            @mouseover="hoveredRow = book.id" @mouseout="hoveredRow = null">
          <td>{{ book.name }}</td>
          <td>{{ book.genre }}</td>
          <td>{{ book.isbn }}</td>
          <td>{{ book.author }}</td>
        </tr>
      </tbody>
    </table>

    <div v-if="modalOpen" class="modal-overlay" @click="closeModal">
      <div class="modal-container" @click.stop>
        <div v-if="selectedBook">
          <h2><strong>{{ selectedBook.name }}</strong></h2> <br>
          <p><em>Description:</em> <br>{{ selectedBook.description }}</p>
        </div>
        <div class="cancel-container">
          <button class="cancel-button" @click="cancel">Close</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';

export default {
  props: {
    books: {
      type: Array,
      required: true
    }
  },
  setup() {
    const modalOpen = ref(false);
    const selectedBook = ref(null);
    const hoveredRow = ref(null);

    const openModal = (book) => {
      selectedBook.value = book;
      modalOpen.value = true;
    };

    const closeModal = () => {
      selectedBook.value = null;
      modalOpen.value = false;
    };

    const cancel = () => {
      closeModal();
    };

    return {
      modalOpen,
      selectedBook,
      openModal,
      closeModal,
      cancel,
      hoveredRow
    };
  }
};
</script>

<style scoped>
table,
tr,
td {
  border: 1px solid #ccc;
}

.row-hover {
  background-color: #f5f5f5;
  cursor: pointer;
}

.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-container {
  background-color: #fff;
  padding: 20px;
  max-width: 400px;
}

.cancel-container {
  display: flex;
  justify-content: flex-end;
}

.cancel-button {
  border: 1px solid black;
  padding: 2.5px 5px;
  cursor: pointer;
  border-radius: 6px;
}
</style>
