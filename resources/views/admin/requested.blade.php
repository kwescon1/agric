@extends('layouts.master_layout')

@section('content')
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Property ID</th>
                <th>Property Specs</th>
                <th>Quantity</th>
                <th>Email</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
            @if($requested->count() > 0)
            @foreach($requested as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->p_id}}</td>
                <td>{{$item->p_specs}}</td>
                <td>{{$item->p_quantity}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->tel}}</td>
            </tr>
            @endforeach
            @else
            <h1><p style="text-align: center;">No Requested Item</p></h1>
            @endif

        </tbody>
    </table>
</div>
<!-- Pagination -->
            <div class="pagination-container margin-top-20">
                <nav class="pagination">
                    <ul>
                        <li class="current-page">{{ $requested->links()}}</li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination / End -->
@endsection