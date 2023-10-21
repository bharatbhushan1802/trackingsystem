@extends('layouts.app')

@section('content')




<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Report</a></li>
          <li class="breadcrumb-item"><a href="{{route('report.typein_list')}}">Typein Report List</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">Upload Typein Report</a></li>
        </ol>
    </nav>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
   
    <div  style="margin-left:80%">
        <form action="{{ route('report.typein_csv_sample') }}" >
            @csrf
            <button type="submit" class="btn btn-success">DOWNLOAD Typein CSV File Sample</button>
        </form>
    </div> 
     <form action="{{ route('report.typein_uploadcsv') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="csv_file">
        <button type="submit" >Upload CSV</button>
    </form>
   
</div>




@endsection
