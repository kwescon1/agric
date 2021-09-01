@extends('layouts.master_layout')

@section('content')
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Type</th>
                <th>Specs</th>
                <th>Price</th>
                <th>Status</th>
            
            </tr>
        </thead>
        
        <tbody>
            @if($items->count() > 0)
            @foreach($items as $item)
            <tr>
                
                <td>{{$item->id}}</td>
                <td>{{$item->p_type}}</td>
                <td>{{$item->p_specs}}</td>
                <td>{{$item->p_price}}</td>
                <td>{{$item->p_status}}</td>
            </tr>
            @endforeach
            @else
            <h1><p style="text-align: center;">No Item Uploaded</p></h1>
            @endif
        </tbody>
    </table>
</div>
<!-- Pagination -->
            <div class="pagination-container margin-top-20">
                <nav class="pagination">
                    <ul>
                        <li class="current-page">{{ $items->links()}}</li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination / End -->
@endsection