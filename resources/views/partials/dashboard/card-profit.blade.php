<div class="col-md">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-12 col-lg-3 skeleton" style="background: #38A2C5; height: 150px;">
                <div class="card-img card-img-left d-flex justify-content-center align-items-center skeleton">
                    <img class="skeleton" src="{{ asset('assets/img/icons/dashboard/profit.png') }}" alt="Profit image"
                        style="max-width: 150px; max-height: 150px; overflow:hidden;" />
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <span class="fw-semibold d-block mb-1 skeleton">{{ $title }}</span>
                    <h5 class="card-title mb-2 skeleton">
                        {{ $result }}
                    </h5>
                    <p class="card-text"><small class="text-muted skeleton">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
