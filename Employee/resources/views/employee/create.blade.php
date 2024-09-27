<x-layout/>
<h2>Register region</h2>
<form method="POST" action="{{route('employee.store')}}">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" class="form-control" id="name"  name="name" aria-describedby="nameHelp">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address"  name="address" aria-describedby="nameHelp">
  
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>