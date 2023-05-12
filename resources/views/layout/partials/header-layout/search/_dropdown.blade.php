
<!--begin::Search-->
<div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true"
	data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto"
	data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
	<!--begin::Search toggle-->
	<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
		<div
			class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px">
			{!! getIcon('magnifier', 'fs-2 fs-md-1') !!}
		</div>
	</div>
	<!--end::Search toggle-->
	<!--begin::Menu-->
	<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
		<!--begin::Wrapper-->
		<div data-kt-search-element="wrapper">
			@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/header-layout/search/partials/_form-dropdown')

			@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/header-layout/search/partials/_results')

			@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/header-layout/search/partials/_main')

			@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/header-layout/search/partials/_empty')
		</div>
		<!--end::Wrapper-->
		@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/header-layout/search/partials/_advanced-options')

		@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/header-layout/search/partials/_preferences')
	</div>
	<!--end::Menu-->
</div>
<!--end::Search-->
