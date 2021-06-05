@extends('main0172')
@section('')
<form method="post" action="/kelas/filter">
    @csrf
<label >Filter Alamat : </label>
<select name="alamat">
    @foreach(DB::table('siswa')->select('alamat')->groupby('alamat')->get() as $alamat)
        <option value="{{$alamat->alamat}}">{{$alamat->alamat}}</option>
    @endforeach
</select>
<button name="submit">Tampilkan</button>
</form>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Guru</th>  
                <th scope="col">Nama Siswa</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $kelas)
            <tr>
                <td style= "text-align:center;">{{$Kelas->id}}</td>
                <td>{{$kelas->nama_Guru}}</td>
                <td>{{$kelas->nama_Siswa}}</td>
                <td>{{$kelas->alamat}}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection