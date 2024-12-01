@extends("layouts.app")

@section("content")

<nav class="flex p-4 bg-black">
    <router-link to="/form" 
        class="text-xl text-purple-500 mx-3 p-2 hover:text-white hover:font-bold transition-colors duration-300"
        active-class="font-bold"
        exact
    >Agregar Tarea</router-link>
    
    <router-link to="/lists" 
        class="text-xl text-purple-500 mx-3 p-2 hover:text-white hover:font-bold transition-colors duration-300"
        active-class="font-bold"
        exact
    >Lista</router-link>
</nav>


<div class="flex justify-center mt-14 bg-gray-900 p-6 rounded-lg shadow-lg">
    <router-view></router-view>
</div>

@endsection
