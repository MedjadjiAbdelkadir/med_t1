<div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="{{ route('dashboard.users.update', 'test') }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" id="id" name="id" class="form-control" value="{{ $user->id }}">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Modifier le profil utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 form-group mb-2">
                            <label for="first_name">Prénom</label>
                            <input type="text" autofocus
                                class="form-control  @error('first_name') is-invalid @enderror" id="first_name"
                                name="first_name" value="{{ $user->first_name }}">
                            @error('first_name')
                                <small class="text-danger d-block">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-sm-12 col-md-6 form-group mb-2">
                            <label for="last_name">Nom</label>
                            <input type="text" class="form-control  @error('last_name') is-invalid @enderror"
                                id="last_name" name="last_name" value="{{ $user->last_name }}">
                            @error('last_name')
                                <small class="text-danger d-block">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-sm-12 col-md-6 form-group mb-2">
                            <label for="email">Email</label>
                            <input type="text" class="form-control  @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ $user->email }}">
                            @error('email')
                                <small class="text-danger d-block">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-sm-12 col-md-6 form-group mb-2">
                            <label for="phone">Téléphone</label>
                            <input type="text" class="form-control  @error('phone') is-invalid @enderror"
                                id="phone" name="phone" value="{{ $user->phone }}">
                            @error('phone')
                                <small class="text-danger d-block">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="col-sm-12 col-md-6 form-group mb-2">
                            <label for="status">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" name="status"
                                value="{{ $user->status }}">
                                <option value="ACTIVE" {{ $user->status == 'ACTIVE' ? 'selected' : '' }}>Active
                                </option>
                                <option value="INACTIVE" {{ $user->status == 'INACTIVE' ? 'selected' : '' }}>Inactive
                                </option>
                            </select>
                            @error('status')
                                <small class="text-danger d-block">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </div>
        </form>
    </div>
</div>
