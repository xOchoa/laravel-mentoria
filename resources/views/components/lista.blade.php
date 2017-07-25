<ul>
    @foreach($arreglo as $a)
    <li {{ (($loop->index % 2) == 0)?'even':'odd' }} >{{ $a }}</li>
    @endforeach
</ul>