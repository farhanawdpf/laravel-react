<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, Crud!</title>
  </head>
  <body>
      <div class="text-center">
        <h1>Crud</h1>
        <p>This is a simple CRUD application.</p>
        <br>
        <a href="{{ route('create') }}">
          <button class="btn btn-md btn-success"> Create</button>
        </a>


      </div>

     

      <div class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

             @foreach ($students as $student )
               
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->email }} </td>

                <td>
                    <div class="btn-group">
                      <a href="{{ route('edit', $student->id) }}">
                        <button class="btn btn-md btn-success me-1 p-1">edit</button>
                      </a>

                    <form action="{{route('delete')}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="text" name="student_id" value="{{ $student->id }}" hidden>
                      <button class="btn btn-md btn-danger  p-1">delete</button>
                </form>
                
                 
                    </div>
                </td>
              </tr>

              @endforeach

            </tbody>
          </table>
      </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
