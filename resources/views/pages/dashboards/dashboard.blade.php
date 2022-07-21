@extends('layouts.dashboards')

@section('content')
    <!-- ASIDE START -->
    @include('includes.dashboards.lecturer.sidebar')
    <!-- ASIDE END -->

    <!-- MAIN START -->
    <main>
        <h1>Dashboard</h1>

        <div class="date">
            <p><?php echo date("l - d/m/Y") ?></p>
        </div>

        <!-- MAIN CARDS -->
        @include('includes.dashboards.lecturer.cards')

        <!-- MAIN TABLE -->
        @include('includes.dashboards.lecturer.mainTable')
    </main>
    <!-- MAIN END -->

    <!-- RIGHT SECTION START -->
    <div class="right">
        <!-- TOP START -->
        @include('includes.dashboards.lecturer.rightTop')
        <!-- TOP END -->

        <!-- RIGHT MIDDLE - RECENT UPDATES START -->
        @include('includes.dashboards.lecturer.rightMiddle')
        <!-- RIGHT MIDDLE - RECENT UPDATES END -->

        <!-- RIGHT BOTTOM START -->
        @include('includes.dashboards.lecturer.rightBottom')
        <!-- RIGHT BOTTOM END -->
    </div>
    <!-- RIGHT SECTION END -->
@endsection
