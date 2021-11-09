<div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Users List</h4>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> ID </th>
              <th> Username </th>
              <th> Email Address </th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $data)
              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                @if ($data->usertype=='0')
                <td>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
                @else
                <td>
                   Not Allowed
                </td>
                @endif

              </tr>
              @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
