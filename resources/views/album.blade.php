
@extends('layouts.app')

@section('content')
<!-- <div class="container-fluid">
  <div class="row">
</div>
</div> -->
<main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <!-- <h1 class="jumbotron-heading">Album example</h1> -->
          @if(Session::has('success'))
                  <div class="alert-box success">
                      <h2>{!! Session::get('success') !!}</h2>
                  </div>
          @endif
          <!-- <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p> -->
          <!-- <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p> -->
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <?php  $i=1; foreach ($images as $image ): ?>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img src="{{URL::asset('/images/'.$image->image_name)}}" style="height: 225px; width: 100%; display: block;">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supportingext below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">


                      <div class="star">
                        <div class="row">
                        <!-- Ortala -->
                          <!-- <div class="radio"> -->
                          <fieldset class="rate1">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input class="id" type="hidden" name="id" value="{{$image->id}}">

                            <input class="rate" id="rate1-star5{{$i}}" type="radio" name="rate" value="5" />
                            <label for="rate1-star5{{$i}}" title="Excellent">5</label>

                            <input class="rate" id="rate1-star4{{$i}}" type="radio" name="rate" value="4" />
                            <label for="rate1-star4{{$i}}" title="Good">4</label>

                            <input class="rate" id="rate1-star3{{$i}}" type="radio" name="rate" value="3" />
                            <label for="rate1-star3{{$i}}" title="Satisfactory">3</label>

                            <input class="rate" id="rate1-star2{{$i}}" type="radio" name="rate" value="2" />
                            <label for="rate1-star2{{$i}}" title="Bad">2</label>

                            <input class="rate" id="rate1-star1{{$i}}" type="radio" name="rate" value="1" required/>
                            <label for="rate1-star1{{$i}}" title="Very bad">1</label>
                            </fieldset>
                          </div>
                          <?php $i++; ?>
                          <!-- </div> -->

                      </div>
                      </div>

                      <br>
                      <br>
                      <div id ="result">
                      <?php if ($image->count<0 ): ?>
                            {{ round(($image->rate/$image->count),2)  }}
                            <?php else: ?>
                              0/0
                      <?php endif; ?>
                      </div>

                      <!-- <small class="text-muted">9 mins</small> -->
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </main>
@endsection