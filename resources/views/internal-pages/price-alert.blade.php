@extends('__layouts.client-skin')

@section('title')
    BTT | Price Alert
@endsection

@section('contents')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active">Price Alert</li>
        </ol>
    </div><!--/.row-->
    
    <!-- Main-Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Set a Price Alert</h1>
            </div>
        </div>
    </div>
    <!--// Main-Content-->
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#create-account').click(function (){
            window.location.href = '/create/account';
        });
    </script>
@endsection

