<div>Code For Blade</div>
@if ($item['class']==0)
  <li>
    <span>{{$item['disp']}}</span>
  </li>
@else1
  <li><a href="{{$item['link']}}">{{$item['disp']}}</a></li>
@endif
