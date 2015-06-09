@extends('layout')

@section('content')
<div class="put-the-dang-thing-in-the-middle">

    @if (Session::has('info'))
      <?php
        $info = Session::get('info');
        echo '<h1>Info hash '.$info['hash'].'</h1>';
        echo '<table style="margin: 0 auto;">';
          echo '<tr><th style="width: 5em;">ID</th><td>'.$info['id'].'</td></tr>';
          echo '<tr><th>URL</th><td><a href="'.$info['url'].'">'.$info['url'].'</a></td></tr>';
          echo '<tr><th>Hash</th><td>'.$info['hash'].'</td></tr>';
          echo '<tr><th>Clicks</th><td>'.$info['count'].'</td></tr>';
          echo '<tr><th>Created</th><td>'.$info['created_at'].'</td></tr>';
        echo '</table>';
        echo '<br /><br /><hr /><br /><br />';
      ?>
    @endif

    <h1>Shorten a URL</h1>

    {{ Form::open(['url' => 'links']) }}
        <div class="form-group">
            {{ Form::text('url', null, ['class' => 'form-control', 'id' => 'shorten-input', 'placeholder' => 'http://mrtz.nl']) }}
            {{ $errors->first('url', '<div class="error">:message</div>') }}
        </div>
    {{ Form::close() }}

    @if (Session::has('hashed'))
        <output>{{ link_to(Session::get('hashed')) }}</output>
    @endif
</div>
@stop
