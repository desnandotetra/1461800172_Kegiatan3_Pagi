@extends('main0172')
@section('IPA')
<a href="/siswa/tambah"><button>Tambah siswa</button></a>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>   
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $siswa)
            <tr>
                <td style= "text-align:center;">{{$siswa->id}}</td>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->alamat}}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection