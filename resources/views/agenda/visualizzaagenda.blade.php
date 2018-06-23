@extends('template.layout')
@section('content')

    <div id="cont" class="container" style="margin-top: 80px">
        @include('agenda.partials.tabella')
    </div>
{{--    <a class="btn btn-success" href="{{route('pdf')}}">pdf</a>--}}
@endsection

@section('footer')
    @parent
    <script>
        var windowWidth = $(window).width();
        if (windowWidth < 600)
        {
            $('#cont').css('margin-top',160);
        }
    </script>
@stop