@extends('layouts.admin')

@section('content')
<form method="POST" action="{{ route('user.update', $user->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- User ID -->
    <div class="form-group">
        <label for="id" class="col-md-4 control-label">UserCode</label>
        <div class="col-md-6">
            <input id="id" type="text" class="form-control" name="id" value="{{ $user->id }}" readonly autofocus>
        </div>
    </div>

    <!-- User Name -->
    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Name</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" readonly autofocus>
        </div>
    </div>

    <!-- Email Address -->
    <div class="form-group">
        <label for="email" class="col-md-4 control-label">Email</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
        </div>
    </div>

    <!-- Roles -->
    <div class="form-group">
        <label for="roles" class="col-md-4 control-label">Roles</label>

        <div class="col-md-6">
            <select id="role" class="form-control" name="role">
                @foreach($roles as $role)
                <option value="{{ $role }}" {{ $role == $userRole ? 'selected' : '' }}>{{ $role }}</option>
                @endforeach
            </select>

        </div>
    </div>

    <!-- Submit Button -->
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Update
            </button>
            <a href="{{ route('user.index') }}"><input type="Button" class="btn btn-primary btn-send" value="Kembali"></a>
        </div>
    </div>
</form>
@endsection