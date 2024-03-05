<x-app-layout>
  <div class="container ">

    <div class="row row-cols-auto mt-5">

      @foreach ($users as $user)
        <div class="card p-4 w-25 m-3" style="background-color: #162546; color: #fff">
      
          <div class="row-cols">
            <span class="card-title">{{$user->name}}</span>
            <span class="card-title">({{$user->id}})</span>
          </div>
            <p class="card-text">{{$user->email}}</p>
            <div class="row row-cols-auto mt-2">
              <x-nav-link :href="route('edituser', ['id' => $user->id])"> <button class="btn btn-primary ml-3"">Edit</button> </x-nav-link>
              <x-nav-link :href="route('edituser', ['id' => $user->id])"> <button class="btn btn-danger ml-3">Delete</button></x-nav-link>
            </div>
          
        </div>  
      

      
          @endforeach
  
</div>

  </div>

</x-app-layout>
