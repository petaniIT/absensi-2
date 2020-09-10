@extends('layouts.app')

@section('content')
    <div>
        <h1>
            Kegiatan
        </h1>
        <div style="margin-top:20px">

            <form action="" method="post" action="{{ route('kegiatan.store') }}">
    
                <!-- CROSS Site Request Forgery Protection -->
                @csrf
    
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
    
                <div class="form-group">
                    <label>Waktu Kegiatan</label>
                    <input type="datetime-local" class="form-control" name="waktu" id="waktu">
                </div>
                <div class="form-group">
                    <label>Sub Bagian</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rdk" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">RDK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rdk" id="inlineRadio2" value="0">
                        <label class="form-check-label" for="inlineRadio2">Non RDK</label>
                    </div>
                </div>
    
                <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
            </form>
        </div>


    </div>
@endsection