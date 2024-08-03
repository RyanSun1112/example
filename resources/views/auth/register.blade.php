
<x-layout>
    <x-slot:heading>Register</x-slot:heading>
    

<form method="POST" action="/register">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
     
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <x-form-label form="first_name">First Name</x-form-label>
          <div class="mt-2">
           <x-form-input name="first_name" id="first_name" autocomplete="first_name" placeholder="Joe" required></x-form-input>
            <x-form-error name="first_name"></x-form-error>
          </div>
        </div>
        <div class="sm:col-span-4">
          <x-form-label form="last_name">Last Name</x-form-label>
          <div class="mt-2">
           <x-form-input name="last_name" id="last_name" autocomplete="last_name" placeholder="hugs" required></x-form-input>
            <x-form-error name="last_name"></x-form-error>
          </div>
        </div>
      
        <div class="sm:col-span-4">
          <x-form-label form="email">Email</x-form-label>
          <div class="mt-2">
           <x-form-input name="email" id="email" autocomplete="email" type="email" placeholder="hhii" required></x-form-input>
            <x-form-error name="email"></x-form-error>
          </div>
        </div>
        <div class="sm:col-span-4">
          <x-form-label form="password">Password</x-form-label>
          <div class="mt-2">
           <x-form-input name="password" id="password" autocomplete="password" type="password" required></x-form-input>
            <x-form-error name="password"></x-form-error>
          </div>
        </div>
        <div class="sm:col-span-4">
          <x-form-label form="password_confirmation">Password Confirmation</x-form-label>
          <div class="mt-2">
           <x-form-input name="password_confirmation" id="password_confirmation" autocomplete="password_confirmation" type="password" required></x-form-input>
            <x-form-error name="password_confirmation"></x-form-error>
          </div>
        </div>
        
            <!-- <div class="mt-10">

                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li class="text-red-500 italic">{{$error}}</li>
                    @endforeach
                </ul>
                @endif
            </div> -->
          </div>
        </div>

       

        

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
    <x-form-button>Register</x-form-button>
  </div>
</form>


</x-layout>