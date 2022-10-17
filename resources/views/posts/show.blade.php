@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
        <img src="/storage/{{ $post->image }}" class="w-100">
    </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3" >
                    <img src="https://lh3.googleusercontent.com/NL7ST378xah5E4PAN2JDCO5-AE-2GmV8nhNlItbjMJQPsZRn5dyhtW-CGaXFgt_lpAjY1w=s85" class="rounded-circle w-100" style="max-width: 50px;">
                </div>
                    <div><strong>
                            <div class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">&nbsp; {{ $post->user->username }}</span>
                                </a> |
                                <a href="#" class="pr-3"> &nbsp; Follow</a>
                            </div></strong>
                    </div>
            </div>

                <hr>

                <p><strong>
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark"> {{ $post->user->username }} &nbsp; </span>
                            </a>
                        </span>
                    </strong>{{ $post->caption }} </p>
        </div>
    </div>
</div>
</div>
@endsection

