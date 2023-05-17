<x-default-layout>

    <!--begin::Row-->
    <div class="row gx-5 gx-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-6 mb-5 mb-xl-10">
            @include('partials/widgets/charts/_widget-8')
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-6">
            @include('partials/widgets/tables/_widget-10')
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->


    <!--begin::Row-->
    <div class="row gx-5 gx-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
            @include('partials/widgets/lists/_widget-5')
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8">
            @include('partials/widgets/cards/_widget-18')
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</x-default-layout>