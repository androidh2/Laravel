<div>Code For Blade</div>
@if ($item['class']==0)
  <li>
    <span>{{$item['disp']}}</span>
  </li>
@else
  <li>
    <a href="{{$item['link']}}">{{$item['disp']}}</a>
  </li>
@endif
