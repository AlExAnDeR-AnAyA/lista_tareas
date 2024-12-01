<template>
    <div class="bg-gray-900 text-white p-6 rounded-lg max-w-3xl mx-auto">
      <h1 class="text-3xl font-bold text-center text-purple-500 mb-6">Mis Tareas</h1>
      <ul>
        <li 
          v-for="task in tasks" 
          :key="task.id" 
          class="bg-gray-800 p-4 rounded-lg mb-4 shadow-md hover:shadow-lg transition-shadow duration-300"
        >
          <h2 class="text-xl font-semibold text-purple-400">{{ task.title }}</h2>
          <p class="text-gray-300">{{ task.description }}</p>
          <p class="text-sm text-gray-500 mt-2">Estado: 
            <span :class="{
              'text-yellow-400': task.status === 'pending',
              'text-green-400': task.status === 'completed'
            }">
              {{ task.status }}
            </span>
          </p>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  import axios from "axios";
  
  export default {
    data() {
      return {
        tasks: [],
      };
    },
    async created() {
      try {
        const response = await axios.get("/tasks");
        this.tasks = response.data;
      } catch (error) {
        console.error("Error al cargar tareas:", error.response.data);
      }
    },
  };
  </script>
  