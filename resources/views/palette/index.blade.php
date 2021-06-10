@section('content')
    <div class="title m-b-md"> Colors palettes </div>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col"> palette </th>
            <th scope="col"> size </th>
            <th scope="col"> favourite </th>
            <th scope="col"> delete </th>
        </tr>
        </thead>
        <tbody>
        @if(isset($palettes) && $palettes -> count()>0)
            @foreach($palettes as $palette)
                <tr>
                    <th scope="row">{{ $palette -> palette_id }}</th>
                    <td> {{ $palette -> size }}</td>
                    <td>  <button  type="button">{{$palette -> favourite}}</button> </td>
                    <td>  <button  type="button"> delete </button> </td>
                    <td>  <button  type="button"><span>  Select color </span></button> </td>
                </tr>

            @endforeach
        @endif
        <td>  <button  type="button"><span>  Back </span></button> </td>
        </tbody>
    </table>

