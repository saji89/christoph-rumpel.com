@if($page === 'home')
    @include('partials.metaHome')
@elseif($page === 'post')
    @include('partials.metaPost')
@elseif($page === 'speaking')
    @include('partials.metaSpeaking')
@elseif($page === 'uses')
    @include('partials.metaUses')
@endif
