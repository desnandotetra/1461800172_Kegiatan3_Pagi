@extends('main0172')
@section('IPA')
<form method="post" action="/guru/filter">
    @csrf
<label >Filter guru : </label>
<select name="jabatan">
    @foreach(DB::table('guru')->select('jabatan')->groupby('jabatan')->get() as $jabatan)
        <option value="{{$jabatan->jabatan}}">{{$jabatan->jabatan}}</option>
    @endforeach
</select>
<button name="submit">Tampilkan</button>
</form>
<br>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama guru</th>
                <th scope="col">Jabatan</th>   
            </tr>
        </thead>
        <tbody>
            @foreach($guru as $dr)
            <tr>
                <td style= "text-align:center;">{{$dr->id}}</td>
                <td>{{$dr->nama}}</td>
                <td>{{$dr->jabatan}}</td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection