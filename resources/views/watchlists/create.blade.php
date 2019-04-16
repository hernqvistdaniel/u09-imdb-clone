@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a Watchlist</div>
                <div class="card-body">
                    <form method="POST" action="/watchlists">
                        @csrf
                        <div class="form-group">
                            <label for="watchlist-name-input">Watchlist Name</label>
                            <input id="watchlist-name-input" name="name" type="text" class="form-control"
                                placeholder="Enter Watchlist Name" />
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        </div>

                        <button type="submit" class="btn btn-success">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
