@extends('layouts.app')
@section('title', 'Liste des utilisateurs')
@section('content')
    <div class="users-section mt-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Liste des utilisateurs
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped mb-3">
                            <thead>
                                <tr class="text-nowrap">
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $key => $user)
                                    @php
                                        $rowNumber = ($users->currentPage() - 1) * $users->perPage() + $loop->index + 1;
                                    @endphp
                                    <tr>
                                        <th scope="row">{{ $rowNumber }}</th>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            @if ($user->status == 'ACTIVE')
                                                <button type="button" class="btn btn-sm btn-success rounded">Active</button>
                                            @else
                                                <button type="button" class="btn btn-sm btn-danger">Inactive</button>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-primary rounded-circle px-2 py-1" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#editUserModal{{ $user->id }}">
                                                <i class="bi bi-pencil-fill text-white"></i>
                                            </a>
                                            <a class="btn btn-danger rounded-circle px-2 py-1" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#deleteUserModal{{ $user->id }}">
                                                <i class="bi bi-trash-fill text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @include('dashboard.user.edit')
                                    @include('dashboard.user.delete')
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-danger"><em>Il n'y a aucun
                                                enregistrement</em></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $users->appends(request()->all())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
