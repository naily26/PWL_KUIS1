@extends('layout.header')
@section('content')
<!DOCTYPE html>

<style>
    .table-barang {
   border: 1px solid darken($baseColor, 5%);
   border-radius: $borderRadius;
   box-shadow: 3px 3px 0 rgba(0,0,0,0.1);
   max-width: calc(100% - 2em);
   margin: 1em auto;
   overflow: hidden;
   width: 800px;
   border: none; 
   box-shadow: none;
   overflow: visible;
}
#main_table {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    borderRadius: 10px;
  }
  
  #main_table td, #main_table th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #main_table tr:nth-child(even){background-color: #f2f2f2;}
  
  #main_table tr:hover {background-color: #ddd;}
  
  #main_table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #0CC;
    color: white;
  }
    </style>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>            
            <div class="row tm-row">
                <div class="table-barang">
                    <div class="header">Daftar Pelanggan</div>
                <table id="main_table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Jenis Kelamin</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no =1; @endphp
                        @foreach($data as $d)
                        <tr>
                        <td>{{$no}}</td>
                        <td>{{$d->nama_pelanggan}}</td>
                        <td>{{$d->jenis_kelamin}}</td>
                        <td>{{$d->no_hp}}</td>
                        <td>{{$d->alamat}}</td>
                        </tr>
                        @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
                </div>
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    
                </div>             
            </div>            
            
@endsection