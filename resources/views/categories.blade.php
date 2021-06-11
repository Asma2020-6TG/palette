@section('content')
<div class="container-lg">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md"> Colors categories </div> <br> <br>

                @if(isset($categories) && $categories -> count()>0)
                    @foreach($categories as $category)

                       <a href= " /categoryPalettes/{id} " >

                        <input type='button' value='{{$category -> name}}' />
                        </a> <br> <br>

                    @endforeach
                @endif


        </div>

    </div>
</div>


