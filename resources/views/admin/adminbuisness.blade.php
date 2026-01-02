
@include('admin.includes.sider')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Table Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .profile-table {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      padding: 30px;
      margin-top: 20px;
      margin-right:75px;
    }
    .table th {
      background-color: #343a40;
      color: white;
    }
    .btn-edit {
      background-color: #343a40;
      color: white;
      width:100px;
      margin-left:20px;
   
    }
    .btn-edit:hover {
      background-color: #343a40;
    }
    .btn-delete {
      background-color: #6d4145ff;
      color: white;
      margin-left:100px;
      margin-top:-60px;
        width:20%;
        height:31px;
    }
    .btn-delete:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="profile-table">
    <h3 class="mb-4 text-center">Buisness-loan</h3>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
  @endif
    <table class="table table-hover align-middle text-center">
      <thead>
        <tr>
          <th>bank</th>
          <th>amount</th>
          <th>tenure/years</th>
          <th>interest</th>
          <th>type</th>
          <th>notes</th>
        </tr>
      </thead>
      <tbody>
        <tr>
           @foreach($bankloans as $item)
          @foreach($item->bankloan as $bankloan)
          <tr>
        
              <td >{{ $bankloan->bank }}</td>
              <td >{{ number_format($bankloan->amount) }}</td>
              <td >{{ $bankloan->interest }}</td>
              <td >{{ $bankloan->tenure_years }}</td>
            
              <td >{{ $item->name }} </td>
              
  
      <td >{{ $bankloan->notes }} <td><a href="{{route('editbuisnessloan',$bankloan->id)}}"><button class="btn btn-edit btn-sm me-2">Edit</button></a></td><td><form action="{{ route('deletebuisnessloan', $bankloan->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-edit btn-sm me-2" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
</form></td></td>     
 
          </tr>
          
          @endforeach
        @endforeach
            

          </td>
        </tr>
        <tr>
         
        
        </tr>
        <!-- Add more rows here -->
      </tbody>
    </table>
  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

