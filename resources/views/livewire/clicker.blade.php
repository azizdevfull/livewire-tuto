<div>
    <form wire:submit='createNewUser' action="">
        <input wire:model='name' type="text" name="name">
        <input wire:model='email' type="email" name="email">
        <input wire:model='password' type="password" name="password">
        <button>Create</button>
    </form>
    <hr>

    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach
</div>
