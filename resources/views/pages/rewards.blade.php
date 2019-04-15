@extends('home')
@section('content')
    <div class="container">
        <div class="row">
            {{ Breadcrumbs::render('rewards') }}
            <h1>Грамоты</h1>
            <div class="col s12" style="margin-bottom: 10rem;">
                <div class="col s3"><img class="responsive-img" src="{{ asset('/img/rewards/gramota1.jpg') }}" alt=""></div>
                <!-- /.col s3 -->
                <div class="col s3"><img class="responsive-img" src="{{ asset('/img/rewards/gramota2.jpg') }}" alt=""></div>
                <!-- /.col s3 -->
                <div class="col s3"><img class="responsive-img" src="{{ asset('/img/rewards/gramota3.jpg') }}" alt=""></div>
                <!-- /.col s3 -->
                <div class="col s3"><img class="responsive-img" src="{{ asset('/img/rewards/gramota4.jpg') }}" alt=""></div>
                <!-- /.col s3 -->
            </div>
            <!-- /.col s12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@stop