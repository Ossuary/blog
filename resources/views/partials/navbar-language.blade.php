<div id="navbar-language" class="language-closed">
    <div id="close-navbar-language-button" class="pull-right">
        <a href="javascript:void(0)"><i class="fa fa-close fa-2x"></i></a>
    </div>
    <div class="navigation">
        <div id="language-dropdown" class="">
            <h1 id="language-header">Choose your language</h1>
            <hr>
            @foreach (Config::get('languages') as $lang => $language)
                <a  href="{{ route('lang.switch', $lang) }}">
                    <li>
                        <i class="fa fa-globe "></i> {{$language}}
                    </li>
                </a>
                <hr>
            @endforeach
        </div>
    </div>

</div>