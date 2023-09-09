@extends('layouts.main')
@section('container')
    <table>
        <tr>
            <th>No</th>
            <th>Dokumen</th>
        </tr>
        @foreach($datas as $key=>$value)
        <tr>
            <td>{{ $value -> nomor }}</td>
            <td>{{ $value -> dokumen }}</td>
        </tr>
        @endforeach
    </table>
@endsection
