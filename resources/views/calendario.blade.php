@extends('layouts.stile')

@section('main')
    <!--Page Title-->
    <section id="testaCalendar" class="page-title">
        <div class="auto-container">
            <h2>Calendario Corsi</h2>
            <ul class="page-breadcrumb">
                <li><a href="{{route('inizio')}}">home</a></li>
                <li>Calendario Corsi</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Timing Section -->
    <section class="timing-section">
        <div class="auto-container">

            <!-- Timing Info Tabs -->
            <div class="timing-info-tabs">
                <!-- Timing Tabs -->
                <div class="timing-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix text-justify">
                        <li data-tab="#prod-tutti" class="tab-btn active-btn">tutti</li>
                        @foreach($courses as $item)
                            <li data-tab="#prod-{{$item->id}}" class="tab-btn">{{$item->nome}}</li>
                        @endforeach

                    </ul>

                    <!-- Tabs Container -->
                    <div class="tabs-content">

                        <div class="tab active-tab" id="prod-tutti">
                            <div class="content">
                                <div class="table-image">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                        <thead class="table-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col" style="width: 16%">{{\Illuminate\Support\Str::upper('Lunedì')}}</th>
                                            <th scope="col" style="width: 16%">{{\Illuminate\Support\Str::upper('Martedì')}}</th>
                                            <th scope="col" style="width: 16%">{{\Illuminate\Support\Str::upper('Mercoledì')}}</th>
                                            <th scope="col" style="width: 16%">{{\Illuminate\Support\Str::upper('Giovedì')}}</th>
                                            <th scope="col" style="width: 16%">{{\Illuminate\Support\Str::upper('Venerdì')}}</th>
                                            <th scope="col" style="width: 16%">{{\Illuminate\Support\Str::upper('Sabato')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for($i=9; $i<=21; $i++)
                                            @for($m=0; $m<=1; $m++)
                                                @php($minuti = $m == 0 ? '00' : $m*30)
                                            <tr style="vertical-align: middle">
                                                <td style="background-color: #1a202c; color: white; vertical-align: middle">
                                                    {{$i==9 ? '0'.$i : $i}}:{{$minuti}}
                                                </td>
                                                <td style="vertical-align: middle">
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 1 && $ele->orarioformato == $i && $ele->minutiformato == $minuti )
                                                                {{$item->uppername}} <br><br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                                <td style="vertical-align: middle">
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 2 && $ele->orarioformato == $i && $ele->minutiformato == $minuti)
                                                                {{$item->uppername}} <br><br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                                <td style="vertical-align: middle">
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 3 && $ele->orarioformato == $i && $ele->minutiformato == $minuti)
                                                                {{$item->uppername}} <br><br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                                <td style="vertical-align: middle">
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 4 && $ele->orarioformato == $i && $ele->minutiformato == $minuti)
                                                                {{$item->uppername}} <br><br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                                <td style="vertical-align: middle">
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 5 && $ele->orarioformato == $i && $ele->minutiformato == $minuti)
                                                                {{$item->uppername}} <br><br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                                <td style="vertical-align: middle">
                                                    @foreach($courses as $item)
                                                        @foreach($item->calendars as $ele)
                                                            @if($ele->giorno == 6 && $ele->orarioformato == $i && $ele->minutiformato == $minuti)
                                                                {{$item->uppername}} <br><br>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endfor
                                        @endfor
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach($courses as $item)
                            <div class="tab" id="prod-{{$item->id}}">
                                <div class="content">
                                    <div class="table-image">

                                        {{--{{$item->calendars}}--}}
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Lunedì</th>
                                                        <th scope="col">Martedì</th>
                                                        <th scope="col">Mercoledì</th>
                                                        <th scope="col">Giovedì</th>
                                                        <th scope="col">Venerdì</th>
                                                        <th scope="col">Sabato</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @for($i=9; $i<=21; $i++)
                                                    @for($m=0; $m<=1; $m++)
                                                        @php($minuti = $m == 0 ? '00' : $m*30)
                                                    <tr>
                                                        <td style="background-color: #1a202c; color: white">{{$i==9 ? '0'.$i : $i}}:{{$minuti}}</td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 1 && $ele->orarioformato == $i && $ele->minutiformato == $minuti)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 2 && $ele->orarioformato == $i && $ele->minutiformato == $minuti)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 3 && $ele->orarioformato == $i && $ele->minutiformato == $minuti)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 4 && $ele->orarioformato == $i && $ele->minutiformato == $minuti)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 5 && $ele->orarioformato == $i && $ele->minutiformato == $minuti)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach($item->calendars as $ele)
                                                                @if($ele->giorno == 6 && $ele->orarioformato == $i && $ele->minutiformato == $minuti)
                                                                    {{$item->nome}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                @endfor
                                                @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!--Tab / Active Tab-->

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Timing Section -->
@endsection
