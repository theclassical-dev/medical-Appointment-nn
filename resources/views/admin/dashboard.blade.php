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

    <div class="col-xl-12 col-12">
		<div class="box">
		  <div class="box-header with-border">
			<h4 class="box-title">Age Distribution</h4>
		  </div>
		  <div class="box-body">
			<div id="bar-chart" style="height: 300px; padding: 0px; position: relative;">
				<canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 738px; height: 300px;" width="738" height="300"></canvas>
				<div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
					<div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
						<div style="position: absolute; max-width: 61px; top: 282px; left: 26px; text-align: center;" class="flot-tick-label tickLabel">-5</div>
						<div style="position: absolute; max-width: 61px; top: 282px; left: 87px; text-align: center;" class="flot-tick-label tickLabel">5-9</div>
						<div style="position: absolute; max-width: 61px; top: 282px; left: 148px; text-align: center;" class="flot-tick-label tickLabel">10-14</div>
						<div style="position: absolute; max-width: 61px; top: 282px; left: 211px; text-align: center;" class="flot-tick-label tickLabel">15-19</div>
						<div style="position: absolute; max-width: 61px; top: 282px; left: 271px; text-align: center;" class="flot-tick-label tickLabel">20-24</div>
						<div style="position: absolute; max-width: 61px; top: 282px; left: 333px; text-align: center;" class="flot-tick-label tickLabel">25-29</div>
						<div style="position: absolute; max-width: 61px; top: 282px; left: 396px; text-align: center;" class="flot-tick-label tickLabel">30-34</div>
						<div style="position: absolute; max-width: 61px; top: 282px; left: 456px; text-align: center;" class="flot-tick-label tickLabel">35-39</div>
						<div style="position: absolute; max-width: 61px; top: 282px; left: 517px; text-align: center;" class="flot-tick-label tickLabel">40-44</div>
						<div style="position: absolute; max-width: 61px; top: 282px; left: 580px; text-align: center;" class="flot-tick-label tickLabel">50-54</div>
						<div style="position: absolute; max-width: 61px; top: 282px; left: 640px; text-align: center;" class="flot-tick-label tickLabel">55-59</div>
						<div style="position: absolute; max-width: 61px; top: 282px; left: 702px; text-align: center;" class="flot-tick-label tickLabel">60-64</div>
					</div>
					<div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
						<div style="position: absolute; top: 267px; left: 8px; text-align: right;" class="flot-tick-label tickLabel">0</div>
						<div style="position: absolute; top: 223px; left: 8px; text-align: right;" class="flot-tick-label tickLabel">5</div>
						<div style="position: absolute; top: 178px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">10</div>
						<div style="position: absolute; top: 134px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">15</div>
						<div style="position: absolute; top: 89px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">20</div>
						<div style="position: absolute; top: 45px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">25</div>
						<div style="position: absolute; top: 0px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">30</div>
						<div style="position: absolute; top: 0px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">35</div>
						<div style="position: absolute; top: 0px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">40</div>
						<div style="position: absolute; top: 0px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">45</div>
						<div style="position: absolute; top: 0px; left: 1px; text-align: right;" class="flot-tick-label tickLabel">50</div>
					</div>
				</div>
				<canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 738px; height: 300px;" width="738" height="300"></canvas>
			</div>
		  </div>
		</div>
	  </div>
@endsection