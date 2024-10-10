<div>
    {{-- Be like water. --}}
    <form wire:submit.prevent=" CreateNewUser">
        <input type="text" wire:model="name" placeholder="name"
        style="margin: 20px;">
        <input type="email" wire:model="email" placeholder="email" style="margin: 20px;">
        <input type="password" wire:model="password" placeholder="password"
        style="margin: 20px;">
    <br>
    <button style=" background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; margin-top: 60px;">
        Create new use
    </button>
    </form>
    <br>
    <hr>
    @foreach ($users as $user )
        <h3>{{$user->name}}</h3>
    @endforeach
    </div>
