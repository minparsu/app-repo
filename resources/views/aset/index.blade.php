@extends('template')
@section('main')
<?php 
function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

<div id="aset">
	<h2>List Aplikasi</h2>

   @if (!empty($aset_list))
   <table class="table">
    <thead>
        <tr>
            <th>ID Aplikasi </th>
            <th>Nama Aplikasi</th>
            <th>Programmer</th>
            <th>Tgl Mulai Operasi</th>
            <th>action</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($aset_list as $aset): ?>
            <tr>
                <td>{{ $aset->id_aplikasi }}</td>
                <td>{{ $aset->aplikasi }}</td>
                <td>{{ $aset->programmer }}</td>
                <td>{{ tgl_indo($aset->tgl_liveprod) }}</td>
                <td>
                    <div class="box-button"> {{ link_to('aset/'.$aset ->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }} </div>
                    <div class="box-button"> {{ link_to('aset/'.$aset ->id. '/edit', 'edit', ['class' => 'btn btn-warning btn-sm']) }} </div>
                    <div class="box-button"> {!! Form::open (['method' => 'DELETE', 'action' => ['AsetController@destroy', $aset -> id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </div> </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
    @else
    <p> Tidak ada data aplikasi.</p>
    @endif

    <div class = "table-nav">
        <div class="jumlah-data"> 
            <strong> Jumlah Aplikasi : {{ $jumlah_aplikasi }} </strong> 
        </div>
        <div class = "paging"> {{ $aset_list -> links() }} </div>
        <div class="pull-right">
            
        </div>
    </div>
    <div class="tombol-nav">
        <div>
            <a href="aset/create" class="btn btn-primary"> Tambah Aplikasi </a>
        </div>
    </div>
</div>
    @stop

    @section('footer')
    @include('footer')
    @stop