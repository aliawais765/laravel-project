@include('admin.includes.sider')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Table Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .profile-table {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      padding: 30px;
      margin-top: 20px;
      width:100%;
    }
    .table th { background-color: #343a40; color: white; }
    .btn-edit { background-color: #343a40; color: white; width:100px; }
    .btn-edit:hover { background-color: #343a40; }
    .btn-delete { background-color: #6d4145ff; color: white; width:100px; }
    .btn-delete:hover { background-color: #c82333; }
  </style>
</head>
<body>
<div class="container">
  <div class="profile-table">
    <h3 class="mb-4 text-center">Admin Banklist Page</h3>

    @if (session('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
    @endif

    <table class="table table-hover align-middle text-center">
      <thead>
        <tr>
          <th>Title</th>
          <th>Image</th>
          <th>Description</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($banklists as $banklist)
        <tr>
          <td>{{ $banklist->title }}</td>
          <td>{{ $banklist->image }}</td>
          <td>{{ $banklist->description }}</td>
          <td>
            <a href="{{ route('editbanklist', $banklist->id) }}">
              <button class="btn btn-edit btn-sm">Edit</button>
            </a>
          </td>
          <td>
            <form action="{{ route('deletebanklist', $banklist->id) }}" method="post" onsubmit="return confirm('Are you sure?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-delete btn-sm" type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</body>
</html>
