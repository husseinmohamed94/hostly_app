@extends('layouts.master')
@section('title')
    FrequentlyAsked
@endsection
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Features</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('Asked.index')}}" class="breadcrumb-link">FrequentlyAsked</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- pageheader -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- end pageheader -->

            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">

                    <h5 class="card-header">
                        <a href="{{route('Asked.create')}}"  class="btn btn-primary btn-lg ">Add Features</a>
                    </h5>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>asked</th>
                                    <th>Answer</th>
                                    <th>Processes</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i =0; ?>
                                @foreach($Askeds as $Aske )
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td >{{$Aske->asked}}</td>
                                        <td> {{$Aske->Answer}}</td>

                                        <td>
                                            <a href="{{route('Asked.edit',$Aske->id)}}" title="title" class="btn x-small btn-primary" ><i class="fas fa-edit"></i></a>
                                            <a href="#" title="حذف" class="btn x-small btn-danger" data-toggle="modal" data-target="#outservicdeelet{{$Aske->id}}"><i class="fas fa-trash">حذف</i></a>

                                        </td>
                                    </tr>

                                </tbody>


                                <!-- modal Delete  -->
                                <div class="modal fade" id="outservicdeelet{{$Aske->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POst" action="{{route('Asked.destroy',$Aske->id)}}">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="form-group">

                                                        <h3 for="exampleInputEmail1"> {{$Aske->asked}} هل انت متاكد من الحذف ؟ </h3>

                                                    </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">لا</button>
                                                <button type="submit" class="btn btn-primary"> نعم</button>
                                            </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <!-- end modal Delete  -->




                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>

    </div>


@endsection
@section('script')




@endsection
