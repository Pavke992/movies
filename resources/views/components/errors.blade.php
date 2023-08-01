@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errosrs->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif
