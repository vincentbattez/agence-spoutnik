{{--
  Template Name: rejoignez-nous
--}}

@extends('layouts.app')
@include('partials.page-header')
@section('content')
<section class="rejoignez">
  <div class="rejoigneznous_container">
        <h2> <?php the_field(recrutement_titre);  ?> </h2>
        <p> <?php the_field(recrutement_intro); ?> </p>
  </div>

  <?php
    echo do_shortcode('[contact-form-7 id="63" title="formulaire recrutement"]');
  ?>
</section>
@endsection
