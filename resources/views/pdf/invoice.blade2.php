<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
    .panel{list-style: none;}
    .list-group.li{list-style: none}
    ul.timeline-panel-ul{list-style: none border-bottom: 1px solid #ddd;}
    .debits{border: 1px dotted #666; margin-bottom: 3px; border-radius: 5px;}
    .debits .btn{display: none}
    ul.timeline-panel-ul li{list-style: none; }

</style>
<div class="panel panel-danger">
        <div class="panel-body">


            <div class="col-md-3 col-sm-6 panel">
                <h3><i class="fa fa-male" aria-hidden="true"></i> Hasta Bilgileri</h3>
                <hr>
                <ul class="list-group hastabilgi panel panel-success" >
                    <li class="list-group-item" style="border: none;"><strong>Hasta Adı:</strong></strong>{{$hasta->hasta_adi}}</li>
                    <li class="list-group-item" style="border: none;"><strong>Mernis No:</strong></strong>{{$hasta->mernis_no}}</li>
                    <li class="list-group-item" style="border: none;"><strong>Yaş:</strong></strong>{{$hasta->yas}}</li>
                    @if($hasta->kategori=1)
                        <li class="list-group-item" style="border: none;"><strong>Kategori:</strong></strong>Yenidoğan</li>
                    @elseif($hasta->kategori=2)
                        <li class="list-group-item" style="border: none;"><strong>Kategori:</strong></strong>Pediatrik</li>
                    @elseif($hasta->kategori=2)
                        <li class="list-group-item" style="border: none;"><strong>Kategori:</strong></strong>Erişkin</li>
                    @endif
                    <li class="list-group-item" style="border: none;"><strong>{{$hasta->basamak}}.Basamak Yoğun Bakım İhtiyacı</strong></strong></li>
                    <li class="list-group-item" style="border: none;"><strong>Açiklama:</strong></strong>{{$hasta->aciklama}}</li>
                </ul>

            </div>

            <div class="col-md-6 col-sm-6 panel panel-danger">
                <h3><i class="fa fa-clock-o" aria-hidden="true"></i> Akış Bilgileri</h3>
                <hr>


                <div id="timeline">


                    <!--due -->
                    @foreach($akislar as $akis)
                        <div class="row timeline-movement pull">

                            <div class="col-sm-offset-0 col-sm-12  timeline-item">
                                <div class="row">
                                    <div class="col-sm-offset-0 col-sm-12">
                                        <div class="timeline-panel debits">
                                            <ul class="timeline-panel-ul">
                                                <li><span class="importo">{{$akis->time}}</span></li>
                                                <li><span class="causale">{{$akis->aciklama}}</span> </li>
                                                <li>
                                                    <p>
                                                        <small class="text-muted">
                                                            <i class="glyphicon glyphicon-time"></i>
                                                            {{$akis->created_at}}
                                                            <strong>
                                                                {{$akis->created_at->diffForHumans()}}
                                                            </strong>
                                                            <i class="glyphicon glyphicon-user"></i>
                                                            <strong>
                                                                {{ $akis->user->name}}
                                                            </strong>
                                                        </small>
                                                        <span class="pull-right">


                                        <a href="{{url('Akis/Sil/'.$akis->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Sil </a>
                                    </span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <div class="col-md-3 col-sm-6 panel">
                <h3><i class="fa fa-h-square" aria-hidden="true"></i> Hastane Bilgileri</h3>
                <hr>

                @foreach($hastaneler as $hastane)
                    @foreach($sonuclar as $sonuc)
                        @if($sonuc->hastane_id==$hastane->id)
                            <div class="form-group">
                                <label for="years">{{$hastane->hastane_nick}}</label>
                                <input name="hastane[{{$hastane->id}}]" class="form-control" id="years">
                                    @foreach($cevaplar as $cevap)
                                        @if($sonuc->cevap_id==$cevap->id)
                                            <input class="text-danger" selected value="{{$sonuc->cevap_id}}">{{$cevap->cevap_adi}}</input>
                                        @endif

                                    @endforeach
                                </input>
                            </div>
                        @endif
                    @endforeach

                @endforeach

            </div>

        </div>



    </div>