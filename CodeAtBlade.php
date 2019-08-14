@if
<li>
  <span>{{$item['disp']}}</span>
</li>
@else
<li>
  <a href="{{$item['link']}}">{{$item['disp']}}</a>
</li>
@endif
