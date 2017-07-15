@extends('front.partials.master')

@section('content')

        <div class="row">
            <h1>Kullanıcı Ayarları</h1>
            <div class="col-md-12">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                     <th>Yetkiler</th>
                     <th>İsim</th>
                     <th>E-Mail</th>
                     <th>Üyelik Tarihi</th>
                     <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            @foreach($user->roles as $rol)
                                {{$rol->name}}
                            @endforeach
                        </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="/Uyeler/{{$user->id}}/edit" class="btn btn-primary" data-toggle="tooltip" title="Düzenle"><i class="fa fa-edit"></i></a>
                            <a href="/Uyeler/{{$user->id}}" class="btn btn-danger" data-toggle="tooltip" title="Sil"><i class="fa fa-remove"></i></a>

                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">{{$users->links()}}</div>

            </div>
        </div>
@endsection
