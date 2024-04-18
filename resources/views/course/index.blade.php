@extends('main')
@section('content')
    <h1>Courses</h1>
    <button id="addCourseBtn" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Adicionar Curso</button>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Adicionar Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addForm" action="{{ route('course.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture:</label>
                            <input type="text" name="picture" id="picture" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Role:</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="free">Free</option>
                                <option value="paid">Pago</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" name="price" id="price" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="validate">Validate:</label>
                            <select name="validate" id="validate" class="form-control" required>
                                <option value="lifetime">Vitalício</option>
                                <option value="one_year">1 Ano</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-primary">Add Course</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

     <h2>Course List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                 <th>Price</th>
                <th>Role</th>
                <th>Validate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->description }}</td>
                     <td>{{ $course->price }}</td>
                    <td>{{ $course->role }}</td>
                    <td>{{ $course->validate }}</td>
                    <td>
                        <a href="#" class="edit-course btn btn-info" data-id="{{ $course->id }}">Edit</a>
                        <a href="#" class="delete-course btn btn-danger" data-id="{{ $course->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

     <script>
        $(document).ready(function() {
            $('.modal').on('hidden.bs.modal', function() {
                $(this).find('form')[0].reset();
            });
        });
    </script>
@endsection
