<div class="container">
    <div class="form-group">
        <label class="form-label" for="email">Tittle: {{ $tittle }}</label>
        <input wire:model="tittle" type="text" class="form-control" id="tittl">
    </div>
    <div class="form-group">
        <label class="form-label" for="email">Description:</label>
        <input wire:model="description" type="text" class="form-control" id="description">
    </div>
    <div class="form-group" wire:ignore id="todo_type_select_box">
        <label class="form-label">Todo Type</label>
        <select wire:model="todoType" class="form-select tom-select form-select-sm mb-3 shadow-none">
            <option selected="">Choose one Item</option>
            @foreach ($todoTypes as $todoType)
                <option value="{{ $todoType->id }}">{{ $todoType->string }}</option>
            @endforeach
        </select>
    </div>
    <button type="button" wire:click="addTodo" class="btn btn-sm float-end btn-primary">Add</button>
    <div class="card mt-2">
        <div class="card-body">
            <ul>
                @forelse ($todos as $todo)
                    <li>{{ $todo->title }} - Type {{ $todo->TodoType->string }}</li>
                @empty
                    <li>No Data</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
