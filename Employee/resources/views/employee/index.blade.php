<x-layout/>
<h1>This is indexPage</h1>
<a href="{{route('employee.create')}}">    <button type="button" class="btn btn-primary">Create</button></a>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th scope="col">Name</th>
      <th>Address</th>
      <th>Action</th>
     
    </tr>
  </thead>
  <tbody>

@foreach($employees as $employee)
<tr>
      <td>{{$employee->id}}</td>
  <td>{{$employee->name}}</td>
  <td>{{$employee->address}}</td>
  <td><a href="{{route('employee.edit',$employee->id)}}"  class="btn btn-sm btn-primary">Edit</a>
  <form action="{{route('employee.destroy',$employee->id)}}" method="post">
    @csrf
    @method('delete')
<button  type="submit" class="btn btn-sm btn-primary  mt-2">
Delete
 
</button>
  </form>
</td>

</tr>
@endforeach
  </tbody>
</table>