@extends('layouts.app')

@section('content')
<!-- Main Container -->

    <!-- Page Content -->
    <div class="row g-0 flex-md-grow-1 pt-5">
        <div class="col-md-4 col-lg-5 col-xl-3 bg-body-dark">
        <div class="content">
            <!-- Toggle Side Content -->
            <div class="d-md-none push">
            <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
            <button type="button" class="btn w-100 btn-alt-primary" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
                Side Content
            </button>
            </div>
            <!-- END Toggle Side Content -->

            <!-- Side Content -->
            <div id="side-content" class="d-none d-md-block push">
            <ul class="list-group push">
                <li class="list-group-item " id="full_name">Full Name</li>
                <li class="list-group-item">Birth Date</li>
                <li class="list-group-item">Place of Birth</li>
                <li class="list-group-item">Address</li>
            </ul>
            </div>
            <!-- END Side Content -->
        </div>
        </div>
        <div class="col-md-8 col-lg-7 col-xl-9">
        <!-- Main Content -->
        <div class="content content-full">
            <div class="block block-rounded">
            <div class="block-content">
                <!-- <div class="ruler horizontal"></div>
                <div class="ruler vertical"></div> -->
                <div id="generator_container" class="bg-gray hover-scrollbar-content" style="height: 71vh; z-index:3;">
                    <div ref="overlay_container" id="overlay_container" class="position-relative bg-transparent p-4" @drop="drop($event)">
                        <img ref="imgBackground" class="z-0"/>
                        <div class="p-4 position-absolute top-0 start-0 z-2" v-show="showGrid">
                            <svg ref="gridLines" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <pattern id="smallGrid" class="gridContainers" width="8" height="8" patternUnits="userSpaceOnUse">
                                        <path d="M 8 0 L 0 0 0 8" fill="none" stroke="gray" stroke-width="0.5" />
                                    </pattern>
                                    <pattern id="grid" class="gridContainers" width="80" height="80" patternUnits="userSpaceOnUse">
                                        <rect width="80" height="80" fill="url(#smallGrid)" />
                                        <path d="M 80 0 L 0 0 0 80" fill="none" stroke="gray" stroke-width="1" />
                                    </pattern>
                                </defs>
                                <rect class="gridContainers"  width="100%" height="100%" fill="url(#smallGrid)" />
                            </svg>
                        </div>
                        <div id="canvas_parent" class="p-4 position-absolute top-0 start-0 z-3">
                            <canvas id="canvas_container" ref="canvas_container"/>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- END Main Content -->
        </div>
    </div>
    <!-- END Page Content -->
<!-- END Main Container -->
<script>
</script>
@endsection