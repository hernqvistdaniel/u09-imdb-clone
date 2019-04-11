@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a Watchlist</div>
                <div class="card-body">
                    <form method="POST" action="{{ action('WatchlistController@saveWatchlist') }}">
                        @csrf

                        <div class="form-group">
                            <label for="watchlist-name-input">Watchlist Name</label>
                            <input id="watchlist-name-input" name="name" type="text" class="form-control"
                                placeholder="Enter Watchlist Name" />
                        </div>

                        {{--
                        <div class="form-group">
                            <label for="review-content-input">Review Content</label>
                            <input id="review-content-input" type="text-area" class="form-control" name="content"
                                placeholder="Write Review Here">
                        </div>

                        <div class="form-group">
                            <label for="rating-input">Film Rating</label>
                            <select class="form-control col-md-2" id="rating-input" name="rating">
                                <option selected>Rating</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        --}}

                        <button type="submit" class="btn btn-success">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
