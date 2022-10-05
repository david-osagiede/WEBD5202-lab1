@extends ('layouts.main')

@section ('content')
<div class="col-8 pt-1">
        {{-- <h1> Create a post </h1> --}}
         <h1> Publish a Post </h1>
         <hr>

        <form method="POST" action="/posts">

            {{ csrf_field() }}
            {{-- should always include {{ csrf_field() }} in your forms --}}

            <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">body</label>
              <textarea id="body" name="body" class="form-control" required></textarea>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            {{-- @if (count($errors))
          <div class="form-group">

          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error}} </li>
                @endforeach
            </ul>
        </div>
</div>
            @endif --}}
            @include ('layouts.errors')
          </form>


@endsection
