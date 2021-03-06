<div class="modal fade" id="editModal{{$user['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/admin/users/update/{{$user['id']}}">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="id">ID</label>
                        <input class="form-control" type="text" name="id" value="{{$user['id']}}">
                    </div>

                    <div class="form-group">
                        <label for="content">Admin</label>
                        <input class="form-control" type="text" name="is_admin" value="{{$user['is_admin']}}">
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" value="{{$user['name']}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" value="{{$user['email']}}">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-outline-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
