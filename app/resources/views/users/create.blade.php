<x-app-layout>
    <div class="container ">
  
        <h1></h1>
  
<form style="background-color: #162546; color: #fff"
 class="p-5 mt-5, br" 
 method="POST" action="{{ route('addnewuser')}}">
 @csrf
    @method('PUT')
    <legend>Create new user</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Name</label>
      <x-text-input type="text" id="name" name="name" class="form-control"/>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Email</label>
      <x-text-input type="text" id="email" name="email" class="form-control"/>
    </div>
   <span>
       
</span>
    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
          <select name="role" id="role" class="form-select">
          @foreach ($roles as $role)
      <option value="{{ $role }}"></option>
    @endforeach
        
    </div>
    <div class="mb-3">
      
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

    </div>
  
  </x-app-layout>
  