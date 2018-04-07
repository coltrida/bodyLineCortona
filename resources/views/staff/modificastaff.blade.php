@extends('template.layout')
@section('content')

<div class="container" style="margin-top: 40px">

    <div class="row">

            <input type="hidden" name="_token" id="_token"    value="{{csrf_token()}}">
        @foreach($staff as $ele)
            <div class="col-md-4 col-sm-4 col-lg-4" style="margin: 75px">
                {{--<img  class="img-fluid img-thumbnail" width="250" alt="{{$ele->name}}"  src="{{asset($ele->foto)}}">--}}
                <a href="{{route('staff.info', $ele->id)}}">
                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="{{asset("storage/".$ele->foto)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                <h3 class="d-inline-block">
                                    {{$ele->nome}}
                                </h3>
                                <p class="d-inline-block" style="margin-left: 10px">
                                        <a title="Delete" href="{{route('staff.delete',$ele->id)}}" class="btn btn-danger">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                </p>
                            </h5>
                            {{--<p class="card-text">"{{$ele->descrizione}}"</p>--}}

                        </div>
                    </div>
                </a>
            </div>
        @endforeach

            <div class="col-md-4 col-sm-4 col-lg-4" style="margin: 75px">
                {{--<img  class="img-fluid img-thumbnail" width="250" alt="{{$ele->name}}"  src="{{asset($ele->foto)}}">--}}
                <a href="{{route('staff.aggiungi')}}">
                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <img class="card-img-top" src="/images/trainer/anonimo.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                NEW
                            </h5>
                            {{--<p class="card-text">"{{$ele->descrizione}}"</p>--}}

                        </div>
                    </div>
                </a>
            </div>
    </div>
</div>

@endsection

@section('footer')
    @parent
<script>
    $('document').ready(function () {

        $('.btn-danger').on('click',function (ele) {
            ele.preventDefault();
            //alert(ele.target.parentNode.parentNode.parentNode);
            var urlstaff = $(this).attr('href');
            var li = ele.target.parentNode.parentNode.parentNode.parentNode;
            $.ajax(
                urlstaff,
                {
                    method: 'DELETE',
                    data : {
                        '_token' : $('#_token').val()
                    },
                    complete : function () {
                        li.parentNode.removeChild(li);
                        // $(li).remove();

                    }
                }
            )
        });



    });
</script>
@endsection