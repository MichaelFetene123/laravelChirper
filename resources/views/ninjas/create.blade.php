<x-layout>
   <form action="{{ route('ninjas.store') }}" method='POST'>
         @csrf
    <h2>Create a New Ninja</h2>

    {{-- ninja name --}}
    <label for="name">Ninja Name:</label>
    <input type="text" id="name" name="name"  required value="{{ old('name') }}">

    {{-- ninja strength --}}
    <label for="skill">Ninja Skill (0-100): </label>
    <input type="number" id="skill" name="skill"  required value="{{ old('skill') }}">

    {{-- ninja bio --}}
    <label for="bio">Biography:</label>
    <textarea id="bio" name="bio" required row='5' >{{ old('bio')}}</textarea>

    {{-- select a dojo --}}
    <label for="dojo_id">Dojo:</label>
    <select id="dojo_id" name="dojo_id"  required>
<option value="" disabled selected> Selected a dojo</option>
@foreach ($dojos as $dojo )
    <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id') ? 'selected' : '' }}>{{ $dojo->name }}</option>
    
@endforeach
    </select>

    <button type="submit" class="btn mt-4">Create Ninja</button>

    {{-- validation error --}}
    @if ($errors->any())
<ul class="px-4 py-2 bg-red-100">
    @foreach ($errors->all() as $error )
        <li class="my-2 text-red-500">{{$error}}</li>
    @endforeach
</ul>
    @endif
</form>
</x-layout>