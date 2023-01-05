@extends('layouts.index')
@section('lowongan')
Lowongan
@endsection
@section('content')

<div class="d-flex row justify-content-between">
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapse1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapse1">
            <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="collapse1" style="">
            <div class="card-body">
                This is a collapsable card example using Bootstrap's built in collapse
                functionality. <strong>Click on the card header</strong> to see the card body
                collapse and expand!
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapse2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapse2">
            <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="collapse2" style="">
            <div class="card-body">
                This is a collapsable card example using Bootstrap's built in collapse
                functionality. <strong>Click on the card header</strong> to see the card body
                collapse and expand!
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapse3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapse3">
            <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="collapse3" style="">
            <div class="card-body">
                This is a collapsable card example using Bootstrap's built in collapse
                functionality. <strong>Click on the card header</strong> to see the card body
                collapse and expand!
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapse4" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapse4">
            <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="collapse4" style="">
            <div class="card-body">
                This is a collapsable card example using Bootstrap's built in collapse
                functionality. <strong>Click on the card header</strong> to see the card body
                collapse and expand!
            </div>
        </div>
    </div>
</div>
@endsection