@extends('layouts.main')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Mahasiswa</h1>
  </div>

  <div class="table-responsive col-lg-10">
    <a href="{{ url('dashboard/tourism-objects/create') }}" class="btn btn-primary mb-3">
      <span data-feather="plus"></span>
      Spk Mahasiswa
    </a>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class="text-center">#</th>
          <th scope="col" class="text-center">Name</th>
          <th scope="col" class="text-center">Address</th>
          <th scope="col" class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        @if ($objects->count())
          @foreach ($objects as $object)
            <tr>
              {{-- $loop->iteraion => nomor / urutan loop keberapa nya --}}
              <td class="text-center">{{ $loop->iteration }}</td>
              <td class="text-center">{{ $object->name }}</td>
              <td class="text-center">{{ $object->address }}</td>
              <td class="text-center">
                <a href="{{ url('dashboard/tourism-objects', $object->id) }}/edit" class="btn btn-warning">
                  <span data-feather="edit">edit</span>
                </a>
                <form action="{{ url('dashboard/tourism-objects/'. $object->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                            <button type="submit" class="btn btn-warning">Hapus</button>
                <!-- <form action="{{ url('dashboard/tourism-objects'. $object->id) }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf

                  <span role="button" class="btn btn-danger" data-object="tourism object">
                    <span data-feather="x-circle">Hapus</span>
                  </span> -->
                </form>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td colspan="4" class="text-danger text-center p-4">
              <h4>You haven't create any tourism objects yet</h4>
            </td>
          </tr>
        @endif
      </tbody>
    </table>
  </div>
@endsection