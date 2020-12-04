@extends('layouts.app')
@section('title', 'Frequently asked questions')

@section('navbar')
@include('components.navbar')
@endsection

@section('content')

<!--================FAQ Area =================-->
<div class="faq">
  <details open>
    <summary>FAQ 1</summary>
    <div class="faq__content">
      <p>Answer 1</p>
    </div>
  </details>
  <details>
    <summary>FAQ 2</summary>
    <div class="faq__content">
      <p>Answer 2</p>
    </div>
  </details>
  <details>
    <summary>FAQ 3</summary>
    <div class="faq__content">
      <p>Answer 3</p>
    </div>
  </details>
  <details>
    <summary>FAQ 4</summary>
    <div class="faq__content">
      <p>Answer 2</p>
    </div>
  </details>

  <details>
    <summary>FAQ 5</summary>
    <div class="faq__content">
      <p>Answer 2</p>
    </div>
  </details>

  <details>
    <summary>FAQ 6</summary>
    <div class="faq__content">
      <p>Answer 2</p>
    </div>
  </details>
  <details>
    <summary>FAQ 7</summary>
    <div class="faq__content">
      <p>Answer 2</p>
    </div>
  </details>
  <details>
    <summary>FAQ 8</summary>
    <div class="faq__content">
      <p>Answer 2</p>
    </div>
  </details>
  <details>
    <summary>FAQ 9</summary>
    <div class="faq__content">
      <p>Answer 2</p>
    </div>
  </details>
  <details>
    <summary>FAQ 10</summary>
    <div class="faq__content">
      <p>Answer 2</p>
    </div>
  </details>
</div>
<!--================End FAQ Area =================-->
@endsection