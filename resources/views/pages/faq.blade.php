@extends ('layout')

@section ('styles')
  <link rel="stylesheet" type="text/css" media="screen" href="{{url('/')}}/css/bulma-accordion.min.css" />
@endsection

@section ('content')
<section class="accordions">
@foreach($res_faq as $faq)
  <article class="accordion is-active">
    <div class="accordion-header toggle">
      <p>{{$faq['title']}}</p>
    </div>
    <div class="accordion-body">
      <div class="accordion-content">
        {{$faq['body']}}
      </div>
    </div>
  </article>
  @endforeach
</section>

@endsection