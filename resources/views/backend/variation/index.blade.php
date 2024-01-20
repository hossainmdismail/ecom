@extends('backend.master')
@section('content')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Service List </h2>
                {{-- <p>Here Your All Catego.</p> --}}
            </div>
            <div>
                <input type="text" placeholder="Search order ID" class="form-control bg-white">
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Service Message</th>
                                <th scope="col" class="text-end"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $key => $request)
                                <tr>
                                    <td><b>{{ $request->message }}</b></td>
                                    <td class="text-end">
                                        <a href="{{ route('variation.edit', $request->id) }}"
                                            class="btn btn-md rounded font-sm">Edit</a>
                                        <a href="{{ route('variation.destroy', $request->id) }}"
                                            class="btn btn-md bg-warning rounded font-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- table-responsive //end -->
            </div> <!-- card-body end// -->
        </div> <!-- card end// -->
    </section> <!-- content-main end// -->
@endsection
