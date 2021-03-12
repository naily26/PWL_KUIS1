@extends('layout.header')
@section('content')

<div class="table-barang">
    <div class="header">Daftar Barang</div>
    
    <table cellspacing="0">
       <tr>
          <th>Gambar Produk</th>
          <th>Nama Produk</th>
          <th>Stok</th>
          <th>Harga</th>
          <th width="230">Comments</th>
       </tr>
 
       <tr>
          <td><img src="https://i.picsum.photos/id/1005/100/100.jpg" alt="" /></td>
          <td>Jane Doe</td>
          <td>jane.doe@foo.com</td>
          <td>01 800 2000</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td>
       </tr>
    </table>
 </div>