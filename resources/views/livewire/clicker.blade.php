<div>
    {{-- Be like water. --}}
    @if(session('success'))
    <span class="mt-2 ml-2 mb-2 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
        {{ session('success')}}</span>
    @endif
    <form wire:submit.prevent=" CreateNewUser" action="">
        <input type="text" class="block rounded border border-gray-100 px-3 py-1 mb-1 mt-1 ml-2"  wire:model="name" placeholder="name"
        >
        @error('name')
            <span class="text-red-500 text-xs ml-2">{{$message}}</span>
        @enderror

        <input type="email" class="block rounded border border-gray-100 px-3 py-1 mt-1 mb-1 ml-2" wire:model="email" placeholder="email" >
        @error('email')
        <span class="text-red-500 text-xs ml-2">{{$message}}</span>
        @enderror

        <input type="password" class="block rounded border border-gray-100 px-3 py-1 mt-1 mb-1 ml-2" wire:model="password" placeholder="password"
       >
       @error('password')
       <span class="text-red-500 text-xs ml-2">{{$message}}</span>
   @enderror
    <br>
    <button  class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 ml-2 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
        Create new use
    </button>
    </form>
    <br>
    <hr>
    @foreach ($users as $user )
        <h3>{{$user->name}}</h3>
    @endforeach
    </div>
