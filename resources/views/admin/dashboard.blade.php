@extends("layouts.admin")

@section("content")

<div class="box no-shadow mb-0 bg-transparent">
    <div class="box-header no-border px-0">
        <h4 class="box-title">Active Current ART Status</h4>							
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-12">
        <a href="#" class="box pull-up">
            <div class="box-body">
                <div class="d-flex align-items-center">
                    <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">	
                        <h1 class="countnm font-size-38">{{ count($total) }}</h1>
                        {{-- <span class="font-size-30 icon-Bulb1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span> --}}
                    </div>
                    <div class="ml-15">											
                        <h5 class="mb-0">Total</h5>
                        <p class="text-fade font-size-12 mb-0">Active</p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-20">
                    <div class="w-p70">
                        <div class="progress progress-sm mb-0">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{ count($total)}}" aria-valuemin="0" aria-valuemax="100" style="width: {{ count($total)}}%">
                            </div>
                        </div>
                    </div>
                    <div>
                        {{-- <div>80%</div> --}}
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-12">
        <a href="#" class="box pull-up">
            <div class="box-body">
                <div class="d-flex align-items-center">
                    <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">	
                        <h1 class="countnm font-size-38">{{ count($aMale)}}</h1>
                    </div>
                    <div class="ml-15">											
                        <h5 class="mb-0">Active</h5>
                        <p class="text-fade font-size-12 mb-0">MAle</p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-20">
                    <div class="w-p70">
                        <div class="progress progress-sm mb-0">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ count($aMale)}}" aria-valuemin="0" aria-valuemax="100" style="width: {{ count($aMale)}}%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-12">
        <a href="#" class="box pull-up">
            <div class="box-body">
                <div class="d-flex align-items-center">
                    <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">	
                        <h1 class="countnm font-size-38">{{ count($aFemale)}}</h1>
                    </div>
                    <div class="ml-15">											
                        <h5 class="mb-0">Active</h5>
                        <p class="text-fade font-size-12 mb-0">Female</p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-20">
                    <div class="w-p70">
                        <div class="progress progress-sm mb-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ count($aFemale)}}" aria-valuemin="0" aria-valuemax="100" style="width: {{ count($aFemale)}}%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="box no-shadow mb-0 bg-transparent">
    <div class="box-header no-border px-0">
        <h4 class="box-title">Inactive Current ART Status</h4>							
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-12">
        <a href="#" class="box pull-up">
            <div class="box-body">
                <div class="d-flex align-items-center">
                    <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">	
                        <h1 class="countnm font-size-38">{{ count($inactive)}}</h1>
                    </div>
                    <div class="ml-15">											
                        <h5 class="mb-0">Total</h5>
                        <p class="text-fade font-size-12 mb-0">Inactive</p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-20">
                    <div class="w-p70">
                        <div class="progress progress-sm mb-0">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{ count($inactive)}}" aria-valuemin="0" aria-valuemax="100" style="width: {{ count($inactive)}}%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-12">
        <a href="#" class="box pull-up">
            <div class="box-body">
                <div class="d-flex align-items-center">
                    <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">	
                        <h1 class="countnm font-size-38">{{ count($inMale)}}</h1>
                    </div>
                    <div class="ml-15">											
                        <h5 class="mb-0">Inactive</h5>
                        <p class="text-fade font-size-12 mb-0">MAle</p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-20">
                    <div class="w-p70">
                        <div class="progress progress-sm mb-0">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ count($inMale)}}" aria-valuemin="0" aria-valuemax="100" style="width: {{ count($inMale)}}%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-12">
        <a href="#" class="box pull-up">
            <div class="box-body">
                <div class="d-flex align-items-center">
                    <div class="icon bg-primary-light rounded-circle w-60 h-60 text-center l-h-80">	
                        <h1 class="countnm font-size-38">{{ count($inFemale)}}</h1>
                    </div>
                    <div class="ml-15">											
                        <h5 class="mb-0">Inactive</h5>
                        <p class="text-fade font-size-12 mb-0">Female</p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-20">
                    <div class="w-p70">
                        <div class="progress progress-sm mb-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ count($inFemale)}}" aria-valuemin="0" aria-valuemax="100" style="width: {{ count($inFemale)}}%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="box">
    <div class="box-header">
        <h4 class="box-title">Age Distribution</h4>
        <ul class="box-controls pull-right d-md-flex d-none">
          <li class="dropdown">
            <button class="dropdown-toggle btn btn-warning-light px-10" data-toggle="dropdown" href="#" aria-expanded="false">Monthly</button>										  
            <div class="dropdown-menu dropdown-menu-right" style="">
              <a class="dropdown-item active" href="#">Today</a>
              <a class="dropdown-item" href="#">Yesterday</a>
              <a class="dropdown-item" href="#">Last week</a>
              <a class="dropdown-item" href="#">Last month</a>
            </div>
          </li>
        </ul>
    </div>
    <div class="box-body">
        {{-- <div id="charts_widget_1_chart"></div> --}}
    </div>
</div>
@endsection