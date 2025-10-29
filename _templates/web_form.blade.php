<form action="" method=''>
    <h2>Create a New Ninja</h2>

    {{-- ninja name --}}
    <label for="name">Ninja Name:</label>
    <input type="text" id="name" name="name" required>

    {{-- ninja strength --}}
    <label for="skill">Ninja Skill (0-100): </label>
    <input class="bg-white" type="text" id="skill" name="skill" required>

    {{-- ninja bio --}}
    <label for="bio">Biography:</label>
    <textarea class="bg-white" id="bio" name="bio" required row='5'></textarea>

    {{-- select a dojo --}}
    <label for="dojo_id">Dojo:</label>
    <select id="dojo_id" name="dojo_id" required>
<option value="" disabled selected> Selected a dojo</option>
    </select>

    <button type="submit" class="btn mt-4">Create Ninja</button>

    {{-- validation error --}}
</form>