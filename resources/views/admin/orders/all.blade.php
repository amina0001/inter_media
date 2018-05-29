@extends('layouts.admin')

@section('content')
    <div class="content">
        <a class="btn btn-success ajout"  href="{{ route('admin.orderNew') }}" >
            <i class="fa fa-plus"></i> Ajouter une commanded
        </a>
        <div class="women_main">
            <!-- start content -->
            <ul>
                @foreach ($orders as $order)
                    <li >
                        <div>
                            <img class="imge" src="/storage/uploads/users/{{ $order->client->details->image }}">
                            <h4 >{{ $order->breakdown->title }}</h4>
                            <a href="{{ route('admin.orderDetails', ['id'=>$order->id]) }}" class="btn btn-success consulter" >Consulter</a>
                            <form action="{{ route('admin.orderNew', ['id'=>$order->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input class="btn btn-danger dan" type="submit" value="Suprimer">
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        <!-- end content -->
        </div>
    </div>

@endsection
