<form action="{{ URL::route('save') }}" method="post">
    @csrf
    <input type="text" name="name" required>
    <select name="status" required>
        <option>active</option>
        <option>in-active</option>
    </select>
    <button>Save</button>
</form>