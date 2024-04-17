@extends('main')
@section('content')
    <h1>Courses</h1>
    <button id="addCourseBtn">Add New Course</button>

    <!-- Add Course Modal -->
    <div id="addModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add New Course</h2>
            <form id="addForm" action="{{ route('courses.store') }}" method="post">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div>
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" required></textarea>
                </div>
                <div>
                    <label for="picture">Picture:</label>
                    <input type="text" name="picture" id="picture" required>
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price" required>
                </div>
                <div>
                    <label for="role">Role:</label>
                    <select name="role" id="role" required>
                        <option value="free">Free</option>
                        <option value="paid">Paid</option>
                    </select>
                </div>
                <div>
                    <label for="validate">Validate:</label>
                    <select name="validate" id="validate" required>
                        <option value="lifetime">Lifetime</option>
                        <option value="one_year">One Year</option>
                    </select>
                </div>
                <div>
                    <button type="submit">Add Course</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Course List -->
    <h2>Course List</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Picture</th>
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
                    <td>{{ $course->picture }}</td>
                    <td>{{ $course->price }}</td>
                    <td>{{ $course->role }}</td>
                    <td>{{ $course->validate }}</td>
                    <td>
                        <a href="#" class="edit-course" data-id="{{ $course->id }}">Edit</a> |
                        <a href="#" class="delete-course" data-id="{{ $course->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Script for modals and actions -->
    <script>
        // Get the modals
        var addModal = document.getElementById("addModal");
        var editModal = document.getElementById("editModal");
        var deleteModal = document.getElementById("deleteModal");

        // Get the buttons that opens the modals
        var addBtn = document.getElementById("addCourseBtn");

        // Get the <span> elements that closes the modals
        var spans = document.getElementsByClassName("close");

        // When the user clicks on <span> (x), close the modal
        for (var i = 0; i < spans.length; i++) {
            spans[i].onclick = function() {
                addModal.style.display = "none";
                editModal.style.display = "none";
                deleteModal.style.display = "none";
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == addModal || event.target == editModal || event.target == deleteModal) {
                addModal.style.display = "none";
                editModal.style.display = "none";
                deleteModal.style.display = "none";
            }
        }

        // Add course modal
        addBtn.onclick = function() {
            addModal.style.display = "block";
        }

        // Edit course modal
        var editLinks = document.querySelectorAll('.edit-course');
        editLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var courseId = link.getAttribute('data-id');
                var editForm = document.getElementById('editForm');
                editForm.action = editForm.action.replace(':id', courseId);
                // Populate fields here if needed
                editModal.style.display = "block";
            });
        });

        // Delete course modal
        var deleteLinks = document.querySelectorAll('.delete-course');
        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var courseId = link.getAttribute('data-id');
                var deleteForm = document.getElementById('deleteForm');
                deleteForm.action = deleteForm.action.replace(':id', courseId);
                deleteModal.style.display = "block";
            });
        });
    </script>
@endsection
