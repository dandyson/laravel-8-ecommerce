<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Hi, <b>{{ Auth::user()->name }}!</b>
           <b style="float:right;"> Total Users:
            <span class="badge rounded-pill bg-danger">{{ count($users) }}</span>
           </b>
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="container">
            <div class="row">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="row">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                          <td>{{ $user->id}}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->created_at->format('d-m-Y') . ' (' . $user->created_at->diffForHumans() . ')' }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  
            </div>
        </div>

    </div>
</x-app-layout>
