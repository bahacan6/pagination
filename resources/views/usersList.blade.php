@foreach($usersList as $user)

 <h1>{!! $user->userName !!} </h1>
                                  
@endforeach

@include('pagination.default', ['paginator' => $usersList])