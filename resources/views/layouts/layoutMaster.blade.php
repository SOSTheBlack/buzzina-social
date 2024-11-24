@isset($pageConfigs)
    {!! MaterializeTemplate::updatePageConfig($pageConfigs) !!}
@endisset
@php
    $configData = MaterializeTemplate::appClasses();
@endphp

@isset($configData["layout"])
    @include((( $configData["layout"] === 'horizontal') ? 'layouts.horizontalLayout' :
    (( $configData["layout"] === 'blank') ? 'layouts.blankLayout' :
    (($configData["layout"] === 'front') ? 'layouts.layoutFront' : 'layouts.contentNavbarLayout') )))
@endisset
