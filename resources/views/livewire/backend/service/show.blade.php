<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">

            <div class="card-header">
                <h4 class="m-0">Service Details</h4>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-4">
                        @if ($service->image)
                        <div class="text-center">
                            <img src="{{ asset('storage/' . $service->image) }}"
                                alt="{{ $service->title }}"
                                class="img-thumbnail rounded-4 shadow-sm w-100">
                        </div>
                        @endif
                    </div>


                    <div class="col-lg-8">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-2">
                                <label class="form-label fw-semibold m-0">Title</label>
                                <div class="form-control-plaintext">{{ $service->title }}</div>
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label fw-semibold m-0">Slug</label>
                                <div class="form-control-plaintext">{{ $service->slug }}</div>
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label fw-semibold m-0">Heading</label>
                                <div class="form-control-plaintext">{{ $service->heading }}</div>
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label fw-semibold m-0">Description Title</label>
                                <div class="form-control-plaintext">{{ $service->description_title }}</div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <label class="form-label fw-semibold m-0">Sub Heading</label>
                                <div class="form-control-plaintext">{{ $service->sub_heading }}</div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <label class="form-label fw-semibold m-0">Short Description</label>
                                <div class="form-control-plaintext text-muted">{{ $service->short_description }}</div>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Description</label>
                                <div class="border rounded-3 p-3 bg-light text-muted">
                                    {!! $service->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>