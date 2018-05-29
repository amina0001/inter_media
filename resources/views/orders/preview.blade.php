@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order N<sup>o</sup>{{ $order->id }}:
                    @if ($order->verified)
                        <a href="#">verifiee</a>
                    @else
                        <a href="#">en attante de verification</a>
                    @endif
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-md-6">
                        <ul>
                                <li>
                                    Panne: {{ $order->breakdown->title }}
                                    <ol>
                                        <li>
                                            Marque: {{ $order->breakdown->device->brand }}
                                        </li>
                                        <li>
                                            Model: {{ $order->breakdown->device->product }}
                                        </li>
                                        <li>
                                            accessoires: {{ $order->breakdown->device->accessories }}
                                        </li>
                                        <li>
                                            Couleur:
                                            <div style="display: inline-block;height:30px;width:30px;background-color:{{ $order->breakdown->device->color }}">
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                @if (!$order->verified and Auth::user()->technician and Auth::user()->technician->admin)
                                    <form method="POST" action="{{ route('admin.verifyOrder', ['id'=>$order->id]) }}">
                                    <input name="_method" type="hidden" value="PATCH">
                                        @csrf
                                        <input class="btn btn-primary" type="submit" value="Verifier Commande"/>
                                    </form>
                                @endif
                        </ul>

                        @if($order->discussion)
                            @foreach ($order->discussion->history->sortByDesc('created_at') as $message)
                            <ul>
                                <li><a href="{{ route('user.profile', ['id'=>$message->sender->id]) }}">{{ $message->sender->last_name }} {{ $message->sender->first_name }}</a></li>
                                <li>{{ $message->context }}</li>
                                <li>{{ $message->created_at }}</li>
                            </ul>
                        @endforeach
                        @endif
                        <form action="{{ route('discussion.reply', ['id'=>$order->discussion->id]) }}" method="POST">
                            @csrf
                            <textarea name="context" id="context" cols="50" rows="5"></textarea>
                            <input class="btn btn-success" type="submit" value="Envoyer">
                        </form>
                        @if (!is_null(Auth::user()->technician) and Auth::user()->technician->admin and !$order->payment->payed)
                            <form action="{{ route('admin.setOrderPayed',['id'=>$order->id]) }}" method="POST">
                                @csrf
                                <input name="_method" type="hidden" value="PATCH">
                                <input type="submit" class="btn btn-dark" value="Marquer Comme paye"/>
                            </form>
                        @endif
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection