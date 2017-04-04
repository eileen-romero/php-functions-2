<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function adventure($type) {
  if ($type == 'surfing') {
    $valid = true;
    $description = 'It&rsquo;s an activity done on the waves. The sport of the coast.';
  } else if ($type == 'skydiving') {
    $valid = true;
    $description = 'An extreme sport, that only the sport that majority of people are too scared to do. Are you crazy enough to jump out of a plane?';
  } else if ($type == 'deepseadiving') {
    $valid = true;
    $description = 'Go deep into the depths of the oceans. Find fish nearly no man has ever seen. The oceans a lot deeper than you would think.';
  } else if ($type == 'skateboarding') {
    $valid = true;
    $description = 'Dont have an ocean or an ariplaine? You just need a piece of wood and wheels and you can skateboard.';
  } else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p class="card-text">'.$description.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.capfirst($type).'? What?!?!?!</strong> Enter something thats fun next time.</p>
      </div>
    ');
  }
}
