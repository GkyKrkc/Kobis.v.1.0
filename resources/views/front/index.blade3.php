@extends('front.partials.master')
@section('content')
    <!-- Page Content -->



        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicons glyphicons-calendar"></span> Hatırlatma Paneli</h4>
                    </div>
                    <div class="panel-body">
                        <div class="tabbable-panel" style="border: none">
                            <form role="form" action="/HastaAra" method="post">

                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="key" placeholder="Yeni Hatırlatma" required/>
                                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="submit"><span class="glyphicons glyphicons-plus">Ekle</span></button>

                        </span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Search Field -->

                            </form>
                            <div class="tabbable-line">
                                <ul class="nav nav-tabs ">
                                    <li class="active">
                                        <a href="#tab_default_1" data-toggle="tab">
                                            Devam Edenler</a>
                                    </li>
                                    <li>
                                        <a href="#tab_default_2" data-toggle="tab">
                                            Tamamlananlar</a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_default_1">
                                        <ul class="list-group todolist">
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                7010'a Yemek İçin 15 Dk Süre verildi
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                Özel yaşam Hastanesi Ambulansı arızalı
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                7010'a Yemek İçin 15 Dk Süre verildi
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                Özel yaşam Hastanesi Ambulansı arızalı
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                7010'a Yemek İçin 15 Dk Süre verildi
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                Özel yaşam Hastanesi Ambulansı arızalı
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                7010'a Yemek İçin 15 Dk Süre verildi
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                Özel yaşam Hastanesi Ambulansı arızalı
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                7010'a Yemek İçin 15 Dk Süre verildi
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                Özel yaşam Hastanesi Ambulansı arızalı
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                7010'a Yemek İçin 15 Dk Süre verildi
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                Özel yaşam Hastanesi Ambulansı arızalı
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                7010'a Yemek İçin 15 Dk Süre verildi
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                Özel yaşam Hastanesi Ambulansı arızalı
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                7010'a Yemek İçin 15 Dk Süre verildi
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                Özel yaşam Hastanesi Ambulansı arızalı
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                7010'a Yemek İçin 15 Dk Süre verildi
                                            </li>
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                Özel yaşam Hastanesi Ambulansı arızalı
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab_default_2">
                                        <ul class="list-group todolist">
                                            <li class="list-group-item text-capitalize">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                <s>7010'a Yemek İçin 15 Dk Süre verildi</s>
                                            </li>
                                            <li class="list-group-item">
                                            <span class="pull-right">
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#sonuc"><i class="fa fa-check" aria-hidden="true" data-toggle="tooltip" title="tamamlandı"></i> </a>
                                                <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" data-toggle="tooltip" title="Sil"></i></a>
                                            </span>
                                                <s>Özel yaşam Hastanesi Ambulansı arızalı</s>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">

            </div>

        </div>

        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Desing and Coder &copy; {!! config("ayarlar.author") !!} 2017</p>
                </div>
            </div>
        </footer>

    <!-- /.container -->
@endsection