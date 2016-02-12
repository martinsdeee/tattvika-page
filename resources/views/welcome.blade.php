@extends('layouts.base')

@section('base')
<style>
    
</style>
<div id="large-header" class="section no-pad-bot valign-wrapper large-header {{ Config::get('template.primary-color') }} darken-3" id="index-banner">
    
    <div class="header">
        <div class="row main-title">
            <div class="col s12 center-align">
                <h1 class="white-text">
                    {{ Config::get('template.company') }}
                    <span class="thin">{{ Config::get('template.product') }}</span>
                </h1>
                <div class="slider">             
                    <ul class="slides transparent">
                        @foreach(Config::get('template.benefits') as $benefit)
                        <li>
                            <img src="" alt="">
                            <div class="caption center-align">
                                <h5 class="white-text">
                                    {!! $benefit !!}
                                </h5>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <a href="mailto:tattvika.com@gmail.com?subject=Contact%20us" class="btn {{ Config::get('template.primary-color') }}">Contact us</a>
            </div>
        </div>
    </div> 
    <canvas id="demo-canvas"></canvas>   
</div>


@stop

@section('scripts')
<script>
(function(){
    $('.slider').slider({ 
        full_width: true,
        height:108,
        indicators:false
    });
})();

</script>
@stop
