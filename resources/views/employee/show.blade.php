@section('content')
<div class="card">
    <div class="card-header">Here is what you've submitted.</div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Name : {{ $contacts->name }}</h5>
            <h5 class="card-title">Last_name : {{ $contacts->Last_name }}</h5>
            <h5 class="card-title">Company : {{ $contacts->company }}</h5>
            <p class="card-text">email : {{ $contacts->email }}</p>
            {{-- <p class="card-text">website : {{ $contacts->website }}</p> --}}
            <p class="card-text">Phone : {{ $contacts->phone }}</p>
        </div>

        </hr>

    </div>
</div>
