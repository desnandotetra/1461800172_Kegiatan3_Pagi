@extends('main0172')
@section('IPA')

<form method="post" action="/siswa/insert">
    @csrf
    <div>
        <label> nama:</label>
        <br>
        <input type="text" name="nama" >
        <br>
        <br>
        <br>
        <label> alamat :</label>
        <br>
        <input type="text" name="alamat">
        <br>
        <br><br>
        <td><input type="submit" name="submit"></td>
    </div>
</form>

@endsection