@extends('layouts.app')

@section('content')

    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Skundo nr</th>
            <th scope="col">Puslapio nuoroda</th>
            <th scope="col">Skundimo data</th>
            <th scope="col">Priežastis</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>google.com</td>
            <td>2250-21-15</td>
            <td>Žmogus įžeidė</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>google.com</td>
            <td>2250-21-15</td>
            <td>Peikimas</td>
          </tr>
        </tbody>
      </table>

      @endsection

