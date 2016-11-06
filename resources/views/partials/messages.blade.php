@if (Session::has('success'))

    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Success:</strong> {{ Session::get('success')  }}
    </div>

@endif

@if(count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Errors:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
