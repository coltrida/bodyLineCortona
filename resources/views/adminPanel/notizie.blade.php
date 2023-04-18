@extends('adminPanel.index')

@section('contenuto')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Notizie</h1>
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <!-- Page insert -->
                            <form  action="{{route('admin.post.add')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-auto">
                                        <input id="titolo" type="text" name="titolo" class="form-control"  placeholder="titolo">
                                    </div>
                                    @if(count($postsInEvidenza) < 3)
                                    <div class="col-auto">
                                        <label for="evidenza">In Evidenza</label>
                                        <input type="checkbox" value="1" name="evidenza" id="evidenza" >
                                    </div>
                                    @endif

                                    <div class="col-6">
                                        <textarea class="form-control" name="testo" rows="2" placeholder="testo"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-auto">
                                        <input class="form-control" type="file" name="foto">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3">Inserisci</button>
                                    </div>
                                </div>

                            </form >
                        </div>
                    </div>

                    <!-- In Evidenza -->
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-title">
                            <h2>In Evidenza</h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="width: 100%">
                                    <thead>
                                    <tr>
                                        <th>Titolo</th>
                                        <th>Testo</th>
                                        <th>foto</th>
                                        <th style="text-align: center">azioni</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($postsInEvidenza as $item)
                                        <tr>
                                            <td style="vertical-align: middle">{{$item->titolo}}</td>
                                            <td style="vertical-align: middle">{{$item->testo}}</td>
                                            <td>
                                                @if(isset($item->foto))
                                                    <img width="300" src="{{asset($item->path)}}" alt="">
                                                @endif
                                            </td>
                                            <td style="vertical-align: middle">
                                                <div style="display: flex; justify-content: space-around; align-items: center">
                                                    <a href="{{route('admin.post.delete', $item->id)}}">
                                                        <i title="elimina" class="fas fa-trash" style="color: red"></i>
                                                    </a>
                                                    <a href="{{route('admin.post.evidenza', $item->id)}}">
                                                        <i title="elimina evidenza" class="fas fa-star" style="color: yellow"></i>
                                                    </a>
                                                    <a href="{{route('admin.post.landing', $item->id)}}">
                                                        <i title="switch landing" class="fas fa-home" style="color: {{$item->landing? 'green' : 'blue'}}"></i>
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- table -->
                    <div class="card shadow mb-4" style="width: 100%">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Titolo</th>
                                            <th>Testo</th>
                                            <th>foto</th>
                                            <th style="text-align: center">azioni</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($postsNonInEvidenza as $item)
                                            <tr>
                                                <td style="vertical-align: middle">{{$item->titolo}}</td>
                                                <td style="vertical-align: middle">{{$item->testo}}</td>
                                                <td>
                                                    @if(isset($item->foto))
                                                        <img width="300" src="{{asset($item->path)}}" alt="">
                                                    @endif
                                                </td>
                                                <td style="vertical-align: middle">
                                                    <div style="display: flex; justify-content: space-around; align-items: center">
                                                        <a href="{{route('admin.post.delete', $item->id)}}">
                                                            <i title="elimina" class="fas fa-trash" style="color: red"></i>
                                                        </a>
                                                        <a href="{{route('admin.post.landing', $item->id)}}">
                                                            <i title="switch landing" class="fas fa-home" style="color: {{$item->landing? 'green' : 'blue'}}"></i>
                                                        </a>
                                                        @if(count($postsInEvidenza) < 3)
                                                        <a href="{{route('admin.post.evidenza', $item->id)}}">
                                                            <i title="elimina evidenza" class="far fa-star" style="color: yellow"></i>
                                                        </a>
                                                        @endif
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="5">{{$postsNonInEvidenza->links()}}</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

@endsection
