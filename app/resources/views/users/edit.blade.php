<x-app-layout>
    <div class="container ">
  
        <h1></h1>
  
<form style="background-color: #162546; color: #fff"
 class="p-5 mt-5, br" 
 method="POST" action="{{ route('updateuser', ['id' => $user->id]) }}">
 @csrf
    @method('PUT')
    <legend>Edit user</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Name</label>
      <x-text-input type="text" id="name" name="name" class="form-control" value="{{$user->name}}"/>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Email</label>
      <x-text-input type="text" id="email" name="email" class="form-control" value="{{$user->email}}"/>
    </div>
   <span>
       
</span>
    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
          <select name="role" id="role" class="form-select">
          @foreach ($user_roles as $user_role)
      <option value="{{ $user_role }}" selected>{{ $user_role }}</option>
    @endforeach
        @foreach ($roles as $role)
          <option value="{{ $role->id }}">{{ $role->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
        <label class="form-check-label" for="disabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

    </div>
  
  </x-app-layout>
  