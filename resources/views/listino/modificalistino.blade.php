@extends('template.layout')
@section('content')
    <div class="container" style="margin-top: 80px">

        <div class="card bg-dark text-white" style="width: 100%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

            <div class="card-body">
                <h3 class="card-title text-center">Listino Prezzi - Modifica</h3>
            </div>
            <form action="{{route('listino.patch')}}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
                {{csrf_field()}}
                    <ul id="lista" class="list-group list-group-flush">
                        @foreach($listino as $ele)
                            <li  class="list-group-item bg-dark text-white">
                                <div  class="row">
                                    <div class="col-sm-3">
                                        <label>Nome</label>
                                        <input type="text" name="nomelistino[]" class="form-control" value="{{$ele->nome}}">
                                    </div>
                                    <div class="col-sm">
                                        <label>Descrizione</label>
                                        <input type="text" name="deslistino[]" class="form-control" value="{{$ele->descrizione}}">
                                    </div>
                                    <div class="col-sm-2">
                                        <label>Prezzo - euro</label>
                                        <input type="text" name="prezzolistino[]" class="form-control" value="{{$ele->prezzo}}">
                                    </div>
                                    <div class="col-sm-1">
                                        <br>
                                        <a title="Delete" href="{{route('listino.delete',$ele->id)}}" class="btn btn-danger">
                                            <span class="fa fa-minus"></span></a>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>



                <div class="card-body">
                    <a title="Aggiungi riga" id="add"   class="btn btn-primary">
                        <span class="fa fa-plus"></span></a>
                    <button class="btn btn-primary">Modifica</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    @parent
<script>
    $('document').ready(function () {

        $('#add').on('click',function (ele) {
            ele.preventDefault();

            $("#lista").append("<li class='list-group-item bg-dark text-white'>" +
                 "<div  class='row'>" +
                    "<div class='col-sm-3'>" +
                        "<label>Nome</label>" +
                        "<input type='text' name='nomelistino[]' class='form-control' value=''>" +
                    "</div>" +
                    "<div class='col-sm'>" +
                        "<label>Descrizione</label>" +
                        "<input type='text' name='deslistino[]' class='form-control' value=''>" +
                    "</div>" +
                    "<div class='col-sm-2'>" +
                        "<label>Prezzo - euro</label>" +
                        "<input type='text' name='prezzolistino[]' class='form-control' value=''>" +
                    "</div>" +
                 "</div>" +
                 "</li>");

        });

        $('.btn-danger').on('click',function (ele2) {

            ele2.preventDefault();
            //alert(ele2.target.parentNode.parentNode.parentNode);
            var urllistino =   $(this).attr('href');
            var li = ele2.target.parentNode.parentNode.parentNode;
            $.ajax(
                urllistino,
                {
                    method: 'DELETE',
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