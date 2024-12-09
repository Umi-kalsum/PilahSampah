@extends('layouts.app')

@section('content')
<div class="card">
  <h2>Informasi Dompet</h2>
  <form>
    <select>
      <option>Nama Bank</option>
    </select>
    <input type="text" placeholder="No. Rek">
    <input type="text" placeholder="Saldo">
    <div class="button-group">
      <button type="button">BACK</button>
      <button type="button">EDIT</button>
    </div>
  </form>
</div>
@endsection
