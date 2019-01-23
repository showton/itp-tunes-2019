@extends('layout')

@section('title', 'Invoices')

@section('main')
  <form action="/" method="get">
    <input type="text" name="search" value="{{$search}}">
    <button type="submit">Search</button>
  </form>
  <a href="/" class="btn">Clear</a>
  <table class="table">
    <tr>
      <th>Date</th>
      <th>Total</th>
      <th>Customer</th>
      <th>Email</th>
    </tr>
@forelse ($invoices as $invoice)
        <td>
{{$invoice->InvoiceDate}}
        </td>
        <td>
{{$invoice->Total}}
        </td>
        <td>
{{$invoice->FirstName}} {{$invoice->LastName}}
        </td>
        <td>
{{$invoice->Email}}
        </td>
      </tr>
    @empty
    <tr>
        <td colspan="4">No invoices found</td>
      </tr>
@endforelse
  </table>
@endsection
