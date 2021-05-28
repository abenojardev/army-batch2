<form action="{{ URL::route('save') }}" method="post">
    @csrf
    <input type="text" name="name" required>
    <select name="status" required>
        <option>active</option>
        <option>in-active</option>
    </select>
    <button>Save</button>
</form>

<hr>

<ol>
    @foreach($data as $x)
        <li>
            {{ $x->name }}
            <small>
                (
                    {{ $x->status }}
                )
            </small>

            <a href="{{ URL::route('delete') }}?id={{ $x->id }}">
                x
            </a>
        </li>
    @endforeach
</ol>