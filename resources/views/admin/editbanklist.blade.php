
@include('admin.includes.sider')


<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit User</title>

    <!-- Bootstrap 5.3.7 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f8ff;
        }
        .edit-card {
            max-width: 550px;
            margin: auto;
            margin-top: 40px;
            padding: 25px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.10);
        }
        .form-label { font-weight: 600; }
        .btn-custom {
               background-color: #343a40;
            color: white;
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="edit-card">
    <h3 class="text-center mb-4">🌸 Banklist updated</h3>
<form  method="post" action="{{route('updatebanklist',$banklist->id)}}" enctype="multipart/form-data">
    @csrf
    
    <div class="mb-3">
        <label class="form-label">title</label>
        <input type="text" class="form-control" name="title" value="{{ $banklist->title }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">image</label>
        <input type="file" class="form-control" name="image"><img src="{{ asset('storage/' . $banklist->image) }}" alt="{{ $banklist->title }}" width="200">
    </div>

    <div class="mb-3">
        <label class="form-label">descrption</label>
        <input type="text" class="form-control" name="description" value="{{ $banklist->description }}" required>
    </div>

    

    <button type="submit" class="btn btn-custom w-100">Update Information</button>
</form>

    </form>
    <!-- Sahi Form Yahin End -->
</div>

</body>
</html>

