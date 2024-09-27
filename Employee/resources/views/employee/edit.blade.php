<x-layout/>


<form method="post" action="{{route('employee.update',$employee->id)}}">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" class="form-control" id="name"  name="name" aria-describedby="nameHelp" value="{{$employee->name}}">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address"  name="address" aria-describedby="nameHelp" value="{{$employee->address}}">
  </div>

  
  <button type="submit" class="btn btn-primary">Update</button>
</form>