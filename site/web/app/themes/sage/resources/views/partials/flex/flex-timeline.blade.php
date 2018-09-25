<section class="section timeline-section">
  <div class="wrapper">
    @if (!empty(App::generalFields()->title))
      <h2 class="h2">{!! App::generalFields()->title !!}</h2>
    @endif
    @if (!empty(App::generalFields()->subtitle))
      <div class="subtitle">
        {!! App::generalFields()->subtitle !!}
      </div>
    @endif
    @if (!empty(App::generalFields()->text))
      <div class="section-text">{!! App::generalFields()->text !!}</div>
    @endif
  </div>
  @if (!empty(get_sub_field('timeline_events')))
    @php
      $startDate = 0;
      $endDate = 0;
      $difference = 0;
    @endphp
    <ul class="timeline">
      @foreach(get_sub_field('timeline_events') as $event)
        @php
          $loop->first ? $startDate = strtotime($event['event_date']) : '';
          if ($loop->last) {
            $endDate = strtotime($event['event_date']);
            $difference = ($endDate - $startDate) / 60 / 60 / 24;
          }
          $date = strtotime($event['event_date']);
          $daysFromStart = ($date - $startDate) / 60 / 60 / 24;
        @endphp
        <li class="timeline-event" data-position="{{$daysFromStart}}">
          <button class="btn circle-btn" type="button">{{$event['event_title']}}</button>
          <span>{{$event['event_date']}}</span>
        </li>
      @endforeach
    </ul>
    <div class="active-panel">
      @foreach(get_sub_field('timeline_events') as $event)
        <div class="panel-content {{$loop->first ? 'active' : ''}}">
          <h3>{{$event['event_title']}}</h3>
          <span>{{$event['event_date']}}</span>
          <p class="event-text">{{$event['event_text']}}</p>
        </div>
        <br />
        <br />
      @endforeach
      {{$difference}}
    </div>
  @endif
</section>
