<template>
  <form @submit.prevent="saveTask" class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-md mx-auto">
    <div class="mb-4">
      <input 
        v-model="task.title" 
        placeholder="Título" 
        required 
        class="w-full p-3 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
      />
    </div>
    <div class="mb-4">
      <textarea 
        v-model="task.description" 
        placeholder="Descripción" 
        class="w-full p-3 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
      ></textarea>
    </div>
    <div class="mb-4">
      <select 
        v-model="task.status" 
        class="w-full p-3 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
      >
        <option value="pending">Pendiente</option>
        <option value="completed">Completada</option>
      </select>
    </div>
    <button 
      type="submit" 
      class="w-full py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition duration-300"
    >
      Guardar
    </button>
  </form>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      task: {
        title: "",
        description: "",
        status: "pending",
      },
    };
  },
  methods: {
    async saveTask() {
      try {
        const response = await axios.post("/tasks", this.task);
        alert("Tarea creada con éxito!");
      } catch (error) {
        console.error("Error al crear tarea:", error.response.data);
      }
    },
  },
};
</script>
