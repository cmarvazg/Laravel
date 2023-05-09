@if (session('status'))
    <div class="alert alert-success" role="alert">
        <ul>
            <li>
                {{session('status')}}
            </li>
        </ul>
    </div>
@endif
