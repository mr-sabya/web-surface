<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="card-title">About Page Settings</div>
            </div>

            <div class="card-body">

                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif

                <form wire:submit.prevent="save">

                    <!-- ==========================
                         MAIN SECTION
                    ===========================-->
                    <h5 class="fw-bold mb-3">Main Content</h5>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model="title">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sub Title</label>
                        <input type="text" class="form-control" wire:model="sub_title">
                        @error('sub_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea class="form-control" rows="4" wire:model="content"></textarea>
                        @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Images -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Image 1</label>
                            <div class="preview">
                                @if ($image_1)
                                <img src="{{ $image_1->temporaryUrl() }}" alt="">
                                @elseif ($image_1_preview)
                                <img src="{{ asset('storage/' . $image_1_preview) }}" alt="">
                                @endif
                            </div>
                            <input type="file" class="form-control" wire:model="image_1">
                            @error('image_1') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Image 2</label>
                            <div class="preview">
                                @if ($image_2)
                                <img src="{{ $image_2->temporaryUrl() }}" alt="">
                                @elseif ($image_2_preview)
                                <img src="{{ asset('storage/' . $image_2_preview) }}" alt="">
                                @endif
                            </div>
                            <input type="file" class="form-control" wire:model="image_2">
                            @error('image_2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <hr>

                    <!-- ==========================
                         COUNTERS SECTION
                    ===========================-->
                    <h5 class="fw-bold mb-3">Counters</h5>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Counter 1</label>
                            <input type="text" class="form-control" wire:model="counster_1">
                            @error('counster_1') <span class="text-danger">{{ $message }}</span> @enderror

                            <label class="form-label mt-2">Counter 1 Text</label>
                            <input type="text" class="form-control" wire:model="counster_1_text">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Counter 2</label>
                            <input type="text" class="form-control" wire:model="counster_2">

                            <label class="form-label mt-2">Counter 2 Text</label>
                            <input type="text" class="form-control" wire:model="counster_2_text">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Counter 3</label>
                            <input type="text" class="form-control" wire:model="counster_3">

                            <label class="form-label mt-2">Counter 3 Text</label>
                            <input type="text" class="form-control" wire:model="counster_3_text">
                        </div>
                    </div>

                    <hr>

                    <!-- ==========================
                         MISSION & VISION SECTION
                    ===========================-->
                    <h5 class="fw-bold mb-3">Mission & Vision</h5>

                    <div class="mb-3">
                        <label class="form-label">Heading</label>
                        <input type="text" class="form-control" wire:model="mission_vision_heading">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="3" wire:model="mission_vision_text"></textarea>
                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Mission</label>
                            <textarea class="form-control" rows="3" wire:model="mission"></textarea>

                            <label class="form-label">Mission Icon</label>
                            <div class="preview mb-2">
                                @if ($mission_icon)
                                <img src="{{ $mission_icon->temporaryUrl() }}" alt="" class="img-fluid" />
                                @elseif ($mission_icon_preview)
                                <img src="{{ asset('storage/' . $mission_icon_preview) }}" alt="" class="img-fluid" />
                                @endif
                            </div>
                            <input type="file" class="form-control" wire:model="mission_icon">
                            @error('mission_icon') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Vision</label>
                            <textarea class="form-control" rows="3" wire:model="vision"></textarea>

                            <label class="form-label mt-2">Vision Icon</label>
                            <div class="preview">
                                @if ($vision_icon)
                                <img src="{{ $vision_icon->temporaryUrl() }}" alt="" class="img-fluid" />
                                @elseif ($vision_icon_preview)
                                <img src="{{ asset('storage/' . $vision_icon_preview) }}" alt="" class="img-fluid" />
                                @endif
                            </div>
                            <input type="file" class="form-control" wire:model="vision_icon">
                            @error('vision_icon') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                    </div>


                    <hr>

                    <!-- ==========================
                         PHILOSOPHY SECTION
                    ===========================-->
                    <h5 class="fw-bold mb-3">Philosophy Section</h5>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model="philosophy_section_title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <input type="text" class="form-control" wire:model="philosophy_section_subtitle">
                    </div>

                    <hr>

                    <!-- ==========================
                         WHY CHOOSE SECTION
                    ===========================-->
                    <h5 class="fw-bold mb-3">Why Choose Us</h5>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model="whychoose_section_title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <input type="text" class="form-control" wire:model="whychoose_section_subtitle">
                    </div>

                    <hr>

                    <!-- ==========================
                         TIMELINE SECTION
                    ===========================-->
                    <h5 class="fw-bold mb-3">Timeline Section</h5>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model="timeline_section_title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <input type="text" class="form-control" wire:model="timeline_section_subtitle">
                    </div>

                    <hr>

                    <!-- ==========================
                         TEAM SECTION
                    ===========================-->
                    <h5 class="fw-bold mb-3">Team Section</h5>

                    <div class="mb-3">
                        <label class="form-label">Team Section Title</label>
                        <input type="text" class="form-control" wire:model="team_section_title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Team Section Subtitle</label>
                        <input type="text" class="form-control" wire:model="team_section_subtitle">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">
                        Save Changes
                    </button>

                </form>

            </div>
        </div>

    </div>
</div>