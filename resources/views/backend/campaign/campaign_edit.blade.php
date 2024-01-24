@extends('backend.master')
@section('content')
<section class="content-main">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Edit Campaign</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('campaign.update', $request->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Campaign For</label>
                                    <input type="text" placeholder="Entire Name" class="form-control" name="campaign_for" value="{{ $request->campaign_for }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Campaign Name</label>
                                    <input type="text" placeholder="Entire Name" class="form-control" name="campaign_name" value="{{ $request->campaign_name }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Start</label>
                                    <input type="date" placeholder="Entire Email" class="form-control" name="start" value="{{ $request->start }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">End</label>
                                    <input type="date" placeholder="Entire Email" class="form-control" name="end" value="{{ $request->end }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Percentage</label>
                                    <input type="number" class="form-control" name="percentage" value="{{ $request->percentage }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Campaign Image</label>
                                    <input type="file" class="form-control" name="campaign_image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="product_name" class="form-label">Image type</label>
                                <select class="form-select" name="image_type" id="">
                                    <option value="">Select Type</option>
                                    <option value="horizontal"><sup>(966*542)</sup> Horizontal</option>
                                    <option value="vertical"><sup>(600*712)</sup> Vertical</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="mb-4">
                                    <label for="product_name" class="form-label"></label>
                                    <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">+ Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- card end// -->
        </div>
    </div>
</section>
@endsection
